<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\CropController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister']);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/profile/edit', [AuthController::class, 'editProfile'])
    ->middleware('auth');

Route::post('/profile/update', [AuthController::class, 'updateProfile'])
    ->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard', [
        'user' => auth()->user(),
    ]);
})->middleware('auth');
Route::get('/password/change', [
    AuthController::class,
    'showChangePassword'
])->middleware('auth');

Route::post('/password/change', [
    AuthController::class,
    'updatePassword'
])->middleware('auth');
Route::view('/tailwind-test', 'tailwind-test');
Route::view('/responsive-test', 'responsive-test');
Route::view('/layout-test', 'layout-test');
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');
Route::get('/farmer-dashboard', function () {

$weather = null;

try {
    $response = Http::timeout(10)->get(
        'https://api.open-meteo.com/v1/forecast',
        [
            // ယာယီနမူနာ coordinates — Ma Hlaing အတွက် နောက်မှ အတည်ပြုနိုင်သည်
            'latitude' => 21.1,
            'longitude' => 95.2,

            'current' => 'temperature_2m,relative_humidity_2m,apparent_temperature,weather_code,wind_speed_10m',
            'daily' => 'precipitation_probability_max,temperature_2m_max,temperature_2m_min',
            'timezone' => 'Asia/Yangon',
            'forecast_days' => 1,
        ]
    );

    if ($response->successful()) {
        $data = $response->json();

        $code = data_get($data, 'current.weather_code');

        $description = match ($code) {
            0 => 'ကောင်းကင်ကြည်လင်',
            1, 2 => 'တစ်စိတ်တစ်ပိုင်း တိမ်ထူ',
            3 => 'တိမ်ထူ',
            45, 48 => 'မြူထူ',
            51, 53, 55 => 'မိုးဖွဲ',
            61, 63, 65, 80, 81, 82 => 'မိုးရွာနိုင်',
            95, 96, 99 => 'မိုးကြိုးမုန်တိုင်း ဖြစ်နိုင်',
            default => 'ရာသီဥတုအခြေအနေ',
        };

        $weather = [
            'temperature' => data_get($data, 'current.temperature_2m'),
            'feels_like' => data_get($data, 'current.apparent_temperature'),
            'humidity' => data_get($data, 'current.relative_humidity_2m'),
            'wind_speed' => data_get($data, 'current.wind_speed_10m'),
            'description' => $description,
            'rain_probability' => data_get(
                $data,
                'daily.precipitation_probability_max.0'
            ),
            'max_temp' => data_get($data, 'daily.temperature_2m_max.0'),
            'min_temp' => data_get($data, 'daily.temperature_2m_min.0'),
        ];
    }
} catch (\Throwable $e) {
    report($e);
}

        return view('farmer.dashboard', [
        'user' => auth()->user(),
    ])->with('weather', $weather);
});

Route::middleware('auth')->group(function () {
    Route::get('/farms', [FarmController::class, 'index'])
        ->name('farms.index');

    Route::get('/farms/create', [FarmController::class, 'create'])
        ->name('farms.create');

    Route::post('/farms', [FarmController::class, 'store'])
        ->name('farms.store');
});
Route::middleware('auth')->group(function () {
    Route::get('/crops', [CropController::class, 'index'])
        ->name('crops.index');

    Route::get('/crops/create', [CropController::class, 'create'])
        ->name('crops.create');

    Route::post('/crops', [CropController::class, 'store'])
        ->name('crops.store');
});
Route::get('/crops/{crop}/edit', [CropController::class, 'edit'])
    ->name('crops.edit');

Route::put('/crops/{crop}', [CropController::class, 'update'])
    ->name('crops.update');
    Route::delete('/crops/{crop}', [CropController::class, 'destroy'])
    ->name('crops.destroy');
Route::get('/crop-guides', function () {
    return view('farmer.crop-guides');
})->name('crop-guides.index');
Route::get('/crop-guides/{crop}', function (string $crop) {
    $guides = [
        'onion' => ['name' => 'Onion', 'myanmar' => 'ကြက်သွန်နီ'],
        'sesame' => ['name' => 'Sesame', 'myanmar' => 'နှမ်း'],
        'cotton' => ['name' => 'Cotton', 'myanmar' => 'ဝါ'],
        'corn' => ['name' => 'Corn', 'myanmar' => 'ပြောင်း'],
        'tomato' => ['name' => 'Tomato', 'myanmar' => 'ခရမ်းချဉ်သီး'],
        'peanut' => ['name' => 'Peanut', 'myanmar' => 'မြေပဲ'],
    ];

    abort_unless(isset($guides[$crop]), 404);

    return view('farmer.crop-guide-detail', [
        'guide' => $guides[$crop],
    ]);
})->name('crop-guides.show');

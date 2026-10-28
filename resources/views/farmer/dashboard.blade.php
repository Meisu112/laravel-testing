
<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard | Smart Farmer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#f5f8f1] text-slate-800 antialiased">


<div class="min-h-screen md:flex">

    <!-- Sidebar -->
    <aside class="bg-[#174b32] p-5 text-white md:min-h-screen md:w-64 md:shrink-0">
        <a href="{{ url('/farmer-dashboard') }}" class="mb-7 flex items-center gap-3">
            <span class="grid size-11 place-items-center rounded-2xl bg-lime-100 text-2xl">🌱</span>
            <span>
                <span class="block text-lg font-bold">Smart Farmer</span>
                <span class="text-xs text-green-200">စမတ်စိုက်ပျိုးရေးစနစ်</span>
            </span>
        </a>

        <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-green-200">
            Main Menu
        </p>

        <nav class="flex gap-2 overflow-x-auto pb-2 md:flex-col">
            <a href="#dashboard" class="shrink-0 rounded-xl bg-green-700 px-4 py-3 text-sm font-semibold">
                ▦ Dashboard
            </a>

<a href="{{ route('farms.index') }}"
   class="shrink-0 rounded-xl px-4 py-3 text-sm text-green-50 hover:bg-green-800">
    🌾 My Farms
</a>


<a href="{{ route('crop-guides.index') }}"
   class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-50 transition hover:bg-green-800">
    <span>🌱</span>
    <span>Crops & Guides</span>
</a>
            <a href="#activities" class="shrink-0 rounded-xl px-4 py-3 text-sm text-green-50 hover:bg-green-800">
                📋 Farm Activities
            </a>
            <a href="#finance" class="shrink-0 rounded-xl px-4 py-3 text-sm text-green-50 hover:bg-green-800">
                💰 Expenses & Income
            </a>
            <a href="#weather" class="shrink-0 rounded-xl px-4 py-3 text-sm text-green-50 hover:bg-green-800">
                ☀️ Weather
            </a>
            <a href="#reminders" class="shrink-0 rounded-xl px-4 py-3 text-sm text-green-50 hover:bg-green-800">
                🔔 Reminders
            </a>
        </nav>

{{-- Weather Information Card --}}
<section class="my-6 rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
    <div class="flex flex-wrap items-center justify-between gap-3">
        <div>
            <p class="text-sm font-semibold text-green-700">
                WEATHER INFORMATION
            </p>
            <h2 class="mt-1 text-2xl font-bold text-green-900">
                🌦️ ရာသီဥတုအချက်အလက်
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                လက်ရှိရာသီဥတုနှင့် ယနေ့ခန့်မှန်းချက်
            </p>
        </div>

        <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800">
            Open-Meteo
        </span>
    </div>

    @if ($weather)
        <div class="mt-6 rounded-2xl bg-gradient-to-r from-green-700 to-emerald-500 p-6 text-white">
            <p class="text-sm text-green-50">
                {{ $weather['description'] }}
            </p>

            <p class="mt-2 text-5xl font-bold">
                {{ number_format((float) $weather['temperature'], 1) }}°C
            </p>

            <p class="mt-2 text-sm text-green-50">
                ခံစားရသောအပူချိန်
                {{ number_format((float) $weather['feels_like'], 1) }}°C
            </p>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-4 lg:grid-cols-4">
            <div class="rounded-xl bg-green-50 p-4">
                <p class="text-sm text-gray-600">💧 စိုထိုင်းဆ</p>
                <p class="mt-2 text-xl font-bold text-green-900">
                    {{ $weather['humidity'] }}%
                </p>
            </div>

            <div class="rounded-xl bg-green-50 p-4">
                <p class="text-sm text-gray-600">💨 လေတိုက်နှုန်း</p>
                <p class="mt-2 text-xl font-bold text-green-900">
                    {{ $weather['wind_speed'] }} km/h
                </p>
            </div>

            <div class="rounded-xl bg-green-50 p-4">
                <p class="text-sm text-gray-600">🌧️ မိုးရွာနိုင်ခြေ</p>
                <p class="mt-2 text-xl font-bold text-green-900">
                    {{ $weather['rain_probability'] ?? '--' }}%
                </p>
            </div>

            <div class="rounded-xl bg-green-50 p-4">
                <p class="text-sm text-gray-600">🌡️ အပူချိန်အမြင့်ဆုံး / အနိမ့်ဆုံး</p>
                <p class="mt-2 text-lg font-bold text-green-900">
                    {{ $weather['max_temp'] ?? '--' }}° /
                    {{ $weather['min_temp'] ?? '--' }}°C
                </p>
            </div>
        </div>

        <p class="mt-4 text-xs leading-5 text-gray-500">
            ရာသီဥတုအချက်အလက်များသည် ခန့်မှန်းချက်ဖြစ်သည်။
            စိုက်ပျိုးရေးလုပ်ငန်း ဆုံးဖြတ်ချက်များအတွက် ဒေသဆိုင်ရာ
            မိုးလေဝသသတင်းများကိုလည်း စစ်ဆေးပါ။
        </p>
    @else
        <div class="mt-6 rounded-xl bg-amber-50 p-5 text-amber-800">
            <p class="font-semibold">ရာသီဥတုအချက်အလက်ကို ယခုရယူ၍ မရသေးပါ။</p>
            <p class="mt-1 text-sm">
                Internet connection ကို စစ်ဆေးပြီး စာမျက်နှာကို ပြန်ဖွင့်ပါ။
            </p>
        </div>
    @endif
</section>


        <div class="mt-8 hidden rounded-2xl border border-green-700 p-4 md:block">
            <p class="text-sm font-semibold">🌿 စိုက်ပျိုးရေးအကူအညီ</p>
            <p class="mt-2 text-xs leading-6 text-green-200">
                သင့်စိုက်ခင်းမှတ်တမ်းများကို တစ်နေရာတည်းတွင် စီမံခန့်ခွဲပါ။
            </p>
        </div>
    </aside>

    <!-- Main Content -->
    <main id="dashboard" class="min-w-0 flex-1 p-4 sm:p-6 lg:p-8">

        <!-- Header -->
        <header class="mb-7 flex items-center justify-between gap-4">
            <div>
                <p class="mb-2 text-xs font-bold uppercase tracking-widest text-green-700">
                    SMART FARMER / DASHBOARD
                </p>
                <h1 class="text-2xl font-bold tracking-tight sm:text-3xl">
                    မင်္ဂလာပါ 👋
                </h1>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                    သင့်စိုက်ခင်းများ၏ အခြေအနေကို ဒီနေရာမှာ ကြည့်ရှုနိုင်ပါတယ်။
                </p>
            </div>

            <div class="flex shrink-0 items-center gap-3 rounded-2xl border border-green-100 bg-white p-2 sm:p-3">
                <div class="grid size-10 place-items-center rounded-full bg-green-100 text-xl">
                    👨‍🌾
                </div>
                <div class="hidden sm:block">
                    <p class="text-sm font-semibold">
                        {{ auth()->user()->name ?? 'Farmer' }}
                    </p>
                    <p class="text-xs text-slate-500">Farmer Account</p>
                </div>
            </div>
        </header>

        <!-- Welcome Banner -->
        <section class="mb-7 flex items-center justify-between overflow-hidden rounded-3xl border border-green-100 bg-gradient-to-r from-green-100 to-lime-50 p-6 sm:p-8">
            <div class="max-w-xl">
                <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-green-800">
                    SMART FARMING 🌿
                </span>
                <h2 class="mt-4 text-xl font-bold leading-relaxed text-green-950 sm:text-2xl">
                    စိုက်ပျိုးရေးကို ပိုမိုလွယ်ကူစေဖို့
                </h2>
                <p class="mt-2 text-sm leading-7 text-green-900/70">
                    သီးနှံများ၊ စိုက်ပျိုးရေးလုပ်ငန်းများနှင့်
                    ကုန်ကျစရိတ်များကို စနစ်တကျ မှတ်တမ်းတင်ပါ။
                </p>
            </div>
            <div class="hidden text-6xl sm:block lg:text-7xl">🌾</div>
        </section>

        <!-- Statistics -->
        <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

            <article class="rounded-2xl border border-green-100 bg-white p-5 shadow-sm shadow-green-900/5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-slate-500">စိုက်ခင်းများ</p>
                    <span class="grid size-11 place-items-center rounded-xl bg-green-100 text-xl">🌱</span>
                </div>
                <p class="mt-5 text-3xl font-bold text-green-900">03</p>
                <p class="mt-2 text-xs text-slate-400">နမူနာဒေတာ</p>
            </article>

            <article class="rounded-2xl border border-green-100 bg-white p-5 shadow-sm shadow-green-900/5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-slate-500">သီးနှံအမျိုးအစား</p>
                    <span class="grid size-11 place-items-center rounded-xl bg-lime-100 text-xl">🌾</span>
                </div>
                <p class="mt-5 text-3xl font-bold text-green-900">05</p>
                <p class="mt-2 text-xs text-slate-400">နမူနာဒေတာ</p>
            </article>

            <article class="rounded-2xl border border-green-100 bg-white p-5 shadow-sm shadow-green-900/5" id="finance">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-slate-500">ကုန်ကျစရိတ်</p>
                    <span class="grid size-11 place-items-center rounded-xl bg-orange-100 text-xl">💸</span>
                </div>
                <p class="mt-5 break-words text-2xl font-bold text-slate-800">125,000 Ks</p>
                <p class="mt-2 text-xs text-slate-400">နမူနာဒေတာ</p>
            </article>

            <article class="rounded-2xl border border-green-100 bg-white p-5 shadow-sm shadow-green-900/5">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-slate-500">ခန့်မှန်းအမြတ်</p>
                    <span class="grid size-11 place-items-center rounded-xl bg-sky-100 text-xl">📈</span>
                </div>
                <p class="mt-5 break-words text-2xl font-bold text-green-700">85,000 Ks</p>
                <p class="mt-2 text-xs text-slate-400">နမူနာဒေတာ</p>
            </article>

        </section>

        <!-- Farm Cards -->
        <section id="farms" class="mt-9">
            <div class="mb-4 flex items-center justify-between gap-3">
                <div>
                    <h2 class="text-lg font-bold">ကျွန်ုပ်၏ စိုက်ခင်းများ</h2>
                    <p class="mt-1 text-sm text-slate-500">သီးနှံစိုက်ခင်းများ၏ အကျဉ်းချုပ်</p>
                </div>
                <span class="text-sm font-semibold text-green-700">Farm Overview</span>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">

                <article class="rounded-2xl border border-green-100 bg-white p-5 transition hover:-translate-y-1 hover:shadow-lg hover:shadow-green-900/5">
                    <div class="mb-4 flex size-14 items-center justify-center rounded-2xl bg-orange-50 text-3xl">🧅</div>
                    <h3 class="font-bold">ကြက်သွန်နီစိုက်ခင်း</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">မလှိုင်မြို့နယ်၊ မန္တလေးတိုင်း</p>
                    <p class="mt-1 text-sm text-slate-500">မျိုးစေ့တိုက်ရိုက်ချစိုက်နည်း</p>
                    <span class="mt-4 inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-800">
                        နမူနာစိုက်ခင်း
                    </span>
                </article>

                <article class="rounded-2xl border border-green-100 bg-white p-5 transition hover:-translate-y-1 hover:shadow-lg hover:shadow-green-900/5">
                    <div class="mb-4 flex size-14 items-center justify-center rounded-2xl bg-lime-50 text-3xl">🌾</div>
                    <h3 class="font-bold">နှမ်းစိုက်ခင်း</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">စိုက်ပျိုးမှုမှတ်တမ်း</p>
                    <p class="mt-1 text-sm text-slate-500">လုပ်ငန်းအခြေအနေကို မှတ်တမ်းတင်ရန်</p>
                    <span class="mt-4 inline-flex rounded-full bg-lime-100 px-3 py-1 text-xs font-medium text-lime-800">
                        နမူနာစိုက်ခင်း
                    </span>
                </article>

                <article class="rounded-2xl border border-green-100 bg-white p-5 transition hover:-translate-y-1 hover:shadow-lg hover:shadow-green-900/5">
                    <div class="mb-4 flex size-14 items-center justify-center rounded-2xl bg-amber-50 text-3xl">🥜</div>
                    <h3 class="font-bold">မြေပဲစိုက်ခင်း</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">စိုက်ပျိုးမှုမှတ်တမ်း</p>
                    <p class="mt-1 text-sm text-slate-500">ကုန်ကျစရိတ်များ မှတ်တမ်းတင်ရန်</p>
                    <span class="mt-4 inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-800">
                        နမူနာစိုက်ခင်း
                    </span>
                </article>

            </div>
        </section>

        <!-- Activity and Weather -->
        <section class="mt-9 grid grid-cols-1 gap-5 xl:grid-cols-3">

            <article id="activities" class="rounded-2xl border border-green-100 bg-white p-5 sm:p-6 xl:col-span-2">
                <h2 class="font-bold">မကြာသေးမီက လုပ်ဆောင်ချက်များ</h2>
                <p class="mt-1 text-sm text-slate-500">စိုက်ပျိုးရေးလုပ်ငန်း မှတ်တမ်းများ</p>

                <div class="mt-5 divide-y divide-slate-100">
                    <div class="flex items-center gap-4 py-4">
                        <span class="grid size-11 shrink-0 place-items-center rounded-xl bg-sky-50 text-xl">💧</span>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-semibold">ရေလောင်းခြင်း</p>
                            <p class="mt-1 text-xs text-slate-500">ကြက်သွန်နီစိုက်ခင်း</p>
                        </div>
                        <span class="text-xs text-slate-400">နမူနာ</span>
                    </div>

                    <div class="flex items-center gap-4 py-4">
                        <span class="grid size-11 shrink-0 place-items-center rounded-xl bg-lime-50 text-xl">🌱</span>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-semibold">မျိုးစေ့တိုက်ရိုက်ချစိုက်ခြင်း</p>
                            <p class="mt-1 text-xs text-slate-500">ကြက်သွန်နီစိုက်ခင်း</p>
                        </div>
                        <span class="text-xs text-slate-400">နမူနာ</span>
                    </div>

                    <div class="flex items-center gap-4 py-4">
                        <span class="grid size-11 shrink-0 place-items-center rounded-xl bg-emerald-50 text-xl">🌿</span>
                        <div class="min-w-0 flex-1">
                            <p class="text-sm font-semibold">မြေဩဇာအသုံးပြုခြင်း</p>
                            <p class="mt-1 text-xs text-slate-500">နှမ်းစိုက်ခင်း</p>
                        </div>
                        <span class="text-xs text-slate-400">နမူနာ</span>
                    </div>
                </div>
            </article>

            <article id="weather" class="rounded-2xl bg-gradient-to-br from-green-800 to-emerald-600 p-6 text-white">
                <div class="flex items-center justify-between">
                    <h2 class="font-bold">ရာသီဥတု</h2>
                    <span class="text-3xl">🌤️</span>
                </div>
                <p class="mt-2 text-sm text-green-100">မလှိုင်မြို့နယ်</p>

                <p class="mt-7 text-4xl font-bold">--°C</p>
                <p class="mt-2 text-sm text-green-100">ရာသီဥတုအချက်အလက် မရရှိသေးပါ</p>

                <div class="mt-6 border-t border-white/20 pt-4">
                    <p class="text-sm">🌧️ မိုးရွာနိုင်ခြေ — မရရှိသေးပါ</p>
                    <p class="mt-3 text-sm">💨 လေတိုက်နှုန်း — မရရှိသေးပါ</p>
                </div>

                <p class="mt-5 rounded-xl bg-white/10 p-3 text-xs leading-5 text-green-50">
                    Weather API မချိတ်ဆက်ရသေးပါ။ ဤနေရာတွင် အမှန်တကယ်
                    ရာသီဥတုအချက်အလက် မပြသသေးပါ။
                </p>
            </article>

        </section>

        <!-- Reminders -->
        <section id="reminders" class="mt-5 rounded-2xl border border-green-100 bg-white p-5 sm:p-6">
            <h2 class="font-bold">သတိပေးချက်များ</h2>
            <p class="mt-1 text-sm text-slate-500">မကြာမီ စီမံဆောင်ရွက်ရန် မှတ်သားထားပါ</p>

            <div class="mt-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl bg-green-50 p-4">
                    <p class="text-sm font-semibold text-green-900">🌱 စိုက်ခင်းအခြေအနေ စစ်ဆေးရန်</p>
                    <p class="mt-2 text-xs leading-6 text-green-800">
                        သီးနှံကြီးထွားမှုနှင့် မြေဆီလွှာအခြေအနေကို စစ်ဆေးပါ။
                    </p>
                </div>
                <div class="rounded-xl bg-amber-50 p-4">
                    <p class="text-sm font-semibold text-amber-900">💰 ကုန်ကျစရိတ် မှတ်တမ်းတင်ရန်</p>
                    <p class="mt-2 text-xs leading-6 text-amber-800">
                        မျိုးစေ့၊ မြေဩဇာနှင့် လုပ်အားခများကို မှတ်တမ်းတင်ပါ။
                    </p>
                </div>
            </div>
        </section>

        <footer class="py-8 text-center text-xs text-slate-400">
            © {{ date('Y') }} Smart Farmer Assistant System
        </footer>

    </main>
</div>

</body>
</html>
npm.cmd run dev

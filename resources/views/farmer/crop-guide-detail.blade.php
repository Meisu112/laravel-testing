
<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $guide['name'] }} Guide | Smart Farmer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-green-50 p-5 sm:p-8">
    <main class="mx-auto max-w-4xl">


        <header class="my-6 rounded-2xl bg-white p-6 shadow-sm">


<p class="text-3xl font-extrabold tracking-wide text-emerald-700 sm:text-3xl">
    🌿 Smart Farmer Assistant
</p>


            <h1 class="mt-2 text-3xl font-bold text-green-900">
                🌱 {{ $guide['name'] }} Growing Guide
            </h1>

            <p class="mt-2 text-lg text-gray-600">
                {{ $guide['myanmar'] }}
            </p>
        </header>

        @if (strtolower($guide['name']) === 'onion')
            <section class="space-y-5">

                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">
                        1. မြေပြင်ပြင်ဆင်ခြင်း
                    </h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ရေစီးရေလာကောင်းပြီး နေရောင်ရရှိသော မြေကို ရွေးချယ်ပါ။
                        စိုက်ပျိုးမည့်မြေကို ထွန်ယက်ညှိပေးပြီး ရေမဝပ်စေရန်
                        မြောင်းများနှင့် ဘောင်များ ပြင်ဆင်ပါ။
                    </p>
                </article>

                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">
                        2. မျိုးစေ့တိုက်ရိုက်ချစိုက်ခြင်း
                    </h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        မျိုးစေ့အရည်အသွေးကောင်းပြီး ဒေသနှင့်ကိုက်ညီသော
                        မျိုးကို ရွေးချယ်ပါ။ မျိုးစေ့အိတ်ပေါ်ရှိ အညွှန်းနှင့်
                        ဒေသခံစိုက်ပျိုးရေးပညာရှင်၏ အကြံပြုချက်အတိုင်း
                        အနက်၊ အကွာအဝေးနှင့် မျိုးစေ့နှုန်းကို သတ်မှတ်ပါ။
                    </p>
                </article>

                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">
                        3. ရေလောင်းခြင်း
                    </h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ငယ်စဉ် မြေတွင် သင့်တင့်သော စိုထိုင်းဆရှိစေရန်
                        ရေပေးပါ။ ရေဝပ်ခြင်းနှင့် မြေခြောက်လွန်းခြင်းကို
                        ရှောင်ကြဉ်ပါ။ ရာသီဥတုနှင့် မြေအခြေအနေအလိုက်
                        ရေပေးချိန်ကို ချိန်ညှိပါ။
                    </p>
                </article>

                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">
                        4. မြေဩဇာနှင့် ပေါင်းမြက်
                    </h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        မြေဆီလွှာစစ်ဆေးမှုနှင့် ဒေသအကြံပြုချက်အပေါ်မူတည်၍
                        မြေဩဇာအသုံးပြုပါ။ အပင်ငယ်များကို မထိခိုက်စေရန်
                        ပေါင်းမြက်များကို ဂရုတစိုက်ရှင်းလင်းပါ။
                    </p>
                </article>

                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">
                        5. ပိုးမွှားနှင့် ရောဂါ စောင့်ကြည့်ခြင်း
                    </h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အရွက်အရောင်ပြောင်းခြင်း၊ အစက်အပြောက်ဖြစ်ခြင်းနှင့်
                        ပိုးစားရာများ ရှိမရှိ ပုံမှန်စစ်ဆေးပါ။ ရောဂါလက္ခဏာ
                        တစ်ခုတည်းဖြင့် ရောဂါအမည်ကို မသတ်မှတ်ဘဲ
                        ဒေသခံစိုက်ပျိုးရေးပညာရှင်ထံ အတည်ပြုပါ။
                    </p>
                </article>

                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">
                        6. ရိတ်သိမ်းခြင်းနှင့် သိုလှောင်ခြင်း
                    </h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်နှင့် ဥ၏ ရင့်မှည့်မှုလက္ခဏာများအပေါ်မူတည်၍
                        ရိတ်သိမ်းချိန်ကို ဆုံးဖြတ်ပါ။ ရိတ်သိမ်းပြီးနောက်
                        လေဝင်လေထွက်ကောင်းသော နေရာတွင် သင့်လျော်စွာ
                        အခြောက်ခံပြီး ပျက်စီးနေသော ဥများကို ခွဲထုတ်ပါ။
                    </p>
                </article>

            </section>

        @elseif (strtolower($guide['name']) === 'sesame')
            <section class="space-y-5">
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">1. မြေပြင်ပြင်ဆင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ရေစီးရေလာကောင်းပြီး နေရောင်အပြည့်အဝရသော မြေကို ရွေးချယ်ပါ။
                        မြေကို ထွန်ယက်ညှိပေးပြီး ရေဝပ်နိုင်သောနေရာများကို ရှောင်ပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">2. မျိုးစေ့ချခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ဒေသနှင့်ကိုက်ညီသော မျိုးကောင်းမျိုးသန့်ကို ရွေးချယ်ပါ။
                        မျိုးစေ့ကို သတ်မှတ်ထားသော အနက်နှင့် အကွာအဝေးအတိုင်း ချပါ။
                        မျိုးစေ့ကို အလွန်နက်စွာ မချပါနှင့်။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">3. ရေနှင့် မြေဩဇာ</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ပေါက်စဉ် မြေစိုထိုင်းဆ သင့်တင့်စေရန် ရေပေးပါ။
                        ရေဝပ်ခြင်းကို ရှောင်ပြီး မြေဆီလွှာအခြေအနေနှင့်
                        ဒေသအကြံပြုချက်အတိုင်း မြေဩဇာသုံးပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">4. ပေါင်းမြက်နှင့် ပိုးမွှား</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ငယ်စဉ် ပေါင်းမြက်များကို ဂရုတစိုက်ရှင်းလင်းပါ။
                        အရွက်ပျက်စီးခြင်း၊ အစက်အပြောက်ဖြစ်ခြင်းနှင့်
                        ပိုးမွှားကျရောက်မှုများကို ပုံမှန်စစ်ဆေးပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">5. ရိတ်သိမ်းခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အသီးတောင့်များ ရင့်မှည့်လာပြီး အရောင်ပြောင်းလာသည့်အခါ
                        အစေ့များ မဆုံးရှုံးစေရန် သင့်လျော်သောအချိန်တွင် ရိတ်သိမ်းပါ။
                        ရိတ်သိမ်းပြီးနောက် သန့်ရှင်းခြောက်သွေ့သောနေရာတွင် သိုလှောင်ပါ။
                    </p>
                </article>
            </section>

        @elseif (strtolower($guide['name']) === 'cotton')
            <section class="space-y-5">
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">1. မြေနှင့် ရာသီရွေးချယ်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ရေစီးရေလာကောင်းပြီး နေရောင်ရရှိသော မြေကို ရွေးချယ်ပါ။
                        ဒေသ၏ ရာသီဥတုနှင့် ကိုက်ညီသော ဝါမျိုးကို ရွေးချယ်ပြီး
                        စိုက်ပျိုးချိန်ကို ဒေသခံပညာရှင်၏ အကြံပြုချက်အတိုင်း သတ်မှတ်ပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">2. မျိုးစေ့ချခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အရည်အသွေးကောင်းသော မျိုးစေ့ကို အသုံးပြုပါ။
                        မျိုးစေ့အနက်၊ အပင်အကွာအဝေးနှင့် မျိုးစေ့နှုန်းကို
                        မျိုးအမျိုးအစားနှင့် ဒေသဆိုင်ရာ အကြံပြုချက်အတိုင်း လိုက်နာပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">3. ရေနှင့် မြေဩဇာ</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ကြီးထွားမှုအဆင့်နှင့် မိုးရွာသွန်းမှုအလိုက် ရေစီမံပါ။
                        ရေဝပ်ခြင်းကို ရှောင်ပြီး မြေဆီလွှာစစ်ဆေးမှုအပေါ်မူတည်၍
                        သင့်လျော်သော မြေဩဇာကို အသုံးပြုပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">4. ပိုးမွှားနှင့် ရောဂါ</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အရွက်၊ ပင်စည်နှင့် ဝါသီးတောင့်များကို ပုံမှန်စစ်ဆေးပါ။
                        ပိုးမွှားတွေ့ရှိပါက အမျိုးအစားကို အတည်ပြုပြီး
                        ဒေသခံစိုက်ပျိုးရေးပညာရှင်၏ အကြံပြုချက်ကို လိုက်နာပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">5. ဝါကောက်ခြင်းနှင့် သိုလှောင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ဝါသီးတောင့်များ ပွင့်ပြီး ဝါဖွေးလာသောအခါ ရိတ်သိမ်းပါ။
                        စိုစွတ်မှုနှင့် အညစ်အကြေးများ မပါဝင်စေရန် ဂရုစိုက်ပြီး
                        ခြောက်သွေ့သောနေရာတွင် သိုလှောင်ပါ။
                    </p>
                </article>
            </section>

        @elseif (strtolower($guide['name']) === 'corn')
            <section class="space-y-5">
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">1. မြေပြင်ပြင်ဆင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        နေရောင်ရရှိပြီး ရေစီးရေလာကောင်းသော မြေကို ရွေးချယ်ပါ။
                        မြေကို ထွန်ယက်ညှိပေးပြီး ရေမဝပ်စေရန် စီစဉ်ပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">2. ပြောင်းမျိုးစေ့ချခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ဒေသနှင့်ကိုက်ညီသော မျိုးကို ရွေးချယ်ပါ။
                        မျိုးစေ့ကို သတ်မှတ်ထားသော အနက်နှင့် အကွာအဝေးအတိုင်း ချပါ။
                        အပင်အကွာအဝေးသည် မျိုးအမျိုးအစားနှင့် စိုက်ပျိုးစနစ်အပေါ် မူတည်ပါသည်။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">3. ရေနှင့် မြေဩဇာ</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ပေါက်စဉ်နှင့် ပန်းပွင့်ချိန်၊ ပြောင်းဖူးစေ့တည်ချိန်တို့တွင်
                        ရေလိုအပ်ချက်ကို ဂရုစိုက်ပါ။ မြေဩဇာကို မြေဆီလွှာအခြေအနေနှင့်
                        ဒေသဆိုင်ရာ အကြံပြုချက်အတိုင်း အသုံးပြုပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">4. ပေါင်းမြက်နှင့် ပိုးမွှား</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ငယ်စဉ် ပေါင်းမြက်များကို ထိန်းချုပ်ပါ။
                        အရွက်နှင့် ပင်စည်တွင် ပိုးစားရာများရှိမရှိ စစ်ဆေးပြီး
                        သံသယရှိသော ရောဂါများကို ပညာရှင်ထံ အတည်ပြုပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">5. ရိတ်သိမ်းခြင်းနှင့် သိုလှောင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ပြောင်းဖူးစေ့များ ရင့်မှည့်ပြီး မျိုးအလိုက် သင့်လျော်သော
                        ရိတ်သိမ်းအဆင့်ရောက်သောအခါ ရိတ်သိမ်းပါ။
                        သိုလှောင်မီ အစိုဓာတ်လျှော့ချပြီး ပိုးမွှားကင်းသော
                        ခြောက်သွေ့သည့်နေရာတွင် ထားပါ။
                    </p>
                </article>
            </section>

        @elseif (strtolower($guide['name']) === 'tomato')
            <section class="space-y-5">
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">1. မြေနှင့် ပျိုးခင်းပြင်ဆင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        နေရောင်ကောင်းစွာရပြီး ရေစီးရေလာကောင်းသော မြေကို ရွေးပါ။
                        သန့်ရှင်းသော ပျိုးခင်းတွင် မျိုးစေ့ချ၍ ပျိုးပင်များကို
                        ရောဂါကူးစက်မှုမှ ကာကွယ်ပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">2. ပျိုးပင်ပြောင်းရွှေ့စိုက်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ကျန်းမာသန်စွမ်းသော ပျိုးပင်များကို ရွေးချယ်ပါ။
                        ရာသီဥတုနှင့် ကိုက်ညီသောအချိန်တွင် အမြစ်မပျက်စီးစေရန်
                        ဂရုတစိုက် ပြောင်းရွှေ့စိုက်ပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">3. ရေလောင်းခြင်းနှင့် မြေဩဇာ</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        မြေစိုထိုင်းဆကို တသမတ်တည်း ထိန်းထားပြီး ရေဝပ်ခြင်းကို ရှောင်ပါ။
                        အရွက်ပေါ်သို့ ရေစိုခြင်းကို တတ်နိုင်သမျှ လျှော့ချပါ။
                        မြေဩဇာကို မြေဆီလွှာနှင့် ဒေသအကြံပြုချက်အလိုက် အသုံးပြုပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">4. အပင်ထိန်းသိမ်းခြင်းနှင့် ရောဂါစောင့်ကြည့်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        လိုအပ်ပါက အပင်ကို ထောက်ပံ့ပေးပြီး ပေါင်းမြက်များကို ရှင်းလင်းပါ။
                        အရွက်ကွေးခြင်း၊ အစက်အပြောက်ဖြစ်ခြင်းနှင့် အသီးပျက်စီးခြင်းတို့ကို
                        စစ်ဆေးကာ ရောဂါအမည်ကို ပညာရှင်ထံ အတည်ပြုပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">5. အသီးခူးခြင်းနှင့် သိုလှောင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အသုံးပြုမည့်ရည်ရွယ်ချက်နှင့် ဈေးကွက်လိုအပ်ချက်အလိုက်
                        သင့်လျော်သော ရင့်မှည့်အဆင့်တွင် အသီးခူးပါ။
                        အသီးများကို မညှစ်မိစေရန် ဂရုစိုက်ပြီး ပျက်စီးသောအသီးများကို
                        ခွဲထုတ်ကာ သင့်လျော်သောအခြေအနေတွင် ထားပါ။
                    </p>
                </article>
            </section>

        @elseif (strtolower($guide['name']) === 'peanut')
            <section class="space-y-5">
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">1. မြေပြင်ပြင်ဆင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        မြေပဲတောင့်များ မြေထဲတွင် ဖွံ့ဖြိုးနိုင်စေရန်
                        ပျော့ပျောင်းပြီး ရေစီးရေလာကောင်းသော မြေကို ရွေးချယ်ပါ။
                        မြေကို ထွန်ယက်ညှိပေးပြီး ရေဝပ်ခြင်းကို ရှောင်ပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">2. မျိုးစေ့ချခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        ကျန်းမာပြီး အရည်အသွေးကောင်းသော မျိုးစေ့ကို ရွေးချယ်ပါ။
                        အစေ့ခွံနှင့် အစေ့သား မပျက်စီးစေရန် ဂရုစိုက်ပြီး
                        မျိုးအလိုက် သတ်မှတ်ထားသော အနက်နှင့် အကွာအဝေးအတိုင်း စိုက်ပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">3. ရေနှင့် မြေဩဇာ</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ပေါက်စဉ်နှင့် ပန်းပွင့်ချိန်၊ မြေပဲတောင့်တည်ချိန်တို့တွင်
                        မြေစိုထိုင်းဆကို ဂရုစိုက်ပါ။ မြေပဲသည် ကယ်လ်စီယမ်အပါအဝင်
                        အာဟာရလိုအပ်ချက်များရှိနိုင်သောကြောင့် မြေဆီလွှာစစ်ဆေးမှုနှင့်
                        ဒေသဆိုင်ရာ အကြံပြုချက်ကို လိုက်နာပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">4. ပေါင်းမြက်နှင့် ပိုးမွှား</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        အပင်ငယ်စဉ် ပေါင်းမြက်များကို ထိန်းချုပ်ပါ။
                        အရွက်အရောင်ပြောင်းခြင်း၊ ပိုးစားရာများနှင့်
                        အပင်ညှိုးနွမ်းခြင်းတို့ကို ပုံမှန်စစ်ဆေးပါ။
                    </p>
                </article>
                <article class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-bold text-green-800">5. မြေပဲတူးဖော်ခြင်းနှင့် သိုလှောင်ခြင်း</h2>
                    <p class="mt-3 leading-7 text-gray-700">
                        မြေပဲတောင့်များ ရင့်မှည့်မှုကို စစ်ဆေးပြီး သင့်လျော်သောအချိန်တွင်
                        တူးဖော်ပါ။ တောင့်များ မပျက်စီးစေရန် ဂရုစိုက်ကာ
                        ကောင်းစွာခြောက်သွေ့စေပြီး စိုထိုင်းဆနှင့် မှိုတက်ခြင်းမှ
                        ကာကွယ်နိုင်သော နေရာတွင် သိုလှောင်ပါ။
                    </p>
                </article>
            </section>

        @else
            <section class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm">
                <h2 class="text-xl font-bold text-green-800">
                    စိုက်ပျိုးရေး လမ်းညွှန်
                </h2>
                <p class="mt-3 leading-7 text-gray-700">
                    {{ $guide['myanmar'] }} အတွက် အသေးစိတ်လမ်းညွှန်ကို
                    မကြာမီ ဖြည့်သွင်းပါမည်။
                    ဒေသနှင့်ကိုက်ညီသော စိုက်ပျိုးရေးအကြံပြုချက်များကို
                    ဒေသခံစိုက်ပျိုးရေးပညာရှင်ထံမှ အတည်ပြုပါ။
                </p>
            </section>
        @endif

        <div class="mt-8 flex justify-end">
            <a href="{{ route('crop-guides.index') }}"
               class="rounded-xl bg-green-700 px-5 py-3 font-semibold text-white transition hover:bg-green-800">
                ← All Crop Guides
            </a>
        </div>

    </main>
</body>
</html>

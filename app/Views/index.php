<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative rounded-3xl overflow-hidden bg-primary h-[340px] flex items-center px-8 lg:px-16">
    <div class="absolute inset-0 opacity-20">
        <img alt="Medicine Abstract Background" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPyq1bdMNPlmvmBsmavBbpHJXuvUK7xo70sG7R1jhr4YIFVmjyTM4-wQ7ZZUVPbooIb61pwK4_9TXxqsfnz4vQwEXhHJD4Agm17QZmtC3rMgrmkijnouzmg5z0Io8hmHNbviao8ybuh48jqQdcVO4ATJ53B1C51CFtkUckIX4ZVNemhmBz1Wdkp6tOssfPBkZBpLf5tfNN9lb7HoVgWdkl21TRnyIG41ir5JUspui5JTZNNEorlFdGjh11L2emMJpVWa-4CTmCAC0"/>
    </div>
    <div class="relative z-10 max-w-lg text-white">
        <span class="px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-xs font-semibold uppercase tracking-widest mb-4 inline-block">New Arrival</span>
        <h1 class="text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">Your Health, <br/>Our Top Priority</h1>
        <p class="text-blue-100 text-lg mb-8">Get authentic medicines and healthcare products delivered to your doorstep within 2 hours.</p>
        <div class="flex gap-4">
            <button class="px-8 py-3 bg-white text-primary font-bold rounded-xl hover:bg-blue-50 transition-colors">Shop Now</button>
            <button class="px-8 py-3 bg-white/10 backdrop-blur-md border border-white/30 text-white font-bold rounded-xl hover:bg-white/20 transition-colors">View Deals</button>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold">Shop by Category</h2>
        <a class="text-primary font-semibold text-sm hover:underline" href="<?= base_url('categories') ?>">View All</a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        <!-- Category Cards -->
        <div class="group cursor-pointer">
            <div class="aspect-square bg-white dark:bg-slate-800 rounded-3xl flex flex-col items-center justify-center p-6 border border-slate-100 dark:border-slate-800 shadow-sm group-hover:shadow-md group-hover:border-primary/20 transition-all">
                <div class="w-16 h-16 bg-red-50 dark:bg-red-900/20 rounded-2xl flex items-center justify-center text-red-500 mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-icons-outlined text-3xl">favorite</span>
                </div>
                <span class="font-semibold text-center group-hover:text-primary transition-colors">Cardiology</span>
            </div>
        </div>
        <div class="group cursor-pointer">
            <div class="aspect-square bg-white dark:bg-slate-800 rounded-3xl flex flex-col items-center justify-center p-6 border border-slate-100 dark:border-slate-800 shadow-sm group-hover:shadow-md group-hover:border-primary/20 transition-all">
                <div class="w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center text-blue-500 mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-icons-outlined text-3xl">science</span>
                </div>
                <span class="font-semibold text-center group-hover:text-primary transition-colors">Supplements</span>
            </div>
        </div>
        <div class="group cursor-pointer">
            <div class="aspect-square bg-white dark:bg-slate-800 rounded-3xl flex flex-col items-center justify-center p-6 border border-slate-100 dark:border-slate-800 shadow-sm group-hover:shadow-md group-hover:border-primary/20 transition-all">
                <div class="w-16 h-16 bg-emerald-50 dark:bg-emerald-900/20 rounded-2xl flex items-center justify-center text-emerald-500 mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-icons-outlined text-3xl">child_care</span>
                </div>
                <span class="font-semibold text-center group-hover:text-primary transition-colors">Baby Care</span>
            </div>
        </div>
        <div class="group cursor-pointer">
            <div class="aspect-square bg-white dark:bg-slate-800 rounded-3xl flex flex-col items-center justify-center p-6 border border-slate-100 dark:border-slate-800 shadow-sm group-hover:shadow-md group-hover:border-primary/20 transition-all">
                <div class="w-16 h-16 bg-amber-50 dark:bg-amber-900/20 rounded-2xl flex items-center justify-center text-amber-500 mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-icons-outlined text-3xl">medication</span>
                </div>
                <span class="font-semibold text-center group-hover:text-primary transition-colors">Vitamins</span>
            </div>
        </div>
        <div class="group cursor-pointer">
            <div class="aspect-square bg-white dark:bg-slate-800 rounded-3xl flex flex-col items-center justify-center p-6 border border-slate-100 dark:border-slate-800 shadow-sm group-hover:shadow-md group-hover:border-primary/20 transition-all">
                <div class="w-16 h-16 bg-purple-50 dark:bg-purple-900/20 rounded-2xl flex items-center justify-center text-purple-500 mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-icons-outlined text-3xl">face</span>
                </div>
                <span class="font-semibold text-center group-hover:text-primary transition-colors">Skin Care</span>
            </div>
        </div>
        <div class="group cursor-pointer">
            <div class="aspect-square bg-white dark:bg-slate-800 rounded-3xl flex flex-col items-center justify-center p-6 border border-slate-100 dark:border-slate-800 shadow-sm group-hover:shadow-md group-hover:border-primary/20 transition-all">
                <div class="w-16 h-16 bg-indigo-50 dark:bg-indigo-900/20 rounded-2xl flex items-center justify-center text-indigo-500 mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-icons-outlined text-3xl">healing</span>
                </div>
                <span class="font-semibold text-center group-hover:text-primary transition-colors">First Aid</span>
            </div>
        </div>
    </div>
</section>

<!-- Trending Section -->
<section>
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-2xl font-bold">Trending Now</h2>
            <p class="text-slate-500 text-sm">Most popular health products this week</p>
        </div>
        <div class="flex gap-2">
            <button class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                <span class="material-icons-outlined text-xl">chevron_left</span>
            </button>
            <button class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                <span class="material-icons-outlined text-xl">chevron_right</span>
            </button>
        </div>
    </div>
    <div class="flex gap-6 overflow-x-auto pb-4 hide-scrollbar">
        <!-- Trending Products -->
        <div class="min-w-[280px] bg-white dark:bg-slate-800 rounded-3xl p-4 border border-slate-100 dark:border-slate-800 shadow-sm group transition-all">
            <div class="relative aspect-video rounded-2xl overflow-hidden mb-4 bg-slate-50 dark:bg-slate-900 flex items-center justify-center">
                <img alt="Vitamin C" class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgvv3PPGvzM-4rLkF6gxpMwlzuiwrRIAD8qgHzu_mcogfnqiT7NU51ady0_NJ1fWr6XwgYA6HfUbeegxqGDabUYvPfwAur09R_M8VAt21hEOVf8vPhuKbgq0q4NIVCbMnfRLX07Wx8BA774X1QSqtv-36PU3wm4bvl2fgYe-eCeC93hier0TPuQftqipIFBlGOzdCi_VQmEy3SsvJQTTAdN1CjM1h64_A3mDFjmf7wSLnrDE4x7IFazz1DXtXFtHIzWyo6mHer8ek"/>
                <span class="absolute top-2 right-2 px-2 py-1 bg-green-500 text-white text-[10px] font-bold rounded-lg uppercase">Best Seller</span>
            </div>
            <h3 class="font-bold mb-1 truncate">Vitamin C 1000mg</h3>
            <p class="text-slate-400 text-xs mb-3">Immune System Support • 60 Caps</p>
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-primary">$24.99</span>
                <button class="p-2 bg-primary/10 text-primary rounded-xl hover:bg-primary hover:text-white transition-colors">
                    <span class="material-icons-outlined">add_shopping_cart</span>
                </button>
            </div>
        </div>
        <div class="min-w-[280px] bg-white dark:bg-slate-800 rounded-3xl p-4 border border-slate-100 dark:border-slate-800 shadow-sm group transition-all">
            <div class="relative aspect-video rounded-2xl overflow-hidden mb-4 bg-slate-50 dark:bg-slate-900 flex items-center justify-center">
                <img alt="Essential Oils" class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQaCeP1N1HAjH3ZrAfT388MyY-myl9XLE9xqvtbjA4huP-6IlV1CHbuKFi9uXhCBe_jnxQ_7xaWCTb_0g04gtbJjKLzRfOkQgZQSHKsEc5jbaCNAMXhYmpKrch7izeR867wcRLK_MG9oOgiT85a4xKUsxMDPSddblvzuJYTVJHyi2EGRJwfETif0wvkc-bga8QaQndgGJM8KKGX6k9NCAxUheUIBPvKv9AAjkl5eTde77pJz6sQ75BCJEPRU0cFTW85S7tXhP7Ek4"/>
            </div>
            <h3 class="font-bold mb-1 truncate">Organic Peppermint Oil</h3>
            <p class="text-slate-400 text-xs mb-3">Natural Relief • 15ml</p>
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-primary">$12.50</span>
                <button class="p-2 bg-primary/10 text-primary rounded-xl hover:bg-primary hover:text-white transition-colors">
                    <span class="material-icons-outlined">add_shopping_cart</span>
                </button>
            </div>
        </div>
        <div class="min-w-[280px] bg-white dark:bg-slate-800 rounded-3xl p-4 border border-slate-100 dark:border-slate-800 shadow-sm group transition-all">
            <div class="relative aspect-video rounded-2xl overflow-hidden mb-4 bg-slate-50 dark:bg-slate-900 flex items-center justify-center">
                <img alt="Pain Reliever" class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7ihoy_u-VTWR_Qbbh3PHt7YGFqSa162VvuVXYmaK9ueYCkvc6i1jO6LcfVquZEVtXQTQRt9lmLvkYOUg8Ww5iRTW49vnaA4KXAa0iB4ZafvN3XbYqsnYUUJKLTYURPDat8777-kZ1s8q7tCzol2NdCi-1qMnlb5x-A1Zt4xN1J-T99ny3xYq2HxZ7t5MGO3GxgIcO3qDP7C-EaE-S8gVvma419bSlTpwB8v9ogtHAATKRZl0mY9wckaKbWi5RlZfk0_3qyF3EMg4"/>
            </div>
            <h3 class="font-bold mb-1 truncate">Advil Liqui-Gels</h3>
            <p class="text-slate-400 text-xs mb-3">Pain Reliever/Fever Reducer</p>
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-primary">$18.99</span>
                <button class="p-2 bg-primary/10 text-primary rounded-xl hover:bg-primary hover:text-white transition-colors">
                    <span class="material-icons-outlined">add_shopping_cart</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Health Essentials Section -->
<section>
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-2xl font-bold">Health Essentials</h2>
            <p class="text-slate-500 text-sm">Curated medicines for your daily needs</p>
        </div>
        <div class="flex gap-2">
            <select class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl text-sm focus:ring-primary focus:border-primary">
                <option>Sort by: Popularity</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
            </select>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Product Cards -->
        <div class="group bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="p-6">
                <div class="aspect-square bg-slate-50 dark:bg-slate-900 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img alt="Ibuprofen" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAL3cZeh0_0yKw8Che3ZahCvSNw92KluzYB4BKmvVOkTGYYnW5km0HquyqMQ4ijyb4jvbGHcFesLpsvdoockMb3kgPfWd3PIpsvPkF-hzPTuU-8KWjchYvg8W3exky05JxGernm3Lj-iFxRmQ7yD6v5APtXSu38Rv60OEq23fbHKj7PyL5dDpPkYVVggalyyvKICRy6CM1TLaOofNnGPv2upAo1Egkp2pdu_a0tx4dlvqZxBjzE-oN_gI18JHTtL57XSBRJesv8DOg"/>
                </div>
                <div class="flex items-center gap-1 mb-2">
                    <span class="material-icons-outlined text-amber-400 text-sm">star</span>
                    <span class="text-xs font-semibold text-slate-500">4.8 (120 reviews)</span>
                </div>
                <h3 class="text-lg font-bold mb-1 group-hover:text-primary transition-colors">Motrin Ibuprofen</h3>
                <p class="text-slate-400 text-sm mb-4 line-clamp-2">Effective relief for minor aches, pains, and fever.</p>
                <div class="flex items-center justify-between pt-2 border-t border-slate-50 dark:border-slate-700">
                    <div>
                        <p class="text-xs text-slate-400 uppercase font-bold tracking-wider">Price</p>
                        <p class="text-xl font-bold text-slate-900 dark:text-white">$14.25</p>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl font-semibold hover:bg-blue-700 transition-all">
                        <span class="material-icons-outlined text-sm">add</span>
                        Add
                    </button>
                </div>
            </div>
        </div>
        <div class="group bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="p-6">
                <div class="aspect-square bg-slate-50 dark:bg-slate-900 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img alt="Nasal Spray" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGDQZNP6xfkiFHDhhLrjKj0dzwCctVtBZj_K5wPvfrS2CmaJ6uOURyLgMqyj1UYXTi-ljEQLhl0y80P75lHdPLQjdrE8edkbFs4okXpRQEzRp7jtEYMIxS6itSWRbfnA7X6YowbwawVn3o1vCPzTPX_BogKb6Bd6XNOIDDz9fNZqJJyKMDb2lsgwtCCNKN3w9oUtMDy7tE9iOByOL1Zw9mf2pGSwG-F8DYGmIilzzkL8JGntFeonO5iLE1ClU2yea4dqvJiVZinq8"/>
                </div>
                <div class="flex items-center gap-1 mb-2">
                    <span class="material-icons-outlined text-amber-400 text-sm">star</span>
                    <span class="text-xs font-semibold text-slate-500">4.9 (85 reviews)</span>
                </div>
                <h3 class="text-lg font-bold mb-1 group-hover:text-primary transition-colors">Flonase Allergy Relief</h3>
                <p class="text-slate-400 text-sm mb-4 line-clamp-2">24-hour non-drowsy allergy relief nasal spray.</p>
                <div class="flex items-center justify-between pt-2 border-t border-slate-50 dark:border-slate-700">
                    <div>
                        <p class="text-xs text-slate-400 uppercase font-bold tracking-wider">Price</p>
                        <p class="text-xl font-bold text-slate-900 dark:text-white">$22.95</p>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl font-semibold hover:bg-blue-700 transition-all">
                        <span class="material-icons-outlined text-sm">add</span>
                        Add
                    </button>
                </div>
            </div>
        </div>
        <div class="group bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="p-6">
                <div class="aspect-square bg-slate-50 dark:bg-slate-900 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img alt="Cough Syrup" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbuepipAYLFRKghg87kt20Yv-n_yvzS2DV9U_EvN-CJZjaPotXYCwyDEwn75mdj-A0z6dQjpbGL_TabLduyjmbSbpDExcjIzCurNYvN4MXiW9ZqXUSilCp6kcm71pnDs9fRLg_eAk2TjOPViOn3mUOx3uz8AYwHiUINo1EtCDc21LuL2t8GU7dRB61l0IZ9c2kSbtbGEeGe9yNdJ32hnCaWte-6AGnygLwVV9Uvs2oHjJoZsoqyC_imuJ4NYza3Z7LiP57nh82ndU"/>
                </div>
                <div class="flex items-center gap-1 mb-2">
                    <span class="material-icons-outlined text-amber-400 text-sm">star</span>
                    <span class="text-xs font-semibold text-slate-500">4.7 (210 reviews)</span>
                </div>
                <h3 class="text-lg font-bold mb-1 group-hover:text-primary transition-colors">Robitussin Honey</h3>
                <p class="text-slate-400 text-sm mb-4 line-clamp-2">Severe cough and chest congestion relief for adults.</p>
                <div class="flex items-center justify-between pt-2 border-t border-slate-50 dark:border-slate-700">
                    <div>
                        <p class="text-xs text-slate-400 uppercase font-bold tracking-wider">Price</p>
                        <p class="text-xl font-bold text-slate-900 dark:text-white">$16.50</p>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl font-semibold hover:bg-blue-700 transition-all">
                        <span class="material-icons-outlined text-sm">add</span>
                        Add
                    </button>
                </div>
            </div>
        </div>
        <div class="group bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="p-6">
                <div class="aspect-square bg-slate-50 dark:bg-slate-900 rounded-2xl mb-4 overflow-hidden flex items-center justify-center">
                    <img alt="Band Aids" class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDngO2eJ2gjUq_SLRFIWj1J-sjgBpjffELfa1MYpSCQVRO2w66050aFuZ9QSsMhbZN9YXCKPPTRpqfsflfI87AMAD5g9RR7ezA_PeRUu2OKRKYNPUDi09REy-rVhzTZszf_XJjG_gUQJzfnLtjuuLr_GCJxIpGjfbu30oCwY6wwsB0BWarhn8FBLq4yv3GwtwGq6V73oDU9P4op4jD_7MjmJWkd_7hPh0BZeHf26WKV5xZR_hfSdKvX9jX62sug7IPJdMorujlwdao"/>
                </div>
                <div class="flex items-center gap-1 mb-2">
                    <span class="material-icons-outlined text-amber-400 text-sm">star</span>
                    <span class="text-xs font-semibold text-slate-500">5.0 (54 reviews)</span>
                </div>
                <h3 class="text-lg font-bold mb-1 group-hover:text-primary transition-colors">Band-Aid Variety Pack</h3>
                <p class="text-slate-400 text-sm mb-4 line-clamp-2">Flexible fabric bandages, assorted sizes, 100 ct.</p>
                <div class="flex items-center justify-between pt-2 border-t border-slate-50 dark:border-slate-700">
                    <div>
                        <p class="text-xs text-slate-400 uppercase font-bold tracking-wider">Price</p>
                        <p class="text-xl font-bold text-slate-900 dark:text-white">$9.99</p>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl font-semibold hover:bg-blue-700 transition-all">
                        <span class="material-icons-outlined text-sm">add</span>
                        Add
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-12 text-center">
        <button class="px-8 py-3 bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-200 font-bold rounded-xl hover:bg-slate-300 dark:hover:bg-slate-700 transition-colors">Load More Products</button>
    </div>
</section>

<!-- Promo Banner -->
<section class="bg-emerald-500 rounded-3xl p-10 relative overflow-hidden">
    <div class="relative z-10 grid md:grid-cols-2 gap-8 items-center text-white">
        <div>
            <h2 class="text-3xl font-bold mb-4">First-time Order? Get 20% OFF</h2>
            <p class="text-emerald-50 mb-6">Use code <span class="bg-white/20 px-2 py-1 rounded font-mono font-bold">HEALTH20</span> at checkout for your first medicine order.</p>
            <div class="flex gap-4">
                <button class="px-6 py-3 bg-white text-emerald-600 font-bold rounded-xl shadow-lg">Claim Now</button>
                <p class="text-sm opacity-80 flex items-center gap-2">
                    <span class="material-icons-outlined">info</span>
                    Terms &amp; conditions apply
                </p>
            </div>
        </div>
        <div class="hidden md:flex justify-end">
            <span class="material-icons-outlined text-[120px] opacity-20 rotate-12">local_pharmacy</span>
        </div>
    </div>
    <div class="absolute -top-12 -right-12 w-64 h-64 bg-white/10 rounded-full"></div>
    <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-emerald-400 rounded-full"></div>
</section>

<?= $this->endSection() ?>

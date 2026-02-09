<aside class="hidden lg:flex flex-col w-64 h-screen sticky top-0 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6">
    <div class="flex items-center gap-2 mb-10">
        <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white">
            <span class="material-icons-outlined">medical_services</span>
        </div>
        <span class="text-xl font-bold tracking-tight text-primary">MediMarket</span>
    </div>
    
    <nav class="space-y-1">
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-medium" href="<?= base_url('/') ?>">
            <span class="material-icons-outlined">home</span> Home
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= base_url('categories') ?>">
            <span class="material-icons-outlined">category</span> Categories
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= base_url('offers') ?>">
            <span class="material-icons-outlined">local_offer</span> Special Offers
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= base_url('orders') ?>">
            <span class="material-icons-outlined">history</span> Order History
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="<?= base_url('settings') ?>">
            <span class="material-icons-outlined">settings</span> Settings
        </a>
    </nav>
    
    <div class="mt-auto p-4 bg-slate-50 dark:bg-slate-800 rounded-2xl border border-slate-100 dark:border-slate-700">
        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Need Help?</p>
        <p class="text-sm text-slate-600 dark:text-slate-300 mb-3">Our pharmacists are available 24/7 for consultation.</p>
        <button class="w-full py-2 bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-white rounded-lg text-sm font-medium hover:shadow-sm transition-all">Chat Now</button>
    </div>
</aside>

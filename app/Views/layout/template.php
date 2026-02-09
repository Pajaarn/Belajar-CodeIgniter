<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?= isset($title) ? $title : 'MediMarket - Health & Wellness Marketplace' ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#2563eb",
                        "background-light": "#f8fafc",
                        "background-dark": "#0f172a",
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.75rem",
                    },
                },
            },
        };
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen transition-colors duration-300">
    <div class="flex">
        <!-- Sidebar -->
        <?= $this->include('layout/sidebar') ?>
        
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Navbar -->
            <?= $this->include('layout/navbar') ?>
            
            <!-- Main Content -->
            <main class="p-6 lg:p-10 space-y-12">
                <?= $this->renderSection('content') ?>
            </main>
            
            <!-- Footer -->
            <?= $this->include('layout/footer') ?>
        </div>
    </div>
</body>
</html>

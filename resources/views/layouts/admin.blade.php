<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100vh;
            background: linear-gradient(180deg, #161950 , #080E82 );
            color: white;
            transform: translateX(0);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar.collapsed {
            transform: translateX(-200px);
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed .sidebar-header h2 {
            opacity: 0;
        }

        .toggle-btn {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            padding: 8px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toggle-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        .sidebar.collapsed .toggle-btn i {
            transform: rotate(180deg);
        }

        /* Menu Styles */
        .sidebar-menu {
            padding: 20px 0;
            height: calc(100vh - 120px);
            display: flex;
            flex-direction: column;
        }

        .menu-items {
            flex: 1;
        }

        .menu-item {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 4px 12px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .menu-item:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .menu-item i {
            width: 20px;
            margin-right: 12px;
            text-align: center;
            font-size: 1.1rem;
        }

        .menu-text {
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed .menu-text {
            opacity: 0;
        }

        .logout-btn {
            background: none;
            border: none;
            color: white;
            width: 90%;
            text-align: left;
            cursor: pointer;
            font-size: inherit;
        }

        .logout-item {
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
        }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            padding: 20px;
            min-height: 100vh;
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .main-content.expanded {
            margin-left: 80px;
        }

        /* Mobile Toggle */
        .mobile-toggle {
            position: fixed;
            top: 20px;
            left: 20px;
            background: #059669;
            border: none;
            color: white;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            z-index: 1001;
            display: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .mobile-toggle:hover {
            background: #047857;
            transform: scale(1.05);
        }

        /* Overlay for mobile */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Content placeholder */
        .content-placeholder {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .content-placeholder h1 {
            color: #1f2937;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .content-placeholder p {
            color: #6b7280;
            line-height: 1.6;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.mobile-open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-toggle {
                display: block;
            }
        }

        /* Badge untuk notifikasi */
        .menu-badge {
            background: #ef4444;
            color: white;
            font-size: 0.75rem;
            padding: 2px 6px;
            border-radius: 10px;
            margin-left: auto;
            min-width: 18px;
            text-align: center;
        }

        .logout-btn:hover {
            background: #ef4444 !important;
            color: white !important;
        }
    </style>
</head>

<body>
    <!-- Mobile Toggle Button -->
    <button class="mobile-toggle" id="mobileToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Overlay for mobile -->
    <div class="overlay" id="overlay"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
            <button class="toggle-btn" id="toggleBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <nav class="sidebar-menu">
            <div class="menu-items">
                <a href="{{ route('admin.produk.create') }}" class="menu-item">
                    <i class="fas fa-plus"></i>
                    <span class="menu-text">Tambah Produk</span>
                </a>

                <a href="{{ route('admin.produk.index') }}" class="menu-item">
                    <i class="fas fa-list"></i>
                    <span class="menu-text">Daftar Produk</span>
                </a>
            </div>

            <div class="logout-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="menu-item logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="menu-text">Logout</span>
                    </button>
                </form>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content" id="mainContent">
        @yield('content')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const toggleBtn = document.getElementById('toggleBtn');
            const mobileToggle = document.getElementById('mobileToggle');
            const overlay = document.getElementById('overlay');

            // Desktop toggle
            toggleBtn.addEventListener('click', function () {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
            });

            // Mobile toggle
            mobileToggle.addEventListener('click', function () {
                sidebar.classList.toggle('mobile-open');
                overlay.classList.toggle('active');
            });

            // Close sidebar when clicking overlay
            overlay.addEventListener('click', function () {
                sidebar.classList.remove('mobile-open');
                overlay.classList.remove('active');
            });

            // Handle window resize
            window.addEventListener('resize', function () {
                if (window.innerWidth > 768) {
                    sidebar.classList.remove('mobile-open');
                    overlay.classList.remove('active');
                }
            });

            // Close mobile sidebar when clicking menu item
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function () {
                    if (window.innerWidth <= 768) {
                        sidebar.classList.remove('mobile-open');
                        overlay.classList.remove('active');
                    }
                });
            });
        });
    </script>
</body>

</html>
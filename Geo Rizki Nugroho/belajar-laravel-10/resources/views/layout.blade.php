<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
/* Warna */
:root {
            --primary-color: #000000; /* Warna hijau cerah */
            --secondary-color: #f4f4f4; /* Warna abu-abu sangat terang */
            --accent-color: #e74c3c; /* Warna merah aksen */
            --text-color: #333; /* Warna abu-abu gelap untuk teks */
            --background-dark: #34495e; /* Warna gelap untuk kontras */
            --card-background: #ffffff; /* Warna putih untuk background card */
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero {
            background-image: url('manhwa-hero.jpg');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Overlay gelap */
            z-index: -1;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            margin: 0;
        }

        .hero p {
            font-size: 20px;
            margin: 10px 0;
        }

        .btn {
            padding: 15px 30px;
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        /* Featured Manhwa Section */
        .featured {
            padding: 50px;
            text-align: center;
            background-color: var(--secondary-color);
        }

        .featured h2 {
            font-size: 36px;
            margin-bottom: 40px;
            color: var(--primary-color);
        }

        .manhwa-card {
            display: inline-block;
            width: 300px;
            margin: 20px;
            background-color: var(--card-background);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .manhwa-card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .manhwa-card h3 {
            font-size: 22px;
            margin: 15px;
            color: var(--text-color);
        }

        .manhwa-card p {
            padding: 0 15px;
            margin-bottom: 20px;
            font-size: 14px;
            color: var(--text-color);
        }

        .manhwa-card:hover {
            transform: translateY(-10px);
        }

        /* Footer */
        footer {
            background-color: var(--background-dark);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }
/* Navbar */
.navbar {
    background-color: var(--primary-color); /* Menggunakan warna utama */
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 100;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: white;
    text-decoration: none;
}

.nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.nav-links li {
    margin-left: 20px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: var(--accent-color); /* Warna aksen saat hover */
}

.burger {
    display: none;
}

.budge p{
    padding-bottom: 50px;
}

/* Responsivitas */
@media (max-width: 768px) {
    .nav-links {
        display: none;
    }
    .burger {
        display: block;
    }
    .burger div {
        width: 30px;
        height: 3px;
        background-color: white;
        margin: 5px;
    }
    .nav-links.show {
        display: block;
        position: absolute;
        background-color: var(--primary-color);
        top: 60px;
        right: 0;
        width: 100%;
        text-align: center;
    }
    .nav-links li {
        margin: 15px 0;
    }
}
.manhwa-list-section {
    padding: 50px;
    background-color: var(--secondary-color);
    text-align: left;
}

.manhwa-list-section h2 {
    font-size: 36px;
    margin-bottom: 30px;
    color: var(--primary-color);
    text-align: center;
}

.manhwa-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.manhwa-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: var(--card-background);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.manhwa-item img {
    width: 150px;
    height: 220px;
    object-fit: cover;
    border-radius: 10px;
    margin-left: 20px;
}

.manhwa-info h3 {
    font-size: 24px;
    color: var(--primary-color);
}

.manhwa-info p {
    font-size: 14px;
    color: var(--text-color);
    margin: 5px 0;
}

.manhwa-item:hover {
    transform: translateY(-10px);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .manhwa-item {
        flex-direction: column;
        align-items: flex-start;
    }
    .manhwa-item img {
        margin-left: 0;
        margin-top: 15px;
        width: 100%;
    }
}




    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="window">
                <div class="nav-container">
                    <ul class="nav-links">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('landing')}}">Landing</a></li>
                    </ul>
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="hero">
        <div class="budge">
            <h1>Explore the World of Manhwa</h1>
            <p>Immerse yourself in a realm full of adventure, drama, and fantasy</p>
            <a href="https://kiryuu.org" class="btn">Start Reading</a>
        </div>
    </section>
  @yield('content')
    <footer>
        <p>&copy; 2024 Geo R.N.</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

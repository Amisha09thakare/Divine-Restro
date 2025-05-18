<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transparent Sticky Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        /* Transparent Sticky Navbar */
        .custom-navbar .navbar {
            position: sticky;
            top: 0;
            z-index: 1020;
            background-color: rgba(255, 255, 255, 0.6); /* transparent white */
            backdrop-filter: blur(10px); /* frosted glass effect */
            box-shadow: none;
            transition: background-color 0.3s ease;
        }

        .custom-navbar .navbar-brand img {
            height: 50px;
        }

        .custom-navbar .navbar-nav .nav-link {
            margin: 0 10px;
            font-weight: bold;
            font-size: 1.1rem;
            color: black !important;
            transition: color 0.3s ease;
        }

        .custom-navbar .navbar-nav .nav-link:hover {
            color: hsl(214, 53.3%, 5.9%) !important;
            text-decoration: underline;
        }

        .custom-navbar .navbar-nav .nav-link.active {
            color: hsl(218, 21.6%, 10%) !important;
        }

        .custom-navbar .dropdown-menu a {
            font-weight: bold;
            color: black;
        }

        .custom-navbar .form-control {
            width: 200px;
        }

        .custom-navbar .navbar-icons {
            font-size: 1.5rem;
            margin-left: 10px;
        }

        .custom-navbar .navbar-icons a {
            padding: 8px;
            border-radius: 50%;
            transition: background 0.2s ease-in-out;
        }

        .custom-navbar .navbar-icons a:hover {
            background-color: #f0f0f0;
        }

        .btn-maroon {
            background-color: maroon !important;
            color: white !important;
        }

        @media (max-width: 768px) {
            .custom-navbar .form-control {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<!-- Sticky Transparent Navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-4 custom-navbar">
    <a class="navbar-brand" href="homen.html">
        <img src="image/loggo.png" alt="Logo" style="width: 100px; height: 60px;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>

        <!-- Search with icon -->
        <form class="d-flex me-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
                <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
            </div>
        </form>

        <!-- User Icon -->
        <div class="navbar-icons d-flex align-items-center">
            <a href="sign.php" title="Sign In" class="text-dark">
                <i class="fas fa-user"></i>
            </a>
        </div>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

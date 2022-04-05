<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon/favicon.png">
    <title>Qfk Motors </title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light color-brand-bg shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/logo/Qfk-motors-small.png" alt="" width="auto" height="48">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto gap-2">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == "index.php" ? "active" : "")?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == "listings.php" ? "active" : "")?>" href="listings.php">Listings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == "about.php" ? "active" : "")?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == "contact.php" ? "active" : "")?>" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
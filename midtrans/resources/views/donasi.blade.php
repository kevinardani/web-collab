
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">

            <!-- Toggle -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Sidebar -->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">

                <!-- sidebar header -->
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <!-- sidebar body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" href="landing">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="donasi">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar ends -->

    <div class="container-fluid bg-secondary-subtle">
        <div class="container py-5">
            <h2>Hai, Calon Penghuni Surga!</h2>
            <p>Kamu ingin Donasi dana untuk...</p>
        </div>
    </div>


    <div class="content container py-5">
        <div onclick="location.href='/donation?donation_type=Medis & Kesehatan'" class="item" type="button" href="donation">
            <img src="images/healthcare.png" alt="Image 1">
            <h6>Medis dan Kesehatan</h6>
         </div>

        <div onclick="location.href='/donation?donation_type=Kemanusiaan'" class="item" type="button" href="/donation">
            <img src="/images/heartbeat.png" alt="Image 1">
            <h6>Kemanusiaan</h6>
        </div>

        <div onclick="location.href='/donation?donation_type=Bencana Alam'" class="item item1" type="button" href="donation">
            <img src="/images/bencana-transformed.png" alt="Image 1">
            <h6>Bencana Alam</h6>
        </div>

        <div onclick="location.href='/donation?donation_type=Rumah Ibadah'" class="item item2" type="button" href="/donation">
            <img src="/images/house.png" alt="Image 1">
            <h6>Rumah Ibadah</h6>
        </div>

        <div onclick="location.href='/donation?donation_type=Beasiswa dan Pendidikan'" class="item item3" type="button" href="/donation">
            <img src="/images/education.png" alt="Image 1">
            <h6>Beasiswa dan Pendidikan</h6>
        </div>

        <div onclick="location.href='/donation?donation_type=Sarana dan Infrastruktur'" class="item item4" type="button" href="/donation">
            <img src="/images/infrastructure.png" alt="Image 1">
            <h6>Sarana dan Infrastruktur</h6>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7421a55437.js" crossorigin="anonymous"></script>
</body>

</html>
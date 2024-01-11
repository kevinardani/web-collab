<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi | Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">a
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="vh-100 overflow-auto">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg border border-primary border-top-0 border-start-0 border-end-0">
        <div class="container">

            <!-- logo -->
            <a class="navbar-brand me-5 fw-bold" href="#">PCR Donasi</a>

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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>

                    <div id="navbar-button" class="d-flex justify-content-end align-items-center gap-3">
                        <a id="signup" href="#SignUp" type="button" class="btn btn-outline-primary rounded-0">Sign
                            Up</a>
                        <a id="signin" href="#SingIn" type="button" class="btn btn-primary rounded-0">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- navbar ends -->

    <!-- section 1 -->
    <div class="container d-flex mt-5">
        <div class="row">

            <!-- Kolom untuk judul dan teks -->
            <div id="title" class="col-md-5 my-5">
                <div class="container-fluid">
                    <h2>Let’s Help People<br> Who Are More In Need</h2> 
                </div>
                <div class="container-fluid mt-3 mb-3">
                    <h5 class="mb-5">
                        There are a number of ways and means to help <br>
                        poor people.
                    </h5>
                    <a id="donate" href="#SingIn" type="button" class="btn btn-primary rounded-0 mt-4 btn-lg">Donate</a>
                </div>
            </div>

            <!-- Kolom untuk gambar -->
            <div class="col-md-7">
                <div class="container-fluid my-5">
                    <img src="../images/img-home.jpg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- section 2 -->
    <div class="container-fluid mt-5 py-4">
        <div class="container">
            <h5 class=" mb-5">Our Recent Donation</h5>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                        <div class="item mb-4">
                            <div class="card border-0 shadow">
                                <img src="images/img1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="images/img1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="images/img2.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="images/img3.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="images/img4.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card h-430 border-0 align-items-center">
                            <p class="my-auto"><a href="">See More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section 3 -->
    <div id="section3" class="container-fluid bg-secondary-subtle mt-5">
        <div class="container py-4">
            <div class="row ">
                <div class="col-4 text-center">
                    <img class="mt-5 mb-5" src="/images/user.png" alt="" height="100px">
                    <h4>Buat Akun</h4>
                </div>
                <div class="col-4 text-center">
                    <img class="mt-5 mb-5" src="/images/clicking.png" alt="" height="85px">
                    <h4>Pilih Donasi</h4>
                </div>
                <div class="col-4 text-center">
                    <img class="mt-5 mb-5" src="/images/donation.png" alt="" height="100px">
                    <h4>Mulai Berdonasi</h4>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7421a55437.js" crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>

</html>
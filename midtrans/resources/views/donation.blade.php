<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IDonation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            min-height: 75rem;
        }
    </style>
</head>

<body>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">IDonation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/donation">Donation <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav> -->

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

    <div class="jumbotron">
        <div class="container">
            <a href="/"><h1 class="display-4">IDonation</h1></a>
            <p class="lead">Platform donasi untuk saudara kita yang membutuhkan.</p>
        </div>
    </div>

    <div class="container">
        <form action="#" id="donation_form">
            <legend>Donation</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="donor_name" class="form-control" id="donor_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="email" name="donor_email" class="form-control" id="donor_email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Jenis Donasi</label>
                        <select name="donation_type" class="form-control" id="donation_type">
                          <option value="medis_kesehatan">Medis & Kesehatan</option>
                          <option value="kemanusiaan">Kemanusiaan</option>
                          <option value="bencana_alam">Bencana Alam</option>
                          <option value="rumah_ibadah">Rumah Ibadah</option>
                          <option value="beasiswa_pendidikan">Beasiswa & Pendidikan</option>
                          <option value="sarana_infrastruktur">Sarana & Infrastruktur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" name="amount" class="form-control" id="amount">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Catatan (Opsional)</label>
                        <textarea name="note" cols="30" rows="3" class="form-control" id="note"></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('services.midtrans.clientKey')}}">
    </script>
    <script>
       $("#donation_form").submit(function(event) {
            event.preventDefault();

            $.post("/api/donation", {
                _method: 'POST',
                _token: '{{ csrf_token() }}',
                donor_name: $('input#donor_name').val(),
                donor_email: $('input#donor_email').val(),
                donation_type: $('select#donation_type').val(),
                amount: $('input#amount').val(),
                note: $('textarea#note').val(),
            },
            function (data, status) {
                console.log(data);
                console.log(status);
                snap.pay(data.snap_token, {
                    // Optional
                    onSuccess: function (result) {
                        location.reload();
                    },
                    // Optional
                    onPending: function (result) {
                        location.reload();
                    },
                    // Optional
                    onError: function (result) {
                        location.reload();
                    }
                });
                return false;
            });
        })
    </script>
</body>

</html>
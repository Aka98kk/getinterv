<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style type="text/css">
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <section class="container-fluid py-3" style="background: #191757;">
        <div class="row d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <div class="col-12 col-sm-6 d-flex align-items-center justify-content-center mb-3 mb-sm-0">
                <a href="#" class="text-white text-center text-decoration-none">Home</a>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end">
                <a href="{{ route('logindiisi') }}" class="btn rounded-3 px-5 py-2 fw-bold me-2"
                    style="background: #CEE7FE;">Masuk</a>
                <a href="{{ route('register') }}" class="btn rounded-3 px-5 py-2 fw-bold"
                    style="background: #CEE7FE;">Daftar</a>
            </div>
        </div>
    </section>

    <!-- End Navbar -->

    <!-- Section 1 -->
    <section class="container-fluid vh-100" style="background-color: #CEE7FE;">
        <div class="row px-3">
            <div class="col-md-6 vh-100 d-flex align-items-center">
                <div>
                    <h1 class="fw-bold text-secondary">Lorem</h1>
                    <p class="fw-bold my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum
                        has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <a href="{{ route('register') }}" class="text-white text-decoration-none rounded-5 px-5 py-3"
                        style="background: #1A2474;">Daftar sekarang</a>
                </div>
            </div>
            <div class="col-6 d-none d-md-flex vh-100 position-relative">
                <img src="assets/Group 250.png" class="img-fluid">
            </div>
        </div>

    </section>
    <!-- End Section 1 -->

    <script src="js/bootstrap.min.js"></script>
</body>

</html>

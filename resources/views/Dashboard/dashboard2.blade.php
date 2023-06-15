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

        .word-wrap {
            word-wrap: break-word;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <section class="container-fluid py-3 position-absolute" style="background: #191757;">
        <div class="row d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <div class="col-12 col-sm-6 d-flex align-items-center justify-content-center mb-3 mb-sm-0">
                <a href="{{ route('index2') }}" class="text-white text-center text-decoration-none me-5">Home</a>
                <a href="{{ route('dashboard.Dashboard2') }}" class="text-white text-center text-decoration-none">Interview</a>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end">
                <a href="#" class="btn rounded-3 px-3 py-2 fw-bold"
                    style="background: #CEE7FE;">18_qulbiazzzumo</a>
            </div>
        </div>
    </section>

    <!-- End Navbar -->

    <!-- Section -->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center"
        style="background-color: #CEE7FE;">
        <div class="container">
            <div class="row d-flex flex-column">
                <div class="col-md-6">
                    <h6 class="text-primary mb-3">Account Gmail anda</h6>
                    <div class="bg-white rounded-3 px-5 py-2 text-muted">18_qulbiazzumi</div>
                </div>

                <div class="col-md-6 my-4">
                    <h6 class="text-primary mb-3">Hari Interview anda</h6>
                    <div class="bg-white rounded-3 px-5 py-2 text-muted">Selasa, 16 Mei
                        2023</div>
                </div>

                <div class="col-md-6">
                    <h6 class="text-primary mb-3">Link Meet </h6>
                    <div class="bg-white rounded-3 px-5 py-2">
                        <a href="#"
                            class="py-2 text-center word-wrap link-dark">https://www.figma.com/file/ihyDQiqPfccvKDWGUIfnI1/Interview?type=d</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <script src="js/bootstrap.min.js"></script>
</body>

</html>

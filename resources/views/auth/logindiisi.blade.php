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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 d-none d-md-block align-self-end mb-sm-3 mb-lg-5">
                <img src="assets/two-people-front-of-computer.png" alt="image" class="img-fluid">
            </div>
            <div class="col-md-6 px-5">
                <div class="row d-flex flex-column my-5">
                    <div class="border border-1 rounded-5 shadow-lg py-5 px-5 mb-5">
                        <div class="row text-center mb-4">
                            <h3 class="fw-bold">Log in to lorem</h1>
                        </div>
                        <form class="form-default" method="POST" action="{{ route('logindiisi.auth') }}">
                            @csrf
                            <div class="row text-center">
                                <input type="email" id="email" name="email" placeholder="Enter email"
                                    class="form-control border border-2 rounded-4 px-4 py-3 mb-2 w-100" required>
                                <input type="password" id="password" name="password" placeholder="Enter password"
                                    class="form-control border border-2 rounded-4 px-4 py-3 mb-2 w-100" required>
                                <input type="submit" value="Continue"
                                    class="text-white border rounded-4 px-5 py-3 w-100" style="background: #1FCC26;">
                                <p class="text-muted my-4">OR</p>
                            </div>
                        </form>
                        <div class="row">
                            <a href="{{ route('login.google.login') }}"
                                class="border border-2 rounded-4 py-2 fw-bold text-center text-dark text-decoration-none mb-2 w-100"><img
                                    src="assets/logo google 1.png" alt="image" class="img-fluid me-3">Continue with
                                Google</a>
                            <a href="{{ route('microsoft.login') }}"
                                class="border border-2 rounded-4 py-2 fw-bold text-center text-dark text-decoration-none mb-2 w-100"><img
                                    src="assets/Microsoft 1.png" alt="image" class="img-fluid me-3">Continue with
                                Google</a>
                            <a href="#"
                                class="border border-2 rounded-4 py-2 fw-bold text-center text-dark text-decoration-none mb-2 w-100"><img
                                    src="assets/Apple Logo.png" alt="image" class="img-fluid me-3">Continue with
                                Google</a>
                            <a href="#"
                                class="border border-2 rounded-4 py-2 fw-bold text-center text-dark text-decoration-none mb-5 w-100"><img
                                    src="assets/slack 1.png" alt="image" class="img-fluid me-3">Continue with
                                Google</a>
                        </div>
                        <div class="row text-center">
                            <p>Can't log in? . <a href="{{ route('register') }}register.html"
                                    class="text-muted text-decoration-none">Sign up
                                    for an
                                    account</a></p>
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="text-center">Privacy Policy . Terms of Service</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block align-self-end">
                <img src="assets/komputer.png" alt="image" class="img-fluid">
            </div>
        </div>
    </div>
    {{-- <script>
        document.querySelector('.form-default').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah perilaku standar pengiriman formulir

            var emailInput = document.getElementById("email");
            var passwordInput = document.getElementById("password");

            // Lakukan validasi atau tindakan lain yang Anda butuhkan di sini

            // Redirect ke halaman tujuan setelah mengirim formulir
            window.location.href = "{{ route('register') }}";
        });
    </script> --}}
</body>

</html>

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
    <main id="tt-pageContent" class="tt-offset-none">
        <div class="container">
            <div class="tt-Loginpapages-wrapper">
                <div class="tt-Loginpages">
                    @if ($errors->any())
                        <div class="card card-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color:red;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 d-none d-md-block align-self-end mb-sm-3 mb-lg-5">
                                <img src="assets/two-people-front-of-computer.png" alt="image" class="img-fluid">
                            </div>
                            <div class="col-md-6 px-5">
                                <div class="row d-flex flex-column my-5">
                                    <div class="border border-1 rounded-5 shadow-lg pt-5 py-3 px-5 mb-5">
                                        <div class="row text-center mb-4">
                                            <h3 class="fw-bold">Sign up for your account</h1>
                                        </div>
                                        <form class="form-default" method="post"
                                            action="{{ route('login.daftar') }}">
                                            @csrf
                                            <div class="row text-center">
                                                <input type="text" name="name" placeholder="Enter name"
                                                    class="form-control border border-2 rounded-4 px-4 py-3 mb-3 w-100"
                                                    required>
                                                <input type="email" name="email" placeholder="Enter email"
                                                    class="form-control border border-2 rounded-4 px-4 py-3 mb-3 w-100"
                                                    required>
                                                <input type="password" name="password" placeholder="Enter Password"
                                                    class="form-control border border-2 rounded-4 px-4 py-3 mb-3 w-100"
                                                    required>
                                                <input type="password" name="password_confirm"
                                                    placeholder="Enter Repeat Password"
                                                    class="form-control border border-2 rounded-4 px-4 py-3 mb-3 w-100"
                                                    required>
                                                <input type="submit" value="Continue"
                                                    class="text-white border rounded-4 px-5 py-3 mb-5 w-100">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                         </main>
                     <h6 class="text-center mt-5 m-0">Privacy Policy . Terms of Service</h6>
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
            window.location.href = "{{ route('login') }}";
        });
    </script> --}}
</body>

</html>

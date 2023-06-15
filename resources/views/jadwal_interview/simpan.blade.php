<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Interview</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0"
                style="background: linear-gradient(0deg, #CEE7FE, #CEE7FE), #EEF4E0;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <div class="my-auto">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.Dashboard') }}"
                                    class="nav-link d-flex justify-content-center rounded-3 px-4 py-3"
                                    style="background: #3A5999;">
                                    <img src="assets/dashboard icon.png" alt="imgae" class="img-fluid me-2"
                                        width="20">
                                    <span class="text-white">Dashboard</span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="{{ url('jadwal_interview') }}" class="nav-link rounded-3 py-3"
                                    style="background: #3A5999;">
                                    <span class="text-white">Jadwal interview</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('pertanyaan') }}" class="nav-link rounded-3 px-3 py-3"
                                    style="background: #3A5999;">
                                    <span class="text-white">List pertanyaan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col d-flex flex-column flex-nowrap p-4">
                <div class="d-flex align-items-center justify-content-end">
                    <div class="dropdown">
                        <a class="text-decoration-none dropdown-toggle me-3" href="#" role="button"
                            id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="color: #1A2474;">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                            <li class="d-flex align-items-center mx-4">
                                <i class="bi bi-person-circle fs-4"></i>
                                <a class="dropdown-item" href="{{ route('dashboard.Dashboard') }}">Profile</a>
                            </li>
                            <li class="d-flex align-items-center mx-4">
                                <i class="bi bi-box-arrow-right fs-4"></i>
                                <a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <img src="assets/Ellipse 2.png" alt="image" class="img-fluid rounded-circle" width="40">
                </div>
                <div class="mt-3">
                    <h2 class="fw-bold" style="color: #191757;">Jadwal Pertanyaan</h2>
                    <p class="text-muted">Admin / <b>Jadwal pertanyaan</b></p>
                </div>

                <div class="row m-0">
                    <label for="pertanyaan" class="text-muted fs-4 my-4">Pertanyaan :</label>
                    <div class="card">
                        <table class="table">
                            @if (count($interviews) > 0)
                                @foreach ($interviews as $interviews)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $interviews->id }}</td>
                                        <td class="text-left ml-2">{{ $interviews->gmail }}</td>
                                        <td class="text-left ml-2">{{ $interviews->hari_interview }}</td>
                                        <td class="text-left ml-2">{{ $interviews->durasi_zoom }}</td>
                                        <td class="text-left ml-2">{{ $interviews->link_zoom }}</td>
                                        <td>
                                            <form id="delete-form-{{ $interviews->id }}"
                                                action="{{ url('DeleteInterview', $interviews->id) }}" method="GET"
                                                onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger active border border-1 rounded-3 py-3 px-4 m-0"
                                                    style="background: #FF0000;">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                        <div>
                            <a href="{{ url('jadwal_interview') }}"
                                class="col-2 btn rounded-3 py-3 text-white bg-danger me-4">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>

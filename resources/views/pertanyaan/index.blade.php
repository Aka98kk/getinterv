<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Temukan formulir berdasarkan ID
        var form = document.getElementById('question-form');

        // Tangani pengiriman formulir
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman formulir standar

            // Dapatkan nilai pertanyaan dari input
            var questionInput = document.getElementById('question-input');
            var question = questionInput.value;

            // Buat elemen HTML baru untuk pertanyaan
            var questionElement = document.createElement('div');
            questionElement.className = 'row mb-1';
            questionElement.innerHTML = '<h6 class="col-6 border border-2 rounded-3 py-3">' + question +
                '</h6>' +
                '<div class="col-4">' +
                '  <button class="border border-1 rounded-3 py-3 px-4 m-0" style="background: #61FF29;">' +
                '    <a href="{{ url('pertanyaan/edit') }}" class="text-decoration-none link-dark">Edit</a>' +
                '  </button>' +
                '  <button class="border border-1 rounded-3 py-3 px-4 m-0" style="background: #FF0000;">' +
                '    <a href="{{ url('pertanyaan.destroy') }}" class="text-decoration-none link-dark">Delete</a>' +
                '  </button>' +
                '</div>';

            // Sisipkan elemen pertanyaan ke dalam halaman
            var questionContainer = document.getElementById('question-container');
            questionContainer.appendChild(questionElement);

            // Kosongkan nilai input
            questionInput.value = '';
        });
    });
</script> --}}


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
                                <a class="dropdown-item" href="{{ route('dashboard.Dashboard1') }}">Profile</a>
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
                    <h2 class="fw-bold" style="color: #191757;">List Pertanyaan</h2>
                    <p class="text-muted">Admin /<b> List pertanyaan</b></p>
                </div>

                <form action="{{ url('AddPertanyaan') }}" method="POST">
                    @csrf

                    <div class="row">
                        <input type="text" name="pertanyaan" placeholder="lorem epsum bla bla bla"
                            class="col-6 border border-2 rounded-3 py-3">
                    </div>

                    <div class="row my-4">
                        <input type="submit" value="Tambah pertanyaan" class="col-2 btn rounded-3 py-3 text-white"
                            style="background: #3A5999;">
                    </div>



                    {{-- <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputBorder">Pertanyaan</label>
                            <input type="text" class="form-control form-control-border" name="pertanyaan"
                                placeholder="" required="">
                        </div>
                    </div> --}}

                    <!-- /.card-body -->

                    {{-- <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-secondary active">
                            Tambah
                        </button>
                    </div> --}}
                </form>

                <div class="card-body table-responsive">

                    {{-- @if (count($data) > 0) --}}
                    {{-- <table class="table table-striped table-valign-middle">
                        <tbody>
                            @foreach ($data as $data)
                                <tr class="text-center">
                                    <td>{{ $loop->literatiom }}</td>
                                    <td class="text-center">
                                    <td class="text-left ml-2">{{ $data->PertanyaanName }}</td>
                                    <form action="{{ route('pertanyaan.edit', $data->id) }}" method="GET">
                                        <td><button type="submit" class="btn btn-danger active">Edit</button>
                                    </form>
                                    <form id="delete-form-{{ $data->id }}"
                                        action="{{ url('DeletePertanyaan', $data->id) }}" method="GET">
                                        @csrf
                                        @method('DELETE')
                                        <td><button type="submit" class="btn btn-danger active">Hapus</button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
{{--
                    <div class="row border d-flex align-items-center py-3">
                        <div class="col-6">
                            <h6 class="m-0 text-center">bla bla bla</h6>
                        </div> --}}
                        <div class="col-6">
                            @if (count($data) > 0)
                            @foreach ($data as $data)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <td class="text-left ml-2">{{ $data->PertanyaanName }}</td>
                                        <form action="{{ route('pertanyaan.edit', $data->id) }}" method="GET">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-danger active me-3">Edit</button>

                                        </form>
                                        <form id="delete-form-{{ $data->id }}" action="{{ url('DeletePertanyaan', $data->id) }}" method="GET">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger active">Hapus</button>
                                        </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                             @endif
                    {{-- @foreach ($pertanyaan as $data)
                    <div class="row d-none">
                        <h6 class="col-6 border border-2 rounded-3 py-3"></h6>
                        <div class="col-4">
                            <button class="border border-1 rounded-3 py-3 px-4 m-0" style="background: #61FF29;"><a
                                    href="{{ url('pertanyaan/edit') }}"
                                    class="text-decoration-none link-dark">Edit</a></button>
                            <button class="border border-1 rounded-3 py-3 px-4 m-0" style="background: #FF0000;"><a
                                    href="{{ url('pertanyaan.destroy') }}" class="text-decoration-none link-dark">
                                    Delete</a></button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    @endforeach --}}
                    <!-- End Sidebar -->

                    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> --}}

</body>

</html>

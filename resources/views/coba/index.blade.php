<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Kategori</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('AddKategori') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Tambah Kategori</label>
                                        <input type="text" class="form-control form-control-border" name="kategori"
                                            id="exampleInputBorder" placeholder="Isi Kategori Barang" required="">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-secondary active">
                                        Tambah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kategori Barang</h3>
                            </div>
                            <div class="card-body table-responsive">
                                {{-- @if (count($data) > 0) --}}
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th class style="width: 10px">Nomer</th>
                                            <th style="">Kategori</th>
                                            <th style="width: 60px">HapusData</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-left ml-2">{{ $data->KategoriName }}</td>
                                                <form id="delete-form-{{ $data->id }}"
                                                    action="{{ url('DeleteKategori', $data->id) }}" method="GET">
                                                    @csrf
                                                    @method('DELETE')
                                                    <td><button type="submit"
                                                            class="btn btn-danger active">Hapus</button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- @else
                                    <p class="h3 text-center text-secondary">Data kosong</p>
                                @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>

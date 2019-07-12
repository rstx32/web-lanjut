<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Pelanggan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pelanggan
                </div>
                <div class="card-body">
                    <a href="/pegawai/tambah" class="btn btn-primary">Input Pelanggan Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelanggan as $p)
                            <tr>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->password }}</td>
                                <td>{{ $p->email }}</td>
                                <td>
                                    <a href="/pelanggan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pelanggan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
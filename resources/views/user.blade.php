<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="2" cellpadding="0" cellspacing="0">
        <tr>
            <th>ID</th><th>Nama</th><th>User name</th><th>Password</th><th>ID Level Pengguna</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->id }}</td><td>{{ $d->nama }}</td><td>{{ $d->user_name }}</td><td>{{ $d->password }}</td><td>{{ $d->id_level_pengguna }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
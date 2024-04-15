<!DOCTYPE html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <a href="user/tambah">+ Tambah user</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
            <td>Kode Level</td>
            <td>Nama Level</td>
            <td>Aksi</td>
        </tr>
     
        <tr>
            <td>{{$data->user_id}}</td>
            <td>{{$data->username}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->level_id}}</td>
            <td>{{$data->level->level_kode}}</td>
            <td>{{$data->level->level_nama}}</td>
            <td><a href="/user/ubah/{{$data->user_id}}">Ubah</a> | <a href="/user/hapus/{{$data->user_id}}">Hapus</a></td>
        </tr>
  
    </table>
</body>
</html>
@extends('layout.layout-admin')

@section('title', 'Data User')
@section('page_title', 'Data User')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data User</h4>
        <a href="/dosen/user/create" class="btn btn-primary">Tambah User</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id_user'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        <a href="/dosen/user/edit" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/dosen/user/delete/{{ $user['id_user'] }}" class="btn btn-sm btn-danger"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

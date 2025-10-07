@extends('layout.layout-admin')

@section('title', 'Tambah User')

@section('page_title', 'Tambah User')

@section('content')
<div class="card p-4 shadow-sm">
    <h5 class="mb-4">Form Tambah User</h5>

    <form action="{{ url('dosen/user/store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" value="{{ old('nama') }}" required>
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" value="{{ old('email') }}" required>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <select name="level" id="level" class="form-select" required>
                <option value="">-- Pilih Level --</option>
                <option value="dosen" {{ old('level') == 'dosen' ? 'selected' : '' }}>Dosen</option>
                <option value="pembimbing" {{ old('level') == 'pembimbing' ? 'selected' : '' }}>Pembimbing</option>
            </select>
            @error('level')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('user') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection

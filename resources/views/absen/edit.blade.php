@extends('layouts.template')

@section('content')
    <form action="{{ route('absen.absen.update', $absen['id']) }}" method="POST" class="card p-5">
        @csrf
        @method('PATCH')

        @if ($errors->any())
            <ul class="alert alert-danger p-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="mb-3 row">
            <label for="name"class="col-sm-2 col-form-label">Nama Siswa:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $absen['name'] }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Jenis :</label>
            <div class="col-sm-10">
                <select class="form-select" id="type" name="type">
                    <option selected disabled hidden>Pilih</option>
                    <option value="Hadir" {{ $absen['type'] == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                    <option value="Izin" {{ $absen['type'] == 'Izin' ? 'selected' : '' }}>Izin</option>
                    <option value="Alfa" {{ $absen['type'] == 'Alfa' ? 'selected' : '' }}>Alfa</option>
                    <option value="Sakit" {{ $absen['type'] == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
@endsection

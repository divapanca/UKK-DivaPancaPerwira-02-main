@extends('layouts.admin.app');
@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card flex-fill w-100">
            <div class="card-header">

                @if (isset($edit))
                <h5 class="card-title mb-0">Edit Data</h5>
                @else
                <h5 class="card-title mb-0">Create Data</h5>
                @endif

            </div>
            <div class="container-fluid">

                @if (isset($edit))
                @include('pages.admin.petugas.edit')
                @else
                @include('pages.admin.petugas.create')
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card flex-fill">
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th class="d-none d-xl-table-cell">Username</th>
                        <th class="d-none d-xl-table-cell">Email</th>
                        <th class="d-none d-xl-table-cell">Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th class="d-none d-xl-table-cell">Telp</th>
                        <th>Level</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->name_petugas }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jeniskelamin }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->level }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('petugas.destroy', $item->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('petugas.edit', $item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Hapus
                            </button>
                        </form>
                        </td>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="text-dark mb-0">Table Users</h2>
                <div class="btn-group">
                    <button id="exportExcel" class="btn btn-info">
                        <i class="fas fa-file text-white"></i>
                        Print Excel
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
                        <i class="fas fa-plus-circle"></i>
                        Tambah User
                    </button>
                </div>
            </div>


            <div class="card-body p-4">
                <table class="table table-bordered table-hover datatable pt-4">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Role</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td><img src="{{ asset('img/user/' . $value->image) }}" width="50px"
                                        class="img-fluid rounded-circle" alt=""></td>
                                <td>
                                    <span
                                        class="badge {{ $value->is_admin ? 'bg-success text-white' : 'bg-secondary text-white' }}">
                                        {{ $value->is_admin ? 'Admin' : 'user' }}
                                    </span>
                                </td>
                                <td class="">
                                    <div class="btn-group gap-2" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#edit-{{ $value->id }}" title="update">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                        <form method="post" action="{{ route('user.destroy', $value->id) }}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image (optional)</label>

                            <input id="image" type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>

                            <select name="is_admin" class="form-control" id="role">
                                <option value="0" selected>User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($data as $key => $value)
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('user.update', $value->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input id="name" type="text" class="form-control" name="name"
                                    value="{{ $value->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ $value->email }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password (optional)</label>
                                <input id="password" type="text" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image (optional)</label>
                                <input id="image" type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>

                                <select name="is_admin" class="form-control" id="role">
                                    <option value="0" {{$value->is_admin ? '' : 'selected'}}>User</option>
                                    <option value="1" {{$value->is_admin ? 'selected' : ''}}>Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

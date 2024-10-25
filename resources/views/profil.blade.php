@extends('layouts.template')
@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body p-4">
                    @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <form method="POST" action="{{ route('profil.update', $user->user_id) }}" enctype="multipart/form-data" id="profileForm">
                        @method('PATCH')
                        @csrf
                        
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label class="mb-2">Foto Profil</label>
                                <div class="d-flex align-items-center">
                                    <div class="position-relative me-3">
                                        <label for="profile_image" class="cursor-pointer mb-0" style="cursor: pointer;">
                                            @if($user->profile_image)
                                            <img src="{{ asset('storage/photos/' . $user->profile_image) }}" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover;">
                                            @else
                                            <img src="{{ asset('/public/img/polinema-bw.png') }}" class="rounded-circle bg-light" style="width: 80px; height: 80px; object-fit: cover;">
                                            @endif
                                            <button type="button" class="btn btn-light btn-sm position-absolute" style="bottom: 0; right: 0; padding: 2px 6px;">
                                                <i class="fas fa-pencil-alt fa-sm"></i>
                                            </button>
                                        </label>
                                    </div>
                                    <input type="file" class="d-none" name="profile_image" id="profile_image">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                    name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Staff Pendamping">
                                @error('nama')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" 
                                    name="username" value="{{ old('username', $user->username) }}" placeholder="staff_pendamping">
                                @error('username')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="old_password" class="form-label">{{ __('Password Lama') }}</label>
                                <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" 
                                    name="old_password" autocomplete="old-password" placeholder="Masukkan Password Lama">
                                @error('old_password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">{{ __('Password Baru') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" autocomplete="new-password" placeholder="Masukkan Password Baru">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" 
                                    name="password_confirmation" autocomplete="new-password" placeholder="Konfirmasi Password Baru">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="submit" class="btn btn-success px-4">Update Profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <strong for="name">{{ __('Name') }}:</strong>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <strong for="email">{{ __('E-Mail Address') }}:</strong>
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <strong>Alamat:</strong>
                            <textarea class="form-control" style="height:50px" name="alamat"
                                placeholder="Alamat"></textarea>

                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Id kelurahan:</strong>
                            <input type="number" name="Id_kelurahan" class="form-control" placeholder="Id kelurahan">
                        
                            @if($errors->has('Id_kelurahan'))
                                <div class="text-danger">
                                    {{ $errors->first('Id_kelurahan') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Id kecamatan:</strong>
                            <input type="number" name="Id_kecamatan" class="form-control" placeholder="Id kecamatan">
                        
                            @if($errors->has('Id_kecamatan'))
                                <div class="text-danger">
                                    {{ $errors->first('Id_kecamatan') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Id kabupaten:</strong>
                            <input type="number" name="Id_kabupaten" class="form-control" placeholder="Id kabupaten">

                            @if($errors->has('Id_kabupaten'))
                                <div class="text-danger">
                                    {{ $errors->first('Id_kabupaten') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Id provinsi:</strong>
                            <input type="number" name="Id_provinsi" class="form-control" placeholder="Id provinsi">

                            @if($errors->has('Id_provinsi'))
                                <div class="text-danger">
                                    {{ $errors->first('Id_provinsi') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>NIK:</strong>
                            <input type="number" name="Nik" class="form-control" placeholder="Nik">

                            @if($errors->has('Nik'))
                                <div class="text-danger">
                                    {{ $errors->first('Nik') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Kode pos:</strong>
                            <input type="number" name="Kode_pos" class="form-control" placeholder="Kode pos">

                            @if($errors->has('Kode_pos'))
                                <div class="text-danger">
                                    {{ $errors->first('Kode_pos') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <strong for="password">{{ __('Password') }}:</strong>
                           
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <strong for="password-confirm">{{ __('Confirm Password') }}:</strong>
                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password">
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

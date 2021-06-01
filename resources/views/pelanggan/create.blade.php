@extends('../layouts/admin')

@section('konten')
    <div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menambahkan Pelanggan Baru</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-sm btn-primary" href="{{ route('customers.index') }}"> <i class="fas fa-backward ">Go Back</i> </a>
            </div>
        </div>
    </div><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/pelanggan/store/{{ $pelanggan->id }}" method="POST" >
        @csrf

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" value="{{ $user->name }}" readonly>

                    @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id User:</strong>
                    <input type="number" name="Id_user" class="form-control" value="{{ $user->id }}" readonly>

                    @if($errors->has('Id_user'))
                        <div class="text-danger">
                            {{ $errors->first('Id_user') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
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
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id kelurahan:</strong>
                    <input type="number" name="Id_kelurahan" class="form-control" placeholder="Id kelurahan">
                
                    @if($errors->has('Id_kelurahan'))
                        <div class="text-danger">
                            {{ $errors->first('Id_kelurahan') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id kecamatan:</strong>
                    <input type="number" name="Id_kecamatan" class="form-control" placeholder="Id kecamatan">
                
                    @if($errors->has('Id_kecamatan'))
                        <div class="text-danger">
                            {{ $errors->first('Id_kecamatan') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id kabupaten:</strong>
                    <input type="number" name="Id_kabupaten" class="form-control" placeholder="Id kabupaten">

                    @if($errors->has('Id_kabupaten'))
                        <div class="text-danger">
                            {{ $errors->first('Id_kabupaten') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id provinsi:</strong>
                    <input type="number" name="Id_provinsi" class="form-control" placeholder="Id provinsi">

                    @if($errors->has('Id_provinsi'))
                        <div class="text-danger">
                            {{ $errors->first('Id_provinsi') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK:</strong>
                    <input type="number" name="Nik" class="form-control" placeholder="Nik">

                    @if($errors->has('Nik'))
                        <div class="text-danger">
                            {{ $errors->first('Nik') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode pos:</strong>
                    <input type="number" name="Kode_pos" class="form-control" placeholder="Kode pos">

                    @if($errors->has('Kode_pos'))
                        <div class="text-danger">
                            {{ $errors->first('Kode_pos') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-md btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
@extends('../layouts/admin')

@section('konten')
    <div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Customer</h2>
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
    <form action="/admin/customers/update/{{ $customer->Id }}" method="POST" >
        @csrf

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id:</strong>
                    <input type="number" class="form-control" value="{{ $customer->Id }}" readonly>

                    @if($errors->has('Id'))
                        <div class="text-danger">
                            {{ $errors->first('Id') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" value="{{ $customer->nama }}">

                    @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}">


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
                    <input type="number" name="Id_kelurahan" class="form-control" value="{{ $customer->Id_kelurahan }}">
                
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
                    <input type="number" name="Id_kecamatan" class="form-control" value="{{ $customer->Id_kecamatan }}">
                
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
                    <input type="number" name="Id_kabupaten" class="form-control" value="{{ $customer->Id_kabupaten }}">

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
                    <input type="number" name="Id_provinsi" class="form-control" value="{{ $customer->Id_provinsi }}">

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
                    <input type="number" name="Nik" class="form-control" value="{{ $customer->Nik }}">

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
                    <input type="number" name="Kode_pos" class="form-control" value="{{ $customer->Kode_pos }}">

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
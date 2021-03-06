@extends('../layouts/admin')

@section('konten')
    <div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menambahkan Pelanggan Baru</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-sm btn-primary" href="{{ route('pelanggan.index') }}"> <i class="fas fa-backward ">Go Back</i> </a>
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
    <form action="/admin/pelanggan/store" method="POST" >
        @csrf

        <div>
            <span class="col-xs-12 col-sm-12 col-md-12">
                <span class="form-group">
                    <label for="customer"><strong>Pilih customer : </strong></label>
                    <select name="id_customer" id="customer" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split">
                    @foreach($customers as $customer)
                        <option value="{{$customer->Id}}">{{$customer->nama}}</option>
                    @endforeach
                    </select>
                </span>

            </span>
            
            <span class="col-xs-12 col-sm-12 col-md-12">
                <span class="form-group">
                    <label for="jenis_langganan"><strong>Pilih jenis langganan : </strong></label>
                    <select name="Id_jenis_langganan" id="jenis_langganan" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split">
                    @foreach($jenis_langganan as $jenis)
                        <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                    @endforeach
                    </select>
                </span>
            </span><br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor rumah : </strong>
                    <input type="number" name="nomor_rumah" class="form-control" value="">
                
                    @if($errors->has('nomor_rumah'))
                        <div class="text-danger">
                            {{ $errors->first('nomor_rumah') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat titik langganan : </strong>
                    <input type="text" name="alamat" class="form-control" value="">
                    @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor pelanggan : </strong>
                    <input type="number" name="nomor_pelanggan" class="form-control">
                
                    @if($errors->has('nomor_pelanggan'))
                        <div class="text-danger">
                            {{ $errors->first('nomor_pelanggan') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id kabupaten : </strong>
                    <input type="number" name="Id_kabupaten" class="form-control">
                
                    @if($errors->has('Id_kabupaten'))
                        <div class="text-danger">
                            {{ $errors->first('Id_kabupaten') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id provinsi : </strong>
                    <input type="number" name="Id_provinsi" class="form-control">
                
                    @if($errors->has('Id_provinsi'))
                        <div class="text-danger">
                            {{ $errors->first('Id_provinsi') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode pos : </strong>
                    <input type="number" name="Kode_pos" class="form-control">

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
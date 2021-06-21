@extends('../layouts/admin')

@section('konten')
    <div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menambahkan Tagihan Baru</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-sm btn-primary" href="{{ route('tagihan.index') }}"> <i class="fas fa-backward ">Go Back</i> </a>
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
    <form action="/admin/tagihan/store" method="POST" >
        @csrf

        <div>
            <span class="col-xs-12 col-sm-12 col-md-12">
                <span class="form-group">
                    <label for="pelanggan"><strong>Pilih pelanggan : </strong></label>
                    <select name="id_pelanggan" id="pelanggan" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split">
                    @foreach($pelanggan as $p)
                        <option value="{{$p->Id}}">{{$customers->firstWhere('Id', $p->Id_customer)->nama}} ( {{$p->id}} )</option>
                    @endforeach
                    </select>
                </span>
            </span>
            
            <!-- <span class="col-xs-12 col-sm-12 col-md-12">
                <span class="form-group">
                    <label for="jenis_langganan"><strong>Pilih jenis langganan : </strong></label>
                    <select name="Id_jenis_langganan" id="jenis_langganan" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split">
                    @foreach($jenis_langganan as $jenis)
                        <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                    @endforeach
                    </select>
                </span>
            </span> -->
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun bulan : </strong>
                    <input type="date" id="Tahun_bulan" name="Tahun_bulan" class="form-control" placeholder="Tahun Bulan">
                
                    @if($errors->has('Tahun_bulan'))
                        <div class="text-danger">
                            {{ $errors->first('Tahun_bulan') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Meteran bulan lalu : </strong>
                    <input type="number" name="Meteran_bulan_lalu" class="form-control" value="">
                
                    @if($errors->has('Meteran_bulan_lalu'))
                        <div class="text-danger">
                            {{ $errors->first('Meteran_bulan_lalu') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Meteran bulan sekarang : </strong>
                    <input type="number" name="Meteran_bulan_sekarang" class="form-control" value="">
                
                    @if($errors->has('Meteran_bulan_sekarang'))
                        <div class="text-danger">
                            {{ $errors->first('Meteran_bulan_sekarang') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tarif Dasar : </strong>
                    <input type="number" name="Tarif_dasar" class="form-control">
                
                    @if($errors->has('Tarif_dasar'))
                        <div class="text-danger">
                            {{ $errors->first('Tarif_dasar') }}
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
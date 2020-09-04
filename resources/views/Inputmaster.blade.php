@extends('layout/sidenav')

@section('title','Input Master Barang')

<head>
<style>

.form-control {
    width: 200px;
}

</style>
</head>

<body>
@section('container')

<form>
    <div class="container" style="margin-top: 50px; margin-left: 80px; width: 300%" >  
        <div class="card-body" style="background-color: grey;">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kode</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Barang</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Satuan</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kategori</label>
                <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" >
                </div>
            </div>
            <a href="" class="btn btn-primary btn-block" style="">Input</a>
        </div>    
    </div>
@endsection
</body>
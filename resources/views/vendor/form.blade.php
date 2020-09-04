
<div class="container " style="margin-top: 50px; margin-left: 80px; width: 300%" >  
        <div class="card-body" style="background-color: grey;">
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label col-form-label-sm">Kode Vendor</label>
                <div class="col-sm-10">
                {{--<input type="text" class="form-control form-control-sm" id="kode" placeholder="" >--}}
                {{form::text('kode',null, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nama Vendor</label>
                <div class="col-sm-10">
                
                {{form::text('nama',null,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
                <div class="col-sm-10">
                
                {{form::text('alamat',null,['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group row">
                <label for="telepon" class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                <div class="col-sm-10">

                {{form::text('telepon',null,['class' => 'form-control'])}}
                </div>
            </div>
            <button type="submit"class="btn btn-primary btn-block" style="">Input</button>
        </div>    
    </div>
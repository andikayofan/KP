@extends('layout/sidenav')

@section('title','Data Vendor')

@section('container')
<body>
<div class="container" style="margin-top: 20px">
    <div class="table-responsive">
    <table id="example" class="table" style="background-color: ">
        <tdead class="tdead-dark">
            <tr>
                <td scope="col">No</td>
                <td scope="col">Kode Vendor</td>
                <td scope="col">Nama Vendor</td>
                <td scope="col">Alamat</td>
                <td scope="col">Nomor Telepon</td>
                <td scopr="col"> <a href=""></td>
            </tr>
        </tdead>
        <tbody>
            @foreach($vendor as $vndr)
            <tr>
                <td scope="row">1</td>
                <td>{{$vndr->kd_vendor}}</td>
                <td>{{$vndr->nm_vendor}}</td>
                <td>{{$vndr->almt_v}}</td>
                <td>{{$vndr->no_tlp_v}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>

    </table>
    </div>
</div>

</body>
@endsection

@push('scriptdatatable')

<!-- jQuery -->
<script src="{{asset('/LTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('/LTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/LTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/LTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/LTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('')}}/LTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('')}}/LTE/dist/js/demo.js"></script>


<script>
    $(function(){
        $("#example").DataTable([
            "scrollX": true,
        ])
    });
</script>
@endpush
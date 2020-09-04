@extends('layout/sidenav')

@section('title','Input Vendor')

<head>
<style>

.form-control {
    width: 200px;
}

</style>
</head>

<body>
@section('container')
{{ Form::open(['url'=>'/vendor/store'])}}
    @include('vendor.form');
{{form::close()}}
@endsection
</body>
<!DOCTYPE html>
<html lang="en">

<body>

@section('header')
@include('layouts.partials.header')
@show

@yield('isi')

@section('sidebar')
@include('layouts.partials.sidebar')
@show

@section('footer')
@include('layouts.partials.footer')
@show
</body>
</html>
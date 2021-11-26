@extends('layout.add_preferencia')

@section('add_preferencia')

<form class="form-signin" action="/insert/restrito" method="POST">

    @csrf

    

</form>


@endsection

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('arts.update', ['art' => $art]) }}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    @include('admin.art.partials.form')
</form>
@endsection

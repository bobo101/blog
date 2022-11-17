@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('arts.store') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.art.partials.form')
</form>
@endsection

@extends('layouts.frontend')

@section('content')

<div class="row">
    @foreach($data as $datum)
        <image-component :datum="{{json_encode($datum)}}"></image-component>
    @endforeach
</div>

@stop

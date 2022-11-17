@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
			    <div class="row justify-content-center">
			    	<div class="col-sm-2">
			    		<div class="img-box" style="height: 160px;">
				            <img src="{{ $art['imageUrl'] }}" alt="img">
				        </div>
			        </div>
			        <div class="col-sm-10">
			        	<h5 class="card-title">{{ $art['title'] ?? '' }}</h5>
			        	<br>
			        	<ul class="list-inline" >
			        		@foreach($art->tags as $tag)
		                        <li class="list-inline-item">
		                           	<p class="badge bg-secondary">{{$tag->name}}</p>
		                        </li>
	                        @endforeach
	                    </ul>
	                    <ul class="list-inline" >
			        		@foreach($art->authors as $author)
		                        <li class="list-inline-item">
		                           	<p class="badge bg-secondary">{{$author->name}}</p>
		                        </li>
	                        @endforeach
	                    </ul>
			        </div>
			    </div>
			</div>
		</div>

		<div class="row justify-content-center">
	    	<div class="col-sm-2">
	    		<div class="img-box" style="height: 160px;">
		            <img src="{{ $art['imageUrl'] }}" alt="img">
		        </div>
	        </div>
	    </div>

	</div>
@endsection

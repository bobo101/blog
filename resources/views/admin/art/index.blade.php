@extends('layouts.app')

@section('content')

<div class="container">
    <div align="right">
        <a href="/admin/arts/create" class="btn btn-primary me-3">Create</a>
    </div>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created At</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($arts as $art)
                <tr>
                    <td class="align-middle">{{$art['id']}}</td>
                    <td>
                        <div class="img-box">
                            <img src="{{$art['imageUrl']}}" alt="img">
                        </div>
                    </td>
                    <td class="align-middle">{{$art['title']}}</td>
                    <td class="align-middle">{{$art['created_at']}}</td>
                    <td class="align-middle">
                        <div align="right">
                            <span>
                                <a href="/admin/arts/{{$art['id']}}" class="btn btn-primary">Show</a>
                            </span>
                            <span>
                                <a href="/admin/arts/{{$art['id']}}/edit" class="btn btn-success">Edit</a>
                            </span>
                            <span>
                                <form method="POST" action="{{ route('arts.destroy', ['art' => $art]) }}" style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </span>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

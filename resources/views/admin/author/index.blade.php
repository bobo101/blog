@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td class="align-middle">{{$author['id']}}</td>
                        <td class="align-middle">
                            <form method="POST" action="{{ route('authors.update', ['author' => $author]) }}">
                            @method('PATCH')
                            @csrf
                                <input type="text" name="name" class="form-control" value="{{$author['name']}}"
                                    onchange="this.form.submit();">
                            </form>
                        </td>
                        <td class="align-middle">{{$author['created_at']}}</td>
                        <td class="align-middle">
                            <div align="right">
                                <form method="POST" action="{{ route('authors.destroy', ['author' => $author]) }}" 
                                    style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div align="right">
    <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create
    </button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('authors.store') }}">
        @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create author</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

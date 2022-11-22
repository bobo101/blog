<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-sm-8">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$art['title'] ?? ''}}">
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-sm-8">
            <image-upload-component @isset($art) default-url="{{$art['imageUrl']}}" @endisset></image-upload-component>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-sm-8">
            <label class="form-label">Tags</label>
            <multi-select-component alias="tags" :data="{{json_encode($tags)}}" 
                @isset($art) :default-value="{{json_encode($art->tags->map->only('id', 'name'))}}" @endisset>
            </multi-select-component>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-sm-8">
            <label class="form-label">Authors</label>
            <multi-select-component alias="authors" :data="{{json_encode($authors)}}" 
                @isset($art) :default-value="{{json_encode($art->authors->map->only('id', 'name'))}}" @endisset>
            </multi-select-component>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-sm-8">
            <label class="form-label">File</label>
            <p>{{ $art['file_url'] ?? '' }}</p>
            <input class="form-control" type="file" name="file">
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-sm-8">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{$art['description'] ?? ''}}</textarea>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div align="right">
                <a href="/admin/arts" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

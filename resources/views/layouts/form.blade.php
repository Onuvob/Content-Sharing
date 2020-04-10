<div class="form-group">
    <label for="postTitle">Post Title</label>
    @if(isset($post))

        <input name="title" type="text" class="form-control" id="postTitle" value="{{ $post->title }}" placeholder="Enter post title">
    @else
        <input name="title" type="text" class="form-control" id="postTitle"  placeholder="Enter post title">

    @endif
</div>

<div class="form-group">
    <label for="postBody">Post Body</label>
    @if(isset($post))
        <textarea type="text" name="body" class="form-control" id="postBody" rows="3"> {{ $post->body }}</textarea>
    @else
        <textarea type="text" name="body" class="form-control" id="postBody" rows="3"></textarea>
    @endif

</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary">Submit Edit</button>
</div>

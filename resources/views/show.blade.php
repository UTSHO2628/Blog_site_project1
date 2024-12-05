<form action="{{ route('post.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $post->title }}" id="title" required>
    <label for="body">Body</label>
    <textarea name="body" id="body" required>{{ $post->body }}</textarea>
    <button type="submit">Update Post</button>
</form>

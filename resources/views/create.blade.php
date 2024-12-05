<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required>
    <label for="body">Body</label>
    <textarea name="body" id="body" required></textarea>
    <button type="submit">Create Post</button>
</form>

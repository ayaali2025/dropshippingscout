@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h3>Edit Blog</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required>
                </div>

                <!-- Excerpt -->
                <div class="form-group mb-3">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <textarea class="form-control" id="excerpt" name="excerpt" rows="3" required>{{ $blog->excerpt }}</textarea>
                </div>

                <!-- Author -->
                <div class="form-group mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $blog->author }}" required>
                </div>

                <!-- Publish Date -->
                <div class="form-group mb-3">
                    <label for="publish_date" class="form-label">Publish Date</label>
                    <input type="date" class="form-control" id="publish_date" name="publish_date" value="{{ $blog->publish_date }}" required>
                </div>

                <!-- Blog Image -->
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Blog Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid mt-3">
                </div>

                <!-- Likes -->
                <div class="form-group mb-3">
                    <label for="likes" class="form-label">Likes</label>
                    <input type="number" class="form-control" id="likes" name="likes" value="{{ $blog->likes }}" required>
                </div>


                <!-- Slug -->
                <div class="form-group mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $blog->slug }}" required>
                </div>

                <!-- Content Sections (Handled by TinyMCE) -->
                <div id="content-sections" class="mb-3">
                    <h4>Content Sections</h4>
                    <textarea class="form-control tinymce-editor" name="content" rows="10" required>{{ $blog->content }}</textarea>
                </div>

                <!-- Blog Category -->
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" id="category" name="category" required>
                         <option value="eBay" {{ $blog->category == 'eBay' ? 'selected' : '' }}>eBay</option>
                        <option value="Shopify" {{ $blog->category == 'Shopify' ? 'selected' : '' }}>Shopify</option>
                        <option value="WooCommerce" {{ $blog->category == 'WooCommerce' ? 'selected' : '' }}>WooCommerce</option>
                        <option value="Aliexpress" {{ $blog->category == 'Aliexpress' ? 'selected' : '' }}>Aliexpress</option>
                        <option value="Walmart" {{ $blog->category == 'Walmart' ? 'selected' : '' }}>Walmart</option>
                        <option value="Amazon" {{ $blog->category == 'Amazon' ? 'selected' : '' }}>Amazon</option>
                        <!-- Add more categories as needed -->
                    </select>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-warning">Update Blog</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/edwduv6xfg4eitjppu8cu3oyy56pofhht2q8rm0xxtny84yo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    // Initialize TinyMCE
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        plugins: 'link image code',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image',
        height: 500
    });
</script>
@endsection

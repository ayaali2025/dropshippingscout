@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Create New Blog</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group mb-3">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <textarea class="form-control" id="excerpt" name="excerpt" rows="3" required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>

                <div class="form-group mb-3">
                    <label for="publish_date" class="form-label">Publish Date</label>
                    <input type="date" class="form-control" id="publish_date" name="publish_date" required>
                </div>

                <div class="form-group mb-3">
                    <label for="image" class="form-label">Blog Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>

                <div class="form-group mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" required>
                </div>

                <div class="form-group mb-3">
                    <label for="likes" class="form-label">Likes</label>
                    <input type="number" class="form-control" id="likes" name="likes" value="0" required>
                </div>

                <div class="form-group mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea id="content" name="content" rows="10" required></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" id="category" name="category" required>
                         <option value="eBay">eBay</option>
                        <option value="Shopify">Shopify</option>
                        <option value="WooCommerce">WooCommerce</option>
                        <option value="Aliexpress">Aliexpress</option>
                        <option value="Walmart">Walmart</option>
                        <option value="Amazon">Amazon</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" style="background: cadetblue;">Create Blog</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/edwduv6xfg4eitjppu8cu3oyy56pofhht2q8rm0xxtny84yo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'link image code',
        toolbar: 'undo redo | formatselect | bold italic backcolor | link image | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        content_css: 'https://www.tiny.cloud/css/codepen.min.css'
    });

    document.querySelector('form').addEventListener('submit', function() {
        // Sync the TinyMCE content with the textarea
        tinymce.get('content').save();
    });
</script>
@endsection

<div class="container">
    <h1>Create New Blog</h1>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <!-- Excerpt -->
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <textarea class="form-control" id="excerpt" name="excerpt" rows="3" required></textarea>
        </div>

        <!-- Author -->
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <!-- Publish Date -->
        <div class="form-group">
            <label for="publish_date">Publish Date</label>
            <input type="date" class="form-control" id="publish_date" name="publish_date" required>
        </div>

        <!-- Image -->
        <div class="form-group">
            <label for="image">Blog Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <!-- Likes -->
        <div class="form-group">
            <label for="likes">Likes</label>
            <input type="number" class="form-control" id="likes" name="likes" value="0" required>
        </div>

        <!-- Content Sections -->
        <div id="content-sections">
            <h3>Content Sections</h3>
            <div class="form-group">
                <button type="button" class="btn btn-secondary" onclick="addSection()">Add Section</button>
            </div>

            <div class="content-section" data-index="0">
                <div class="form-group">
                    <label for="section-heading-0">Heading</label>
                    <input type="text" class="form-control" id="section-heading-0" name="content_sections[0][heading]" required>
                </div>
                <div class="form-group">
                    <label for="section-paragraph-0">Paragraph</label>
                    <textarea class="form-control" id="section-paragraph-0" name="content_sections[0][paragraphs][]" rows="3" required></textarea>
                </div>
                <button type="button" class="btn btn-secondary" onclick="addParagraph(0)">Add Paragraph</button>
            </div>
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
                <!-- Add more categories as needed -->
            </select>
        </div>
        

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Blog</button>
    </form>
</div>

<script>
    let sectionIndex = 1;

    function addSection() {
        const sectionTemplate = `
            <div class="content-section" data-index="${sectionIndex}">
                <div class="form-group">
                    <label for="section-heading-${sectionIndex}">Heading</label>
                    <input type="text" class="form-control" id="section-heading-${sectionIndex}" name="content_sections[${sectionIndex}][heading]" required>
                </div>
                <div class="form-group">
                    <label for="section-paragraph-${sectionIndex}">Paragraph</label>
                    <textarea class="form-control" id="section-paragraph-${sectionIndex}" name="content_sections[${sectionIndex}][paragraphs][]" rows="3" required></textarea>
                </div>
                <button type="button" class="btn btn-secondary" onclick="addParagraph(${sectionIndex})">Add Paragraph</button>
            </div>
        `;
        document.getElementById('content-sections').insertAdjacentHTML('beforeend', sectionTemplate);
        sectionIndex++;
    }

    function addParagraph(sectionId) {
        const paragraphTemplate = `
            <div class="form-group">
                <textarea class="form-control" name="content_sections[${sectionId}][paragraphs][]" rows="3" required></textarea>
            </div>
        `;
        document.querySelector(`.content-section[data-index="${sectionId}"]`).insertAdjacentHTML('beforeend', paragraphTemplate);
    }
</script>

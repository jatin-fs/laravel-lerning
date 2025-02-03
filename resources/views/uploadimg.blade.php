<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h2>Upload Image</h2>
    <form action="/uploadfile" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image">
        <button type="submit">Upload</button>
    </form>
</div>
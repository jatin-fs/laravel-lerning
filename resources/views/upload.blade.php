<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>Upload File</h1>
    <form action="uploadfile" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="file" id="file" />
        </br></br>
        <input type="submit" value="Upload" />
    </form>
</div>
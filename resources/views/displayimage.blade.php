<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1>List of images</h1>
    @foreach($images as $img)
    <img style="width:200px" src="{{asset('storage/uploads/'.$img->path)}}" alt="image"
        style="width: 200px; height: 200px;">
    @endforeach
</div>

<!-- "{{ asset('storage/.$img->path') }}" -->
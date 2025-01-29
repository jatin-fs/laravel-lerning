<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h2>Profile Page</h2>
    @if(session('user'))
    <h3>Welcome, {{session('user')}}</h3>
    @else
    <h3>No User found <a href="/signin">signin</a></h3>
    @endif

    <a href="/logout">Logout</a>
</div>
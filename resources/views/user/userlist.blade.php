<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h3>User List</h3>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
        </tr>
        @endforeach
    </table>
</div>
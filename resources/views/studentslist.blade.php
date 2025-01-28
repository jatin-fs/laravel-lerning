<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div>
        <!-- The only way to do great work is to love what you do. - Steve Jobs -->
        <h3>Students List</h3>
        <table border="1">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>batch</td>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->batch}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
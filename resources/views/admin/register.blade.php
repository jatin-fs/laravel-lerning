<div class="registerPage">
    <div class="form-wrapper">
        <h2>Register New User</h2>
        <!-- {{print_r($errors)}} -->

        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
        @endif -->

        <form action="/adduser" method="post">
            @csrf
            <div class="input-wrapper">
                <label for="username" class="{{$errors->first('email')?'label-error':''}}">Username</label><br />
                <input type="text" name="username" id="username" placeholder="Enter your Username"
                    class="{{$errors->first('username')?'input-error':''}}">
                <br />
                <span class="error">
                    @error ('username'){{$message}}@enderror
                </span>
            </div>
            <div class="input-wrapper">
                <label for="email" class="{{$errors->first('email')?'label-error':''}}">Email</label><br />
                <input type="text" name="email" id="email" placeholder="Enter your Email"
                    class="{{$errors->first('email')?'input-error':''}}">
                <br />
                <span class="error">
                    @error ('email'){{$message}}@enderror </span>
            </div>
            <div class="input-wrapper">
                <label for="password" class="{{$errors->first('password')?'label-error':''}}">Password</label><br />
                <input type="text" name="password" id="password" placeholder="Create your Password"
                    class="{{$errors->first('password')?'input-error':''}}">
                <br />
                <span class="error">
                    @error ('password'){{$message}}@enderror
                </span>
            </div>
            <button type=submit>
                Add New User
            </button>
        </form>
    </div>
</div>

<style>
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.registerPage {
    height: 100vh;
    width: 100vw;
    background: gray;
    display: flex;
    align-items: center;
    justify-content: center
}

label {
    color: green;
    font-size: 25px;

}

input {
    height: 30px;
    padding: 4px 8px;
    border: yellow 1px solid;
    color: orange;
    font-size: 20px;
}

.input-wrapper {
    margin-top: 10px;
}

input:focus {
    outline: none;
}

button {
    width: 100%;
    margin-top: 12px;
    height: 30px;
    padding: 4px 8px;
    border: yellow 1px solid;
    color: orange;
    font-size: 20px;
}

.error {
    color: darkred;
    padding: 4px 8px;
    font-size: 20px;
}

.input-error {
    border: 2px red solid;
    color: darkred;
}

.label-error {
    color: darkred;
}
</style>
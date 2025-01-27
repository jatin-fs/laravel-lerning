<div class="registerPage">
    <div class="form-wrapper">
        <h2>Register New User</h2>
        <form action="/adduser" method="post">
            @csrf
            <div class="input-wrapper">
                <label for="username">Username</label><br/>
                <input type="text" name="username" id="username" placeholder="Enter your Username">
            </div>
            <div class="input-wrapper">
                <label for="email">Email</label><br/>
                <input type="text" name="email" id="email" placeholder="Enter your Email">
            </div>
            <div class="input-wrapper">
                <label for="password">Password</label><br/>
                <input type="text" name="password" id="password" placeholder="Create your Password">
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

.registerPage{
    height: 100vh;
    width: 100vw;
    background:gray;
    display:flex;
    align-items:center;
    justify-content:center
}
label{
    color:green;
    font-size:25px;

}
input{
    height:30px;
    padding:4px 8px;
    border:yellow 1px solid;
    color:orange;
    font-size:20px;
}

.input-wrapper{
    margin-top:10px;
}

input:focus{
    outline:none;
}
button{
    width:100%;
    margin-top:12px;
    height:30px;
    padding:4px 8px;
    border:yellow 1px solid;
    color:orange;
    font-size:20px;
}
</style>
<div>
<div class="main">
        <h1>GeeksforGeeks</h1>
        <h3>Enter your login credentials</h3>

        <form action="" class="bg-green-400">
            <label for="first">
                Username:
            </label>
            <input type="text" id="first" name="first" 
                placeholder="Enter your Username" required>

            <label for="password">
                Password:
            </label>
            <input type="password" id="password" name="password" 
                placeholder="Enter your Password" required>

            <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
        
        <p>Not registered?
            <a href="#" style="text-decoration: none;">
                Create an account
            </a>
        </p>
    </div>
</div>

<x-message-banner msg="account created succesfully!" class="success"/>
<x-message-banner msg="incorrect password retry again !" class="error"/>

<style>
    .success{
        background:lightgreen;
        color:green;
        padding:3px 10px;
        width: fit-content;
        block-size: fit-content;
        border-radius: 6px;

    }
    .error{
        background:red;
        color:white;
        padding:3px 10px;
        width: fit-content;
        block-size: fit-content;
        border-radius: 6px;

    }
</style>
<div class="registerPage">
    <div class="form-wrapper">
        <h2>Complete Your Profile Form</h2>
        <form action="/update-profile" method="post">
            @csrf
            <div class="input-wrapper">
                <h3>Please Select your gender</h3>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
            </div>
            <div class="input-wrapper">
                <h3>Please Select your Skills</h3>
                <input type="checkbox" name="skills[]" id="js" value="js">
                <label for="js">JavaScript</label>
                <input type="checkbox" name="skills[]" id="java" value="java">
                <label for="java">Python</label>
                <input type="checkbox" name="skills[]" id="python" value="python">
                <label for="python">Python</label>
                <input type="checkbox" name="skills[]" id="c++" value="c++">
                <label for="c++">C++</label>
            </div>
            <div class="input-wrapper">
                <label for="city">Select Your City</label><br />

                <select id="city" name="city">
                    <option value="adh">Ahemdabad</option>
                    <option value="ggn">Gurugram</option>
                </select>
            </div>
            <div class="input-wrapper">
                <label for="contact">Contact number</label><br />
                <input type="text" name="contact" id="contact" placeholder="Enter your Contact number">
            </div>
            <div class="input-wrapper">
                <label for="age">Age</label><br />
                <input type="number" name="age" id="age" placeholder="enter your age" max='120' min='18'>
            </div>
            <div class="input-wrapper">
                <label for="ratting">Rate your self [0-100]</label><br />
                <input type="range" name="ratting" id="ratting" max='100' min='0' value='75'>
            </div>
            <button type=submit>
                Update Profile
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
    color: white;
    font-size: 20px;

}

input[type=range] {
    width: 100%;
}

input[type=text] {
    min-height: 30px;
    width: 100%;
    padding: 4px 8px;
    border: yellow 1px solid;
    color: orange;
    font-size: 16px;
}

input[type=number] {
    min-height: 30px;
    width: 100%;
    padding: 4px 8px;
    border: yellow 1px solid;
    color: orange;
    font-size: 16px;
}

.input-wrapper {
    margin-top: 10px;
}

input:focus {
    outline: none;
}

select {
    height: 30px;
    width: 100%;
    padding: 4px 8px;
    border: yellow 1px solid;
    color: orange;
    font-size: 20px;
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
</style>
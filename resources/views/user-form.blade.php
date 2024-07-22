<div>
    <h2>Form </h2>

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div style="color: red">
                {{ $error }}
            </div>
        @endforeach
    @endif --}}
    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="username">
            <span style="color: red">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User email" name="email">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter City" name="city">
            <span style="color: red">@error('city'){{$message}}@enderror</span>

        </div>
        <div>
            <h5>User Skill</h5>
            <input type="checkbox" name="skill" id="php" value="PHP">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill" id="noe" value="Node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill" id="java" value="Java">
            <label for="java">Java</label>
            
        </div>
        <span style="color: red">@error('skill'){{$message}}@enderror</span>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>

    </form>
    <hr>
    {{-- <form action="addUser" method="post">
        @csrf
        <div>
            <h5>User Skill</h5>
            <input type="checkbox" name="skill[]" id="php" value="PHP">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="noe" value="Node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" id="java" value="Java">
            <label for="java">Java</label>
        </div>
        <div>
            <h5>Gender</h5>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        <div>
            <h5>City</h5>
            <select name="city" id="">
                <option value="">Select City</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Kolkata">Kolkata</option>
                
            </select>
        </div>
        <div>
            <h5>Age</h5>
            <div>
                <input type="range" name="age" id="age" min="18" max="100">
            </div>
            <button>Add New User</button>
        </div>
    </form> --}}
    <hr>

</div>

<style>
    input[type="text"],
    button {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;

    }

    .input-wrapper {
        margin: 10px;
    }

    button {
        background-color: white;
        cursor: pointer;
    }
</style>

<div>
    <h2>Form </h2>
    <form action="addUser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter City" name="city">
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    input,button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        
    }
    .input-wrapper{
        margin: 10px;
    }
    button{
        background-color: white;
        cursor: pointer;
    }
</style>
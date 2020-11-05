    <h2>Edit User</h2>
   
    <form method="POST" action="/update">
        
        <div class="form-group">
            <label for="name1">User ID:</label>
            <input readonly type="text" class="form-control" id="userid" name="userid" 
                   value="{{$data['id']}}">
        </div>
        
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="username" name="username" 
                   value="{{$data['username']}}">
        </div>
        
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" 
                   value="{{$data['firstname']}}">
        </div>
        
        <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" 
                   value="{{$data['lastname']}}">
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" 
                   value="{{$data['email']}}">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" 
                   value="{{$data['password']}}">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
    
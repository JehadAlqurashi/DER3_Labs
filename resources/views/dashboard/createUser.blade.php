@extends("dashboard.sidebar.sidebar")
@section("content")
    <form action="{{route('dashboard.users.create.new')}}" method="post" class="container" style="margin: 10px; font-size: 20px">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input style="font-size: 20px" name="name" type="text" class="form-control"  aria-describedby="emailHelp" >
            @error("name")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input style="font-size: 20px" name="email" type="email" class="form-control" id="exampleInputPassword1" >
            @error("email")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror
            @csrf
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input style="font-size: 20px" name="password" type="password" class="form-control" >
            @error("password")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror
        </div>

        <button style="font-size: 12px" type="submit" class="btn btn-success">Add</button>
    </form>
@endsection

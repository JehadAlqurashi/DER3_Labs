@extends("dashboard.sidebar.sidebar")
@section("content")
    <form action="{{route("dashboard.users.editing",$chall[0]->id)}}" method="post" class="container" style="margin: 10px; font-size: 20px">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input style="font-size: 20px" name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{$chall[0]->title}}" aria-describedby="emailHelp" >
            @error("title")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Score</label>
            <input style="font-size: 20px" name="score" type="number" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->score}}">
            @error("score")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror
            @csrf
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input style="font-size: 20px" name="description" type="text" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->description}}">
            @error("description")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Hint</label>
            <input style="font-size: 20px" name="hint" type="text" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->hint}}">

            @error("hint")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Flag</label>
            <input style="font-size: 20px" name="flag" type="text" class="form-control" id="exampleInputPassword1" value="{{$chall[0]->flag}}">

            @error("flag")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <select name="category">
                <option value="{{$chall[0]->category}}">{{$chall[0]->category}}</option>
                <option value="saab">Osint</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            @error("category")
            <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror

        </div>
        <button style="font-size: 12px" type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection

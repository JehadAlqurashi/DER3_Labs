@extends("dashboard.sidebar.sidebar")
@section("content")
    <form action="{{route('dashboard.challenge.newChall')}}" method="post" class="container" style="margin: 10px; font-size: 20px">
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input style="font-size: 20px" name="title" type="text" class="form-control"  aria-describedby="title" >
            @error("title")
            <small id="title" class="form-text text-muted">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">score</label>
            <input style="font-size: 20px" name="score" type="text" class="form-control" id="score" >
            @error("score")
            <small id="score" class="form-text text-muted">{{$message}}</small>
            @enderror
            @csrf
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input style="font-size: 20px" name="description" type="text" class="form-control" id="description" >
            @error("description")
            <small id="score" class="form-text text-muted">{{$message}}</small>
            @enderror
            @csrf
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">hint</label>
            <input style="font-size: 20px" name="hint" type="text" class="form-control" id="hint" >
            @error("hint")
            <small id="score" class="form-text text-muted">{{$message}}</small>
            @enderror
            @csrf
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Flag</label>
            <input style="font-size: 20px" name="flag" type="text" class="form-control" id="exampleInputPassword1">

            @error("flag")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror

        </div>




        <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <select name="category">
                <option value="Osint">Osint</option>
                <option value="Web">Web</option>
                <option value="Crypto">Crypto</option>
            </select>
            @error("category")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror


            <div class="form-group">
                <label for="exampleInputPassword1">link</label>
                <input style="font-size: 20px" name="link" type="text" class="form-control" id="hint" >
                @error("link")
                <small id="score" class="form-text text-muted">{{$message}}</small>
                @enderror
                @csrf
            </div>

        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">difficulty</label>
            <select name="difficulty">
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
            </select>
            @error("difficulty")
            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror

        </div>




        <button style="font-size: 12px" type="submit" class="btn btn-success">Add</button>
    </form>
@endsection

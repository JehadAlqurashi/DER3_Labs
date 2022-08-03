@extends("dashboard.sidebar.sidebar")
@section("content")
    <div style="background-color:white;margin: 30px">


        <table class="table" style="font-size: 20px">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">score</th>
                <th scope="col">description</th>
                <th scope="col">category</th>
                <th scope="col">hint</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($chall as $ch)
            <tr>
                <th scope="row">{{$ch->id}}</th>
                <td>{{$ch->title}}</td>
                <td>{{$ch->score}}</td>
                <td>{{$ch->description}}</td>
                <td>{{$ch->category}}</td>
                <td>{{$ch->hint}}</td>
                <td>
                    <a href="{{route("dashboard.challenge.edit",$ch->id)}}"><button type="submit" class="btn btn-success">Edit</button></a>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

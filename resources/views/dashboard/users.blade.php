@extends("dashboard.sidebar.sidebar")
@section("content")
    <div style="background-color:white;margin: 30px">
        @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif

        <table class="table" style="font-size: 20px">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route("dashboard.users.edit",$user->id)}}"><button type="submit" class="btn btn-success">Edit</button></a>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

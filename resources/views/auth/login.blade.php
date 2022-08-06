@extends("auth.section.section")
@section("content")


    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <h1 class="display-1 bold color_white content__title">LOGIN<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey text-spacey hackerFont lead mb-5">
                        Type your credentials to conquer the world
                    </p>
                    <div class="row hackerFont">
                        <div class="col-md-6">
                            <div class="form-group">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                <input type="email" name="email" class="form-control" id="team_name" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                @error("email")
                                <small id="passHelp" class="form-text text-muted">{{$message}}</small>

                                @enderror
                                @error("password")
                                <small id="passHelp" class="form-text text-muted">{{$message}}</small>

                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="window.location.href='instructions.html';">
                        <h4>Login</h4>
                    </button>
                    <form>

                    <small id="registerHelp" class="mt-3 form-text text-muted">Not Registered? <a href="{{route('register')}}">Register here</a></small>
                </div>
            </div>
        </div>

    </div>

@endsection

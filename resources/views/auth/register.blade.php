@extends("auth.section.section")
@section("content")
    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <h1 class="display-1 bold color_white content__title">REGISTER<span class="vim-caret">&nbsp;</span></h1>
                    <p class="text-grey text-spacey hackerFont lead mb-5">
                        Join the community and be part of the future of the information security industry.
                    </p>
                    <div class="row  hackerFont">
                        <div class="col-md-6">
                            <div class="form-group">
                                <form action="{{route("register")}}" method="post">
                                    @csrf
                                <input type="text" class="form-control" id="reciept_id"  name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="team_name" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">

                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                            <div class="custom-control custom-checkbox my-4">
                                <input type="checkbox" class="custom-control-input" id="solemnly-swear">
                                @error("name")
                                <small id="passHelp" class="form-text text-muted">{{$message}}</small>

                                @enderror
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
                <div class="col-xl-12">
                    <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="window.location.href='login.html';">
                        <h4>Register</h4>
                    </button>
                    </form>
                    <small id="registerHelp" class="mt-2 form-text text-muted">Already Registered? <a href="{{route("login")}}">Login here</a></small>
                </div>
            </div>
        </div>
    </div>

@endsection

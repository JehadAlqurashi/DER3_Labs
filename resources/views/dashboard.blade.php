@extends("auth.section.section")
@section("content")


<div class="jumbotron bg-transparent mb-0 pt-0 radius-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12  text-center">
                <h1 class="display-1 bold color_white content__title">CHALLENGES<span class="vim-caret">&nbsp;</span></h1>
                <p class="text-grey text-spacey hackerFont lead mb-5">
                    Its time to show the world what you can do!
                </p>
            </div>
        </div>
        <div class="row hackerFont">
            @foreach($chall as $c)
            <div class="col-md-4 mb-3">
                <div class="card category_{{strtolower($c->category)}}">
                    <div class="card-header" data-target="#problem_id_{{$c->id}}" data-toggle="collapse" aria-expanded="false" aria-controls="problem_id_{{$c->id}}">
                   {{$c->title}}{{--      <span class="badge">solved</span> <span class="badge">{{$c->score}}</span>--}}
                    </div>
                    <div id="problem_id_{{$c->id}}" class="collapse card-body">
                        <blockquote class="card-blockquote">
                            <div style="display: flex;">
                                </span> &nbsp;<span class="color_danger">Difficulty:</span><p class="{{$c->difficulty}}">{{$c->difficulty}}</p>
                                <div class="pl-2"><canvas style="width:80px;height:20px" id="problem_id_{{$c->id}}_chart"></canvas></div>
                            </div>
                            <p> {{$c->description}}
                            </p>
                            <a target="_blank" href="{{route("redirect",$c->id)}}" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2"></span>Challenge</a>
                            <a href="#hint" data-toggle="modal" data-target="#hint{{$c->id}}" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                            <div class="input-group mt-3">
                                <form action="{{route("submit.flag")}}" method="post" style="inline" >
                                    @csrf
                                <input type="text" name="flag" class="form-control" placeholder="DER3{}" aria-label="Enter Flag" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button id="submit_p1" class="btn btn-outline-secondary" >Go!</button>
                                    </div>
                                </form>

                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
                <div class="modal fade" id="hint{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="hint label" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                {{$c->hint}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row hackerFont justify-content-center mt-5">
            <div class="col-md-12">
                Chart Difficulties:
                <span style="color:#17b06b">Easy,</span>
                <span style="color:#ffce56">Medium,</span>
                <span style="color:#ef121b">Hard,</span>
                <br><br>Challenge Types:
                <span class="p-1" style="background-color:#ef121b94">Web</span>
                <span class="p-1" style="background-color:#36a2eb94">Osint</span>
                <span class="p-1" style="background-color:#9966FF94">Cryptography</span>
            </div>
        </div>
    </div>
    <script>
        var dataset = [
            [41, 42, 43, 44, 45, 0], // keep the zero here
            [10, 9, 8, 7, 6, 0],
            [21, 16, 23, 1, 15, 0],
            [71, 12, 13, 17, 25, 0],
            [31, 5, 23, 24, 10, 0],
            [11, 2, 13, 41, 15, 0],
            [31, 5, 23, 24, 10, 0],
            [11, 2, 13, 41, 15, 0],
        ]

        function getBarChartData(i) {
            return barChartData = {
                labels: ['Easy1', 'Easy2', 'Medium3', 'Hard4', 'Hard5'],
                datasets: [{
                    label: 'Dataset 1',
                    backgroundColor: [
                        '#17b06b', '#17b06b', '#ffce56', '#ef121b', '#ef121b'
                    ],
                    borderColor: [
                        '#17b06b', '#17b06b', '#ffce56', '#ef121b', '#ef121b'
                    ],
                    borderWidth: 1,
                    data: dataset[i - 1]
                }]

            };
        }

        window.onload = function() {
            var numcharts = 8;
            for (let i = 1; i <= numcharts; i++) {
                var ctx = document.getElementById('problem_id_' + i + '_chart').getContext('2d');
                window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: getBarChartData(i),
                    options: {
                        tooltips: {
                            enabled: false,
                        },
                        responsive: false,
                        legend: {
                            display: false,
                        },
                        scales: {
                            yAxes: [{
                                display: false
                            }],
                            xAxes: [{
                                display: false
                            }]
                        }
                    }
                });
                myBar.canvas.parentNode.style.width = '80px';
                myBar.canvas.parentNode.style.height = '20px';
            }
        };
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@endsection

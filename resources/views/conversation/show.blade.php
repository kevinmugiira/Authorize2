@extends('layouts.app')



@section('content')


    <h3 class="text-red-500"><a href="/conversations"> Back<- </a></h3>
    <div class="col-span-6 pl-3">
        <hr>
        @foreach($versi as $vers)
            <h1><strong>{{$vers->title}}</strong></h1>
                   <h2>Here is the cup</h2>

            <p class="text-muted text-gray-600">Posted by: {{$vers->user->name}}</p>

            <p>{{$vers->body}}</p>


        @endforeach
        <hr>

        <div class="">
            <div class="reply pl-3">
                <ul class="list-group">

                    @foreach($vers->reply as $rep)
                        <li class="list-group-item">

                            <div>

                                <header style="display: flex; justify-content: space-between">
                                    <p class="n-0">
                                        <strong>
                                            User said...&nbsp;
                                        </strong>

                                        @if($rep->isBest())
                                            <span style="color: green">Best Reply!!</span>
                                        @endif

                                    </p>
                                </header>
                            </div>

                            <h6>{{$rep->body}}</h6>


                        </li>


                    @can('update', $rep)
                        <form method="POST" action="/best-reply/{{$rep->id}}">
                            @csrf

                            <button type="submit"
                                    class="btn p-0 text-gray-500"
                            >Best Reply?</button>
                        </form>

                        @endcan
                    @endforeach
                </ul>
            </div>



        </div>
    </div>




            <div class="card pl-3">
                <div class="card-block">
                    <form method="POST" action="/conversation/{{$vers->id}}">

                        @csrf
                        <div class="form-group">
                                <textarea name="body" placeholder="Your reply here." class="form-control" required>

                                </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Reply</button>
                        </div>
                    </form>
                </div>
            </div>





@endsection

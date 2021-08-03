@extends('layouts.app')



@section('content')


    <h3><a href="/conversations"> Back</a></h3>
    <div class="col-span-6">
        <hr>
        @foreach($versi as $vers)
            <h1>{{$vers->title}}</h1>

            <p class="text-muted">Posted by {{$vers->user->name}}</p>

            <p>{{$vers->body}}</p>

        @can('update_conversation', $versi)
            <form method="POST" action="best-replies/{{$reply->id}}">
                <button type="submit"
                        class="btn p-0 text-gray-500"
                >Best Reply?</button>
            </form>

        @endcan
            <hr>
            <hr>


        @endforeach

    </div>

    <div class="reply">
        <ul class="list-group">

            @foreach($vers->reply as $rep)
                <li class="list-group-item">

                    <div>
                        <p class="n-0">
                            <strong>


                                User said...&nbsp;
                            </strong>
                        </p>
                    </div>

                    <h6>{{$rep->body}}</h6>

                </li>
            @endforeach

        </ul>
    </div>


    <div class="card">
                <div class="card-block">
                    <form method="POST" action="/conversation/{{$vers->id}}">

                        @csrf
                        <div class="form-group">
                                <textarea name="body" placeholder="Your comment here." class="form-control" required>

                                </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Comment</button>
                        </div>
                    </form>
                </div>
            </div>





@stop

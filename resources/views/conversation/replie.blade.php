@extends('layouts.app')



@section('content')


    <div class="reply">
        <ul class="list-group">

            @foreach($vers->reply as $rep)
                <li class="list-group-item">

                    <div>
                        <p class="n-0">
                            <strong>

                                {{$rep->user->name}} said...&nbsp;
                            </strong>
                        </p>
                    </div>

                    <h6>{{$rep->body}}</h6>

                </li>
            @endforeach

        </ul>
    </div>

    @stop

@extends('layouts.app')



@section('content')


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
            @endforeach


            @can('update', $rep)
                <form method="POST" action="/best-reply/{{$rep->id}}">
                    @csrf

                    <button type="submit"
                            class="btn p-0 text-gray-500"
                    >Best Reply?</button>
                </form>

            @endcan

        </ul>
    </div>



@stop

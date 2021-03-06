@extends('app')

@section('content')
    <h1>All messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->subject}}</h3>
            <p>{{$el->email}}</p>
            <p><small>{{$el->created_at}}</small></p>
            <a href="{{route('contact-data-one', $el->id)}}" class="btn btn-warning">Детальнее</a>
        </div>
    @endforeach
@endsection

@section('title')
    Messages
@endsection

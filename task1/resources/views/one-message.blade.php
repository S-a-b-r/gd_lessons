@extends('app')

@section('content')
    <h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <p>{{$data->email}}</p>
            <p>{{$data->message}}</p>
            <p><small>{{$data->created_at}}</small></p>
            <a href="{{route('contact-update', $data->id)}}" class="btn btn-primary">Редактировать</a>
            <a href="{{route('contact-delete', $data->id)}}" class="btn btn-danger">Удалить</a>
        </div>
@endsection

@section('title')
    {{$data->subject}}
@endsection

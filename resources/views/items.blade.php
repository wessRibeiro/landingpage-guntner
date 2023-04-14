@extends('layouts.app')

@section('content')
    @foreach($items as $item)
        <a href="{{route('items',$item->id)}}">{{$item->name}}</a>
    @endforeach
@endsection

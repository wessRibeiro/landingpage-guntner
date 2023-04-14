@extends('layouts.app')

@section('content')
    @foreach($categories as $category)
        <a href="{{route('subcategories',$category->id)}}">{{$category->name}}</a>
    @endforeach
@endsection

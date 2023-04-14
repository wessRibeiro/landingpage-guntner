@extends('layouts.app')

@section('content')
    @foreach($subcategories as $subcategory)
        <a href="{{route('items',$subcategory->id)}}">{{$subcategory->name}}</a>
    @endforeach
@endsection

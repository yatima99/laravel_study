@extends('layouts.default')

@section('title', '画像アップロードの表示')
@section('content')
    @if(session()->has('success'))
        <p>{{ session()->get('success') }}</p>
    @endif
    <img src="{{ asset('storage/photos/'. $fileName) }}" alt="">
@endsection

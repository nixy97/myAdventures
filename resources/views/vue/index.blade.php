@extends('welcome')

@section('content')
    <h1>This is a vue component</h1>
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="/js/app.js"></script>
@endsection
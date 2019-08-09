<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<script>window.Laravel = { csrfToken: '{{csrf_token()}}' }</script>--}}
    <title>myAdventures</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <br>
    {{--<div id="app">--}}
        {{--<div class="container">--}}
            {{--<h2>Welcome to myAdventure</h2>--}}
            {{--<home></home>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="panel-body table-responsive">
        <router-view name="Home"></router-view>
    </div>


    <section id="app">

    </section>

<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

<script src = "{{asset('js/app.js')}}"></script>

</body>
</html>

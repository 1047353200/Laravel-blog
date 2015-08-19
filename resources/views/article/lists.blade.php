{{--<!DOCTYPE html>--}}
{{--<html xmlns="http://www.w3.org/1999/html">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Article lists page</title>--}}
    {{--</head>--}}
{{--<body>--}}

{{--<h1>{{$title}}</h1>--}}
{{--<h2>{{$title2}}</h2>--}}
{{--<h2>{!!$title2!!}</h2>--}}
{{--<h2>{!!$title3!!}</h2>--}}

{{--<h3>这是文章列表页面</h3>--}}
{{--<h3>{{$intro}}</h3>--}}
{{--</body>--}}
{{--</html>--}}

@extends('app')
@section('content')
<h1>{!! $title !!}</h1>
<p>{{ $intro }}</p>
@if($first=='jelly')
<h1>{{$first}}</h1>
@else
<h1>{{$last}}</h1>
@endif
@unless($first=='yellybool')
<h1>{{$first}}</h1>
@endunless
@foreach($third as $name)
<p>{{$name}}</p>
@endforeach
@foreach($forth as $name)
<p>{{$name}}</p>
@endforeach
@endsection
@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h5>
        Categories:
    </h5>
    <pre>
        {{ $categories }}
    </pre>
    <h5>
        Templates:
    </h5>
    <pre>
        {{ $templates }}
    </pre>
@stop

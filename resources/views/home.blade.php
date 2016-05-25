@extends('layouts.default')

@section('pageTitle')
    <h1>Google News Viewer</h1>
@stop

@section('content')
    <section>
    @foreach ($items as $item)
        <article>
        <!-- <h2>{{ $item->get_title() }}</h2> -->
        {!! $item->get_description() !!}
        
        </article>
    @endforeach
    </section>
@stop

@extends('layouts.default')

@section('pageTitle')
    <h1>{{ $title }}</h1>
@stop

@section('content')
    <section id="application">
    @foreach ($items as $item)
        <article class="article">{!! $item->get_description() !!}</article>
    @endforeach
    </section>
@stop

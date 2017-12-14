@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>UPDATE AN ALBUM</h1>
    {!! Form::open(['url' => '/albums/update-action/']) !!}
        {{ Form::hidden('id', $album->id) }}
        {{ Form::text('title', $album->title) }}
        {{{ Form::select('artist', $artist, $album->artist->id) }}}
        {{ Form::number('release_year', $album->release_year) }}
        {{ Form::text('genre', $album->genre) }}
        {{{ Form::select('label[]', $labels, $album->labels, ['size' => count($labels), 'multiple' => true]) }}}
        {{{ Form::select('support', $supports, $album->support->id) }}}
        {{ Form::submit('CONFIRM',  ['class' => 'table__btn--style table__btn--edit']) }}
    {!! Form::close() !!}
@endsection
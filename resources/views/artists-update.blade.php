@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>UPDATE AN ARTIST</h1>
    {!! Form::open(['url' => '/artists/update-action/']) !!}
        {{ Form::hidden('id', $artist->id) }}
        {{ Form::text('name', $artist->name) }}
        {{ Form::number('birthyear', $artist->birthyear) }}
        {{ Form::text('country', $artist->country) }}
        {{ Form::submit('CONFIRM',  ['class' => 'table__btn--style table__btn--edit']) }}
    {!! Form::close() !!}
@endsection
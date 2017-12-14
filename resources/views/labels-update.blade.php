@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>UPDATE A LABEL</h1>
    {!! Form::open(['url' => '/labels/update-action/']) !!}
        {{ Form::hidden('id', $label->id) }}
        {{ Form::text('name', $label->name) }}
        {{ Form::submit('CONFIRM',  ['class' => 'table__btn--style table__btn--edit']) }}
    {!! Form::close() !!}
@endsection
@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>UPDATE AN ARTIST</h1>
    @if ($errors->any())
        <div class="errors--display">
            <i class="fa fa-exclamation-triangle fa-2x orange" aria-hidden="true"></i>
            <ul class="errors__list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => '/artists/update-action/']) !!}
        {{ Form::hidden('id', $artist->id) }}
    <div class="add__form">
         <div class="update__cards">
            <div class="cards_label">
                <label name='label'>Name :</label>
            </div>
            <div class="cards__input">
                {{ Form::text('name', $artist->name) }}
            </div>
        </div>
        <div class="update__cards">
            <div class="cards_label">
                <label name='label'>Birthyear :</label>
            </div>
            <div class="cards__input">
                {{ Form::number('birthyear', $artist->birthyear) }}
            </div>
        </div>
        <div class="update__cards">
            <div class="cards_label">
                <label name='label'>Country :</label>
            </div>
            <div class="cards__input">
                {{ Form::text('country', $artist->country) }}
            </div>
        </div>
    </div>
    <div class="update__button">
        {{ Form::submit('SAVE',  ['class' => 'update__button--style btn--update']) }}
    </div>
    {!! Form::close() !!}
@endsection
@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>UPDATE AN ALBUM</h1>
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
    {!! Form::open(['url' => '/albums/update-action/']) !!}
        {{ Form::hidden('id', $album->id) }}
        <div class="add__form">
            <div class="update__cards">
                <div class="cards_label">
                    <label name='label'>Title :</label>
                </div>
                <div class="cards__input">
                    {{ Form::text('title', $album->title) }}
                </div>
            </div>
            <div class="update__cards">
                <div class="cards_label">
                    <label name='label'>Artist :</label>
                </div>
                <div class="cards__input">
                    <div class="select-style select-style-bg-arrow">
                        {{{ Form::select('artist', $artist, $album->artist->id) }}}
                    </div>
                </div>
            </div>
            <div class="update__cards">
                <div class="cards_label">
                    <label name='label'>Release year :</label>
                </div>
                <div class="cards__input">
                    {{ Form::number('release_year', $album->release_year) }}
                </div>
            </div>
            <div class="update__cards">
                <div class="cards_label">
                    <label name='label'>Genre :</label>
                </div>
                <div class="cards__input">
                    {{ Form::text('genre', $album->genre) }}
                </div>
            </div>
            <div class="update__cards">
                <div class="cards_label">
                    <label name='label'>Label :</label>
                </div>
                <div class="cards__input">
                    <div class="select-style select-style-bg-noarrow">
                        {{{ Form::select('label[]', $labels, $album->labels, ['size' => count($labels), 'multiple' => true]) }}}
                    </div>
                </div>
            </div>
            <div class="update__cards">
                <div class="cards_label">
                    <label name='label'>Support :</label>
                </div>
                <div class="cards__input">
                    <div class="select-style select-style-bg-arrow">
                        {{{ Form::select('support', $supports, $album->support->id) }}}
                    </div>
                </div>
            </div>
        </div>
        <div class="update__button">
            {{ Form::submit('SAVE',  ['class' => 'update__button--style btn--update']) }}
        </div>

    {!! Form::close() !!}
@endsection
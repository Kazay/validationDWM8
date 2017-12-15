@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>ADD AN ALBUM</h1>
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
        <div class="add__form">
            {!! Form::open(['url' => '/albums/add-action']) !!}
                <div class="update__cards">
                    <div class="cards_label">
                        <label name='label'>Title :</label>
                    </div>
                    <div class="cards__input">
                        {{ Form::text('title', '', ['placeholder' => 'Title']) }}
                    </div>
                </div>
                <div class="update__cards">
                    <div class="cards_label">
                        <label name='label'>Artist :</label>
                    </div>
                    <div class="cards__input">
                        <div class="select-style">
                            {{{ Form::select('artist', $artists, $artists->id) }}}
                        </div>
                    </div>
                </div>
                <div class="update__cards">
                    <div class="cards_label">
                        <label name='label'>Release year :</label>
                    </div>
                    <div class="cards__input">
                        {{ Form::text('release_year', '', ['placeholder' => 'Release year']) }}
                    </div>
                </div>
                <div class="update__cards">
                    <div class="cards_label">
                        <label name='label'>Genre :</label>
                    </div>
                    <div class="cards__input">
                        {{ Form::text('genre', '', ['placeholder' => 'Genre']) }}
                    </div>
                </div>
                <div class="update__cards">
                    <div class="cards_label">
                        <label name='label'>Label :</label>
                    </div>
                    <div class="cards__input">
                        <div class="select-style">
                            {{{ Form::select('label[]', $labels, $labels, ['size' => count($labels), 'multiple' => true]) }}}
                        </div>
                    </div>
                </div>
                <div class="update__cards">
                    <div class="cards_label">
                        <label name='label'>Support :</label>
                    </div>
                    <div class="cards__input">
                        <div class="select-style">
                            {{{ Form::select('support', $supports, $supports->id) }}}
                        </div>
                    </div>
                </div>
                <div class="update__button">
                    {{ Form::submit('ADD AN ALBUM',  ['class' => 'btn--update']) }}
                </div>
                
            {!! Form::close() !!}
        </div>
@endsection
@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>ALBUMS LIST</h1>

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
    <table class="table--style">
        <thead>
            <th>Title</th>
            <th>Artist</th>
            <th>Release Year</th>
            <th>Genre</th>
            <th>Label</th>
            <th>Support</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach($albums as $album)
                <tr>
                    <td>{{ $album->title }}</td>
                    <td>{{ $album->artist->name }}</td>
                    <td>{{ $album->release_year }}</td>
                    <td>{{ $album->genre }}</td>
                    <td>
                        @foreach ($album->label as $label)
                        <span>{{ $label->name }}<span>
                        @endforeach
                    </td>
                    <td>{{ $album->support->name }}</td>
                    <td><a href="albums/update/{{$album->id}}"><input type='button' class='table__button--style btn--update' value='EDIT'></a></td>
                    {!! Form::open(['url' => '/albums/delete/' . $album->id]) !!}
                        <td>{{ Form::submit('DEL',  ['class' => 'table__button--style btn--delete']) }}</td>
                    {!! Form::close() !!}  
                </tr>
            @endforeach
        </tbody>
    </table>
    
        <div class="update__button">
            <button id="display-addform" type="button" class="update__button--style btn--add">ADD AN ALBUM</button>
            <button id="hide-addform" type="button" class="update__button--style btn--delete hidden">CANCEL</button>
        </div>
        <div class="add__form hidden">
            {!! Form::open(['url' => '/albums/add']) !!}
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
                        <div class="select-style select-style-bg-arrow">
                            {{{ Form::select('artist', $artists, $album->artist->id) }}}
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
                <div class="update__button">
                    {{ Form::submit('SAVE',  ['class' => 'update__button--style btn--update']) }}
                </div>
                
            {!! Form::close() !!}
        </div>
        
@endsection
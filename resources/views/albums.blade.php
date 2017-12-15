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
            <tr>
                {!! Form::open(['url' => '/albums/add']) !!}
                    <td>{{ Form::text('title', '', ['placeholder' => 'Title']) }}</td>
                    
                        <td>{{{ Form::select('artist', $artists, $album->artist->id) }}}</td>
                    
                    <td>{{ Form::text('release_year', '', ['placeholder' => 'Release year']) }}</td>
                    <td>{{ Form::text('genre', '', ['placeholder' => 'Genre']) }}</td>
                    
                        <td>{{{ Form::select('label[]', $labels, $album->labels, ['size' => count($labels), 'multiple' => true]) }}}</td>
                    
                    <td>{{{ Form::select('support', $supports, $album->support->id) }}}</td>
                    <td>{{ Form::submit('ADD',  ['class' => 'table__button--style btn--add']) }}</td>
                    <td></td>
                {!! Form::close() !!}
            </tr>
        </tbody>
    </table>
@endsection
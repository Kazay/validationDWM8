@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>ARTISTS LIST</h1>
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
            <th>Name</th>
            <th>Birthyear</th>
            <th>Country</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->birthyear }}</td>
                    <td>{{ $artist->country }}</td>
                    <td><a href="artists/update/{{$artist->id}}"><input type='button' class='table__button--style btn--update' value='EDIT'></a></td>
                    {!! Form::open(['url' => '/artists/delete/' . $artist->id]) !!}
                        <td>{{ Form::submit('DEL',  ['class' => 'table__button--style btn--delete']) }}</td>
                    {!! Form::close() !!}  
                </tr>
            @endforeach
            <tr>
                {!! Form::open(['url' => '/artists/add']) !!}
                    <td>{{ Form::text('name', '', ['placeholder' => 'Name']) }}</td>
                    <td>{{ Form::text('birthyear', '', ['placeholder' => 'Birthyear']) }}</td>
                    <td>{{ Form::text('country', '', ['placeholder' => 'Country']) }}</td>
                    <td>{{ Form::submit('ADD',  ['class' => 'table__button--style btn--add']) }}</td>
                    <td></td>
                {!! Form::close() !!}
            </tr>
        </tbody>
    </table>
@endsection
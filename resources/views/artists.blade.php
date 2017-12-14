@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>ARTISTS LIST</h1>
    <table class="table--style">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Birthyear</th>
            <th>Country</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($artists as $artist)
                <tr>
                    <td>{{ $artist->id }}</td>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->birthyear }}</td>
                    <td>{{ $artist->country }}</td>
                    <td><a href="artists/update/{{$artist->id}}" class='table__btn--style table__btn--edit'>UPDATE</a></td>
                    {!! Form::open(['url' => '/artists/delete/' . $artist->id]) !!}
                        <td>{{ Form::submit('DELETE',  ['class' => 'table__btn--style table__btn--delete']) }}</td>
                    {!! Form::close() !!}  
                </tr>
            @endforeach
            <tr>
                {!! Form::open(['url' => '/artists/add']) !!}
                    <td>1</td>
                    <td>{{ Form::text('name', '', ['placeholder' => 'Name']) }}</td>
                    <td>{{ Form::number('birthyear', '', ['placeholder' => 'Birthyear']) }}</td>
                    <td>{{ Form::text('country', '', ['placeholder' => 'Country']) }}</td>
                    <td>{{ Form::submit('ADD',  ['class' => 'table__btn--style table__btn--add']) }}</td>
                {!! Form::close() !!}
            </tr>
        </tbody>
    </table>
@endsection
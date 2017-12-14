@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>STOCKS</h1>
    <table class="table--style">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Release Year</th>
            <th>Support</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Update</th>
        </thead>
        <tbody>
            @foreach($albums as $album)
                <tr>
                    {!! Form::open(['url' => '/stocks/update/' . $album->id]) !!}
                        {{ Form::hidden('id', $album->id) }}
                        <td>{{ $album->id }}</td>
                        <td>{{ $album->title }}</td>
                        <td>{{ $album->artist->name }}</td>
                        <td>{{ $album->release_year }}</td>
                        <td>{{ $album->support->name }}</td>
                        <td>{{ Form::number('stock', $album->stock) }}</td>
                        <td>{{ Form::number('price', $album->price) }}</td>
                        <td>{{ Form::submit('CONFIRM',  ['class' => 'table__btn--style table__btn--edit']) }}</td>
                    {!! Form::close() !!}  
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
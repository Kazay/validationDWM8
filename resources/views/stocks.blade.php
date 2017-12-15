@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>STOCKS</h1>
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
            <th>Support</th>
            <th>Stocks</th>
            <th>Price (EUR)</th>
            <th>Update</th>
        </thead>
        <tbody>
            @foreach($albums as $album)
                <tr>
                    {!! Form::open(['url' => '/stocks/update/' . $album->id]) !!}
                        {{ Form::hidden('id', $album->id) }}
                        <td>{{ $album->title }}</td>
                        <td>{{ $album->artist->name }}</td>
                        <td>{{ $album->release_year }}</td>
                        <td>{{ $album->support->name }}</td>
                        <td>{{ Form::number('stock', $album->stock) }}</td>
                        <td>{{ Form::number('price', $album->price, ['step' => '0.01']) }}</td>
                        <td>{{ Form::submit('SAVE',  ['class' => 'table__button--style btn--update']) }}</td>
                    {!! Form::close() !!}  
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
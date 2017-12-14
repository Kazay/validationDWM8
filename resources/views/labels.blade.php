@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>LABELS LIST</h1>
    <table class="table--style">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($labels as $label)
                <tr>
                    <td>{{ $label->id }}</td>
                    <td>{{ $label->name }}</td>
                    <td><a href="labels/update/{{$label->id}}" class='table__btn--style table__btn--edit'>UPDATE</a></td>
                    {!! Form::open(['url' => '/labels/delete/' . $label->id]) !!}
                        <td>{{ Form::submit('DELETE',  ['class' => 'table__btn--style table__btn--delete']) }}</td>
                    {!! Form::close() !!}  
                </tr>
            @endforeach
                <tr>
                    {!! Form::open(['url' => '/labels/add']) !!}
                        <td>1</td>
                        <td>{{ Form::text('name', '', ['placeholder' => 'name']) }}</td>
                        <td>{{ Form::submit('ADD',  ['class' => 'table__btn--style table__btn--add']) }}</td>
                    {!! Form::close() !!}
                </tr>
        </tbody>
    </table>
@endsection
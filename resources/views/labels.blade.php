@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>LABELS LIST</h1>
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
    <table id="table-list" class="table--style">
        <thead>
            <th>Name</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach($labels as $label)
                <tr>
                    <td>{{ $label->name }}</td>
                    <td><a href="labels/update/{{$label->id}}"><input type='button' class='table__button--style btn--update' value='EDIT'></a></td>
                    {!! Form::open(['url' => '/labels/delete/' . $label->id]) !!}
                        <td>{{ Form::submit('DEL',  ['class' => 'table__button--style btn--delete']) }}</td>
                    {!! Form::close() !!}  
                </tr>
            @endforeach
                <tr>
                    {!! Form::open(['url' => '/labels/add']) !!}
                        <td>{{ Form::text('name', '', ['placeholder' => 'name']) }}</td>
                        <td>{{ Form::submit('ADD',  ['class' => 'table__button--style btn--add']) }}</td>
                        <td></td>
                    {!! Form::close() !!}
                </tr>
        </tbody>
    </table>

@endsection
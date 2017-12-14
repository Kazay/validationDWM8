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
                    <td><a href="#"><i class="fa fa-pencil fa-2x table__btn--style table__btn--edit" aria-hidden="true"></i></a></td>
                    <td><a href="#"><i class="fa fa-trash fa-2x table__btn--style table__btn--delete" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
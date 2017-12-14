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
                    <td><a href="#"><i class="fa fa-pencil fa-2x table__btn--style table__btn--edit" aria-hidden="true"></i></a></td>
                    <td><a href="#"><i class="fa fa-trash fa-2x table__btn--style table__btn--delete" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
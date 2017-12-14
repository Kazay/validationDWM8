@extends('layouts.base')

@section('title', 'Musicstore')

@section('nav')
    @include('layouts.nav')
@endsection

@section('main')
    <h1>ALBUMS LIST</h1>
    <table class="table--style">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Release Year</th>
            <th>Genre</th>
            <th>Label</th>
            <th>Support</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($albums as $album)
                <tr>
                    <td>{{ $album->id }}</td>
                    <td>{{ $album->title }}</td>
                    <td>{{ $album->artist->name }}</td>
                    <td>{{ $album->release_year }}</td>
                    <td>{{ $album->genre }}</td>
                    <td>
                        @foreach ($album->label as $label)
                        <span>{{ $label->name }}<span>
                        @endforeach
                    </td>
                    <td>{{ $album->support->type }}</td>
                    <td><a href="#"><i class="fa fa-pencil fa-2x table__btn--style table__btn--edit" aria-hidden="true"></i></a></td>
                    <td><a href="#"><i class="fa fa-trash fa-2x table__btn--style table__btn--delete" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
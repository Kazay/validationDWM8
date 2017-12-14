@extends('layouts.base')

@section('title', 'Musicstore')
@section('main')
    <div class="home--size">
        <h1>Musicstore stock management</h1>
        <div class="home__nav">
            <div class="home__cards">
                <div class="thumbnail">
                    <a href="/stocks"><i class="fa fa-list fa-3x" aria-hidden="true"></i></a>
                </div>
                <div class="cards__title">
                    <h2>STOCKS</h2>
                    <p>Manage your stocks</p>
                </div>
            </div>
            <div class="home__cards">
                <div class="thumbnail">
                    <a href="/albums"><i class="fa fa-music fa-3x" aria-hidden="true"></i></a>
                </div>
                <div class="cards__title">
                    <h2>ALBUMS</h2>
                    <p>Manage your albums</p>
                </div>
            </div>
            <div class="home__cards">
                <div class="thumbnail">
                    <a href="/artists"><i class="fa fa-users fa-3x" aria-hidden="true"></i></a>
                </div>
                <div class="cards__title">
                    <h2>ARTISTS</h2>
                    <p>Manage artists list</p>
                </div>
            </div>
            <div class="home__cards">
                <div class="thumbnail">
                    <a href="/labels"><i class="fa fa-building fa-3x" aria-hidden="true"></i></a>
                </div>
                <div class="cards__title">
                    <h2>Label</h2>
                    <p>Manage your  labels</p>
                </div>
            </div>
        </div>
    </div>
@endsection
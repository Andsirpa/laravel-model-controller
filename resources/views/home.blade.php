@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Movie List</h1>

            {{-- per ogni film stampo una lista di dati --}}
            @foreach ($movies as $movie)
                <ul>
                    <li>
                        <strong>ID</strong>
                        {{ $movie['id'] }}
                    </li>
                    <li>
                        <strong>Local Title</strong>
                        {{ $movie['title'] }}
                    </li>
                    <li>
                        <strong>Original Title</strong>
                        {{ $movie['original_tiltle'] }}
                    </li>
                    <li>
                        <strong>Nationality</strong>
                        {{ $movie['nationality'] }}
                    </li>
                    <li>
                        <strong>Release</strong>
                        {{ $movie['date'] }}
                    </li>
                    <li>
                        <strong>Vote</strong>
                        {{ $movie['vote'] }}
                    </li>

                </ul>
                @unless ($loop->last)
                    <hr>
                @endunless
            @endforeach

        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('message_trash'))
                <div class="alert alert-success">
                    {{ session('message_trash') }}
                </div>
            @endif
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="https://hips.hearstapps.com/hmg-prod/images/ville-di-lusso-piu-belle-del-mondo-oggetto-editoriale-800x600-1528889075.jpg" alt="" class="w-25 me-2">
                            <div class="mx-1">
                                <h3>
                                    {{ Auth::user()->name }} {{ Auth::user()->surname }}    
                                </h3>
                                <h5>{{ Auth::user()->birth_date }}</h5>
                                <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
                            </div>    
                        </div>
                        <div>
                            <a href="{{ route('user.messages') }}" class="btn btn-info btn-sm m-1">Visualizza Messaggi Ricevuti</a>
                            <a href="{{ route('apartments.create') }}" class="my-1 btn btn-success btn-sm">Aggiungi appartamento</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="d-flex">
                            <div class="col-12">
                                <h1>
                                    Pagina utente
                                </h1>
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($apartments as $apartment)
                                <article class="col-4 text-center">
                                    <div class="card shadow" style="w-100">
                                        <img class="card-img-top" src="{{ $apartment->Img }}" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                {{ $apartment->Nome }}
                                            </h5>
                                            <p class="card-text">
                                                <br> Stanze: {{ $apartment->Stanze }}
                                                <br> Letti: {{ $apartment->Letti }}
                                                <br> Bagni: {{ $apartment->Bagni }}
                                                <br> Prezzo: &euro;{{ $apartment->Prezzo }}
                                                <br> Metri quadrati: {{ $apartment->Metri_quadrati }} mq
                                                <br> Indirizzo: {{ $apartment->Indirizzo }}
                                            </p>
                                            <a href="{{ route('apartments.show', $apartment) }}" class="btn btn-primary btn-sm my-1">Mostra dettagli</a>
                                            <a href="{{ route('apartments.edit', $apartment) }}" class="btn btn-warning btn-sm my-1">Modifica</a>
                                            <form action="{{ route('apartments.destroy', $apartment) }}" method="POST" class="d-inline-block delete-form mx-2" data_apartment_id="{{ $apartment->id }}" data_apartment_name="{{ $apartment->Nome }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                            </form>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

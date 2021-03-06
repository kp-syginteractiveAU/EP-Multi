@extends('competition.layouts.master')
@section('content')
      <div class="album py-5 bg-light">
        <div class="container">
            <p>{{ $competition->description }}</p>
            <div class="row">
                @foreach ($entries as $entry)
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <a href="/{{ $competition->slug }}/{{ $entry->id }}"><img class="card-img-top" src="{{ asset('storage/images/' . $entry->url) }}" alt=""></a>
                    <div class="card-body">
                      <p class="card-text">{{ $entry->firstname }} {{ $entry->lastname }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $entry->created_at->diffForHumans() }}</small>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

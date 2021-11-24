@extends('layouts.app')

@section('page_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>
                Dashboard normal user !!
            </h1>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach ($plats as $plat)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <img class="card-img-top" src="{{ asset($plat->chemin_photo) }}" alt="plat"
                                        style="height: 200px;">
                                </div>
                                <div class="card-body">
                                    <p class="list-item-heading mb-4">
                                        {{ Str::limit($plat->description, 100, "...") }}
                                    </p>
                                    <footer>
                                        <p class="text-muted text-small mb-0 font-weight-light">
                                            {{ $plat->date_ajout }}
                                        </p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
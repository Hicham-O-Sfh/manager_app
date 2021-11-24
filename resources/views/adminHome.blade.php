@extends('layouts.app')

@section('page_content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>
                        <u>
                            Gestionnaire de l'admin
                        </u>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end mb-2">
                            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#ajout_plat">
                                Ajouter un plat
                            </button>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripped">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="vertical-align: middle;">
                                                Actions
                                            </th>
                                            <th style="vertical-align: middle;">
                                                Photo
                                            </th>
                                            <th style="vertical-align: middle;">
                                                libelle
                                            </th>
                                            <th style="vertical-align: middle;">
                                                Categorie
                                            </th>
                                            <th style="vertical-align: middle;">
                                                ingrédients
                                            </th>
                                            <th style="vertical-align: middle;">
                                                description
                                            </th>
                                            <th style="vertical-align: middle;">
                                                date d'ajout
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plats as $plat)
                                        <tr class="text-center">
                                            <td style="vertical-align: middle;">
                                                <form action="{{ route('supprimer_plat' ,['plat' => $plat->id ]) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        data-toggle="tooltip" title="Supprimer">
                                                        <i class="glyph-icon simple-icon-trash"></i>
                                                    </button>
                                                </form>
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#modifier_plat">
                                                    <i class="glyph-icon iconsminds-pen" data-toggle="tooltip"
                                                        title="Modifier"></i>
                                                </button>
                                            </td>
                                            <td>
                                                <img src="{{ $plat->chemin_photo }}" alt=".."
                                                    style="height: 100px;width:100px;border-radius: 50%;">
                                            </td>
                                            <td style="vertical-align: middle;">
                                                {{ $plat->libelle }}
                                            </td>
                                            <td style="vertical-align: middle;">
                                                {{ $plat->categorie->libelle }}
                                            </td>
                                            <td style="vertical-align: middle;">
                                                {{ $plat->ingredients }}
                                            </td>
                                            <td style="vertical-align: middle;">
                                                {{ $plat->description }}
                                            </td>
                                            <td style="vertical-align: middle;">
                                                {{ $plat->date_ajout }}
                                            </td>
                                        </tr>
                                        @include('_modifier_plat')
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('_ajout_plat')
@endsection
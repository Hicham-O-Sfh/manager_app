@extends('layouts.app')

@section('page_content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Menu de l'admin
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>
                                    libelle
                                </th>
                                <th>
                                    ingrédient
                                </th>
                                <th>
                                    description
                                </th>
                                <th>
                                    date d'ajout
                                </th>
                                <th>
                                    Categorie
                                </th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
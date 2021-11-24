<div class="modal fade" id="modifier_plat-{{ $plat->id }}" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Modification d'un plat (existant)
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('modifier_plat', ['plat' => $plat->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="photo">Photo :</label>
                                <input type="file" name="photo" id="photo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="libelle">Libelle :</label>
                                <input type="text" name="libelle" id="libelle" class="form-control"
                                    value="{{ $plat->libelle }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categorie">Catégorie :</label>
                                <select name="categorie" id="categorie" class="form-control" required>
                                    <option value disabled selected>
                                        -Sélectionner-
                                    </option>
                                    @foreach ($categories_plats as $categorie)
                                    <option value="{{ $categorie->id }}" {{ $plat->categorie->id == $categorie->id ?
                                        "selected" : "" }}>
                                        {{ $categorie->libelle }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea name="description" id="description" rows="4" class="form-control"
                                    required>{{ $plat->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ingredients">Ingrédients :</label>
                                <input name="ingredients" id="ingredients" class="form-control"
                                    value="{{ $plat->ingredients }}" required data-role="tagsinput" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        Annuler
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Confirmer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
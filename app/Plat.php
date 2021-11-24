<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $categorie_id
 * @property string $chemin_photo
 * @property string $libelle
 * @property string $description
 * @property string $ingredients
 * @property string $date_ajout
 * @property Categorie $categorie
 */
class Plat extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['categorie_id', 'chemin_photo', 'libelle', 'description', 'ingredients', 'date_ajout'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorie()
    {
        return $this->belongsTo('App\Categorie', 'categorie_id');
    }
}

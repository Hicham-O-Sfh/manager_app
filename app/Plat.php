<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $categorie_id
 * @property string $libelle
 * @property string $description
 * @property string $ingrédients
 * @property string $date_ajout
 * @property Category $category
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
    protected $fillable = ['categorie_id', 'libelle', 'description', 'ingrédients', 'date_ajout'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'categorie_id');
    }
}

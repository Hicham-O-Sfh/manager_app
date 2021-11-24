<?php

use App\Categorie;
use App\Plat;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RemplissageDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nom' => 'Admin',
                'prenom' => 'Admin',
                'is_admin' => true,
                'email' => 'admin@test.com',
                'password' => Hash::make("123456")
            ],
            [
                'nom' => 'User',
                'prenom' => 'User',
                'is_admin' => false,
                'email' => 'user@test.com',
                'password' => Hash::make("azerty")
            ],
        ];
        foreach ($users as $key => $value)
            User::create($value)->save();

        $categories = [
            [
                "libelle" => "Pizza",
                "description" => "La pizza est une recette de cuisine traditionnelle de la cuisine italienne, originaire de Naples à base de galette de pâte à pain, garnie de divers mélanges d’ingrédients et cuite au four."
            ], [
                "libelle" => "Tacos",
                "description" => "Un tacos est un antojito de la cuisine mexicaine qui se compose d'une tortilla de maïs repliée ou enroulée sur elle-même contenant presque toujours une garniture le plus souvent à base de viande, de sauce, d'oignon et de coriandre fraiche hachée. Les tacos se mangent généralement sans couverts, avec les doigts."
            ], [
                "libelle" => "Poutine",
                "description" => "La poutine est un plat de la cuisine québécoise composé, dans sa forme classique, de trois éléments : des frites, du fromage en grains et de la sauce brune. La poutine tire son origine du Centre-du-Québec à la fin des années 1950."
            ]
        ];
        foreach ($categories as $key => $value)
            Categorie::create($value)->save();

        $plats = [
            [
                "chemin_photo" => "uploads/images/plats/sample_poutine_fromage.jpeg",
                "libelle" => "Poutine Fromagiére",
                "description" => "Ce macaroni est fait d'une sauce fromage maison à base de notre cheddar fumé et non salé à laquelle est ajouté des ...",
                "ingredients" => "Fromage, Sauce fromage, Dinde, Cheddar fumé, Escalope de poulet rotis ...",
                "date_ajout" => Carbon::now(),
                "categorie_id" => 3,
            ], [
                "chemin_photo" => "uploads/images/plats/sample_pizza_4saisons.jpeg",
                "libelle" => "Pizza 4 saisons",
                "description" => "La pizza quatre saisons est une variété de pizza préparée en quatre portions comportant des ingrédients différents, chaque portion représentant une saison de l'année. Très populaire en Italie, il s'agit d'un « classique ». ",
                "ingredients" => "Dinde, Viende hachée, Crevette, Olive, Merguez ...",
                "date_ajout" => Carbon::now(),
                "categorie_id" => 1,
            ], [
                "chemin_photo" => "uploads/images/plats/sample_tacos_poulet.jpeg",
                "libelle" => "Tacos poulet",
                "description" => "Tacos au poulet. cette recette de tacos différents des tacos traditionnels sera autant appréciée par les enfants que l'originale.",
                "ingredients" => "4 feuilles de tortillas, 4 escalopes de poulet ou de dinde, 20 cl de crème liquide,100 g de fromage râpé, 1 oignon.",
                "date_ajout" => Carbon::now(),
                "categorie_id" => 2,
            ]
        ];
        foreach ($plats as $key => $value)
            Plat::create($value)->save();
    }
}

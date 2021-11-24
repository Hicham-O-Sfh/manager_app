<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\MyServices\FileUploader;
use App\Plat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    private $imagesPath = "uploads/images/plats";
    private $fileUploader;
    public function __construct(FileUploader $fileUploader)
    {
        $this->middleware('auth');
        $this->fileUploader = $fileUploader;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            "plats" => Plat::all()
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin_home()
    {
        return view('adminHome', [
            "categories_plats" =>  Categorie::all(),
            "plats" =>  Plat::all()
        ]);
    }

    public function ajout_plat(Request $request)
    {
        Plat::create([
            "chemin_photo" => $this->fileUploader->Upload($this->imagesPath, $request->libelle . "_" . date("d-m-y_H-s-i"), $request->file("photo")),
            "libelle" => $request->libelle,
            "description" => $request->description,
            "ingredients" => $request->ingredients,
            "categorie_id" => $request->categorie,
            "date_ajout" => Carbon::now(),
        ])->save();
        return \redirect()->route("accueil_admin");
    }

    public function supprimer_plat(Plat $plat)
    {
        $plat->delete();
        return \redirect()->route("accueil_admin");
    }

    public function modifier_plat(Plat $plat, Request $request)
    {
        $plat->update([
            "chemin_photo" => $this->fileUploader->Upload($this->imagesPath, $request->libelle . "_" . date("d-m-y_H-s-i"), $request->file("photo")),
            "libelle" => $request->libelle,
            "description" => $request->description,
            "ingredients" => $request->ingredients,
            "categorie_id" => $request->categorie,
        ]);
        return \redirect()->route("accueil_admin");
    }
}

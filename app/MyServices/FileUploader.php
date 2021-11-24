<?php


namespace App\MyServices;


use Illuminate\Http\UploadedFile;

class FileUploader
{
    /*
     implementer une fonction qui accepte la direction,nom du fichier et le fichier lui même,
     et il retourne le nom complet du fichier ou null si le fichier n'existe pas
    */
    public function Upload(string $path, string $nameFormat, $file)
    {
        if ($file instanceof UploadedFile) {
            $extension = strtolower($file->getClientOriginalExtension());
            $imageFullName = $nameFormat . '.' . $extension;
            return $file->move($path, $imageFullName)->getPathname();
        }
        return null;
    }
}

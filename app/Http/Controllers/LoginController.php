<?php

namespace App\Http\Controllers;


use App\Models\logins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Blog.login');
    }

    public function __invoke()
    {
        // Return a view or perform some other action here
        return view('Blog.login');
    }

    public function showForm()
    {
        return view('Blog.login');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    // Hacher le mot de passe avant de le stocker dans la base de données
    $validatedData['password'] = Hash::make($validatedData['password']);

    // Vérifier si l'email est unique
    $existingLogin = logins::where('email', $validatedData['email'])->first();

    if ($existingLogin) {
        // Afficher un message d'erreur si l'email existe déjà
        Session::flash('erreur', 'L\'email existe déjà. Veuillez entrer une autre adresse email.');
        return redirect()->back();
    }


    logins::create($validatedData);

     // Afficher un message de succès après l'envoi du formulaire
    Session::flash('succes', 'Vos informations ont été envoyées avec succès.');

    // Vérifier si l'email existe déjà
    //$existingLogin = logins::where('email', $validatedData['email'])->first();

    //if ($existingLogin) {
        // L'email existe déjà, vous pouvez mettre à jour les données existantes si nécessaire
       // $existingLogin->update($validatedData);
    //} else {
        // L'email n'existe pas, créer un nouvel enregistrement
       // logins::create($validatedData);
   // }

    return redirect()->route('Blog.Accueil');
}


}

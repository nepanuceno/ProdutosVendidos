<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Loja;
use Alert;

class VitrineController extends Controller
{
    private $loja;

    public function __construct(Loja $loja){
        $this->loja = $loja;
    }

    public function show($id_loja){

        Alert::warning('Deleting user -<br/>are you sure?')
        ->showCancelButton($btnText = 'Cancel', $btnColor = '#dc3545')
        ->showConfirmButton($btnText = '<a href="/admin/users/1/delete">Yes</a>', $btnColor = '#38c177')
        ->autoClose(false);
        
        $loja = $this->loja->find($id_loja);
        $produtos = $loja->produtos;
        return view('loja.vitrine', compact('produtos','loja'));
    }
}

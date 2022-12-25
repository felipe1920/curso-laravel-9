<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Library\Teste;
use App\Library\ReadEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TesteController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {

        $teste = new Teste();
        $readEmail = new ReadEmail();

        echo '<pre>';
        print_r($teste->imprimir());
        print_r($readEmail->imprimir());
        echo '</pre>';

    }

}
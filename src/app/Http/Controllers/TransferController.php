<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use \InvalidArgumentException;
use \Exception;

class TransferController extends Controller
{
    public function transfer(Request $request)
    {
        // Pega os dados da contas
        // Valida
        // Abre uma transferência
        //  Sucesso - Finaliza a transferência
        //  Falha - Cancela a transferência
        return "";
    }
}

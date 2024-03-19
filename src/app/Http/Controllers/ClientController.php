<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function list(Request $request)
    {
        $collection = Client::all();
        if (count($collection) == 0) {
            $collection = json_decode('[]');
        }

        return response()->json($collection);
    }
}

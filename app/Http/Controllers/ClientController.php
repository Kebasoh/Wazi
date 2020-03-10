<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Model;

// class client extends Model
// {
//     protected $fillable = [
//         'firstname',
//         'lastname', 'contacts'
//     ];
// }

class clientController extends Controller
{
    public function showAllClients()
    {
        return response()->json(clients::all());
    }

    public function showOneClient($id)
    {
        return response()->json(client::find($id));;
    }

    public function store(Request $request)
    {
        $client = client::create($request->all());

        return response()->json($client, 201);
    }

    public function update(Request $request, $id)
    {
        $client = client::findOrFail($id);
        $client->update($request->all());
        
        return response()->json(['message' => 'Success! client updated', $client, 200]);
    }

    public function delete( client $client)
    {
        client::findOrFail($id)->delete();
        
        return response()->json(['message' => 'Delete success']);
    }

}


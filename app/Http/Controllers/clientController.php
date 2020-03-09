<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [
        'firstname',
        'lastname', 'contacts'
    ];
}

class clientController extends Controller
{
    public function index()
    {
        return response()->json($clients);
    }

    public function show(client $client)
    {
        return $client;
    }

    public function store(Request $request)
    {
        $client = client::create($request->all());

        return response()->json($client, 201);
    }

    public function update(Request $request, client $client)
    {
        $client->update($request->all());
        
        return response()->json(['message' => 'Success! client updated', 'clinet' => $client, 200]);
    }

    public function delete( client $client)
    {
        $client->delete();
        
        return response()->json(['message' => 'Delete success']);
    }

}


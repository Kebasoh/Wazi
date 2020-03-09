<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        return client::all();
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
        
        return response()->json($client, 200);
    }

    public function delete( client $client)
    {
        $client->delete();
        
        return response()->json(null,204);
    }

}

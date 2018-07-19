<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('name')->get();

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email' => 'unique:clients,email',
            'photo' => 'mimes:gif,jpeg,jpg,png|max:4096',
        ];

        $this->validate($request, $rules);

        $client = Client::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
        ]);

        if ($request->hasfile('photo') && $request->file('photo')->isValid()) {
            $request->file('photo')->move(public_path() . '/uploads/clients/', $client->id);
        }

        return redirect()->route('clients.show', $client)->with('success', 'Client stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $rules = [
            'email' => 'unique:clients,email,' . $client->id,
            'photo' => 'mimes:gif,jpeg,jpg,png|max:4096',
        ];

        $this->validate($request, $rules);

        $client->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
        ]);

        if ($request->hasfile('photo')) {
            $request->file('photo')->move(public_path() . '/uploads/clients/', $client->id);
        }

        return redirect()->route('clients.show', $client)->with('success', 'Client updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $file = public_path() . '/uploads/clients/' . $client->id;

        if (file_exists($file)) {
            unlink($file);
        }

        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted!');
    }
}

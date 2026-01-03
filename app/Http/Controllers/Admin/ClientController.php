<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientRequest;
use App\Http\Resources\Admin\ClientResource;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function indexPage(Request $request): View
    {
        return view('admin.clients.index');
    }

    public function index(Request $request)
    {
        $clients = Client::with('media')->paginate(10);
        return responseJson(ClientResource::collection($clients->items()),'',200,getPaginates($clients));
    }

    public function store(ClientRequest $request)
    {
        $client = Client::create(Arr::except($request->validated(),['image']));
        saveFiles($request->image,$client,"client");
        return responseJson([],'Created Successfully',200);
    }

    public function show($id)
    {
        $client = Client::with(['media'])->find($id);
        return responseJson($client,'Data exited successfully',200);
    }

    public function update(ClientRequest $request, Client $client)
    {
        if ($request->hasFile('image')) 
            saveFiles($request->image,$client,"client",null,'update');

        $client->update(Arr::except($request->validated(),['image']));
        return responseJson([],'Updated Successfully',200);
    }

    public function destroy(Client $client)
    {
        deleteFile($client);
        $client->delete();
        return responseJson([],'Deleted Successfully',200);
    }
}

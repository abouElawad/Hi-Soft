<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Traits\UploaderTrait;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class ClientController extends Controller
{
    use UploaderTrait;
    public function index()
    {
        $clients = Client::get();

        return view('dashboard.clients.index',compact('clients'));
    }

    public function create()
    {
     return view('dashboard.clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|string|min:3',
            'description'=> 'required|string|between:3,255',
            'url' => 'required|string|url',
        ]);

        $logo = $request->file('logo');
        $logoName = 'client_logo_' . time() . '.' . $logo->getClientOriginalExtension();
        $this->uploadfile($logo, 'images/clients/logos' ,$logoName);

        $image = $request->file('image');
        $imageName = 'client_image_' . time() . '.' . $image->getClientOriginalExtension();
        $this->uploadfile($image, 'images/clients/image' ,$imageName);

        $validated = array_merge($validated, [
            'image' => 'images/clients/image/'.$imageName,
            'logo' => 'images/clients/logos/'.$logoName,
        ]);
        
         
         Client::create($validated);

        return redirect(route('dashboard.clients.index'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Salva a mensagem de contato
     *  
     * @param \Illuminate\Http\Requests\ContactFormRequest   $request
     * @return string JSON
     */
    public function store(ContactFormRequest $request)
    {
        Contact::create($request->validated());
        return response()->json("Mensagem enviada!");
    }
}

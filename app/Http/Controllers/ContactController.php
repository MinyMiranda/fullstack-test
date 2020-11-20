<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
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

     /**
     * Retornando todos as mensagens de contato.
     *
     * @return string JSON
     */
    public function index()
    {
        return response()->json(
            Contact::all()
        );
    }
}

<?php
namespace App\Http\Controllers;

use App\Mail\SimpleEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        $details = [
            'name' => $validatedData['name'],
            'lastName' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ];

        try {
            Mail::to('flaviomartil5@gmail.com')->send(new SimpleEmail($details));
            return response("E-mail enviado com sucesso");
        } catch (\Exception $e) {
            return response("Erro ao enviar o e-mail: " . $e->getMessage(), 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\FormEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    public function sendForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'page' => 'required|max:255',
        ]);

        if (array_key_exists('errors', $validated)) {
            return json_encode($validated);
        } else {
            Mail::send(new FormEmail($validated));
            return [
                'success' => true,
            ];
        }
    }
}

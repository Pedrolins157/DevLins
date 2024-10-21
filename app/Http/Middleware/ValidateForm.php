<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class ValidateForm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:15',
            'description' => 'nullable|string|max:500',
        ];
        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.max' => 'O campo email não pode ter mais de 255 caracteres.',
            
            'contact.required' => 'O campo contato é obrigatório.',
            'contact.string' => 'O campo contato deve ser uma string.',
            'contact.max' => 'O campo contato não pode ter mais de 15 caracteres.',
            
            'description.string' => 'O campo descrição deve ser uma string.',
            'description.max' => 'O campo descrição não pode ter mais de 500 caracteres.',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        return $next($request);
    }
}

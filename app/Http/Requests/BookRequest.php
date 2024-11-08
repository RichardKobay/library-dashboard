<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $currentUser = User::find(auth()->id());

        if ($currentUser->hasAnyRole('admin', 'library-man'))
            return true;

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|min:3|max:100',
            'amount' => 'integer|required|min:0|max:1000',
            'type' => 'integer|required|gt:0',
            'category' => 'integer|required|gt:0',
            'authors' => 'integer|required|gt:0',
            'ISBN' => 'string|integer|required|min:3|max:100',
            'publication_year' => 'integer|required|gte:1000',
            'description' => 'string|required|min:3',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'user_id' => 'integer|required|exists:users,id|gt:0',
            'book_id' => 'integer|required|exists:books,id|gt:0',
            'date' => 'date|required',
        ];
    }
}

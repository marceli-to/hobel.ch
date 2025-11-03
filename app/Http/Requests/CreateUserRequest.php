<?php

namespace App\Http\Requests;

use App\Rules\UniqueStatamicEmail;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'name' => ['required', 'string'],
			'email' => ['required', 'string', 'email', new UniqueStatamicEmail],
			'password' => ['required', 'string', 'min:8'],
		];
	}

	/**
	 * Get custom error messages for validation rules.
	 *
	 * @return array<string, string>
	 */
	public function messages(): array
	{
		return [
			'name.required' => 'Vollständiger Name ist erforderlich',
			'email.required' => 'E-Mail-Adresse ist erforderlich',
			'email.email' => 'E-Mail-Adresse ist ungültig',
			'password.required' => 'Passwort ist erforderlich',
			'password.min' => 'Passwort muss mindestens 8 Zeichen lang sein',
		];
	}
}

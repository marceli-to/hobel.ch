<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Statamic\Facades\User;

class UniqueStatamicEmail implements Rule
{
	/**
	 * Determine if the validation rule passes.
	 */
	public function passes($attribute, $value): bool
	{
		return !User::findByEmail($value);
	}

	/**
	 * Get the validation error message.
	 */
	public function message(): string
	{
		return 'E-Mail-Adresse wird bereits verwendet';
	}
}

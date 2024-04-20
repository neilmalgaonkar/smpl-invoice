<?php

namespace App\Livewire\Forms\Authentication;

use App\Services\Authentication;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    public $userEmail = '';

    public $userPassword = '';

    public function rules(): array
    {
        return [
            'userEmail' => 'required|email',
            'userPassword' => 'required'
        ];
    }

    /**
     * @throws ValidationException
     */
    public function login(Authentication $authentication): bool
    {
        $this->validate();
        return $authentication->loginUserWithEmailPassword($this->userEmail, $this->userPassword);
    }
}

<?php

namespace App\Livewire\Forms\Authentication;

use App\Services\Authentication;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{

    public string $firstName = '';
    public string $lastName = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function rules(): array
    {
        return [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|string|email', //|unique:users,email',
            'password' => 'required|string',
            'confirmPassword' => 'required|string|same:password',
        ];
    }

    /**
     * @throws ValidationException
     */
    public function register(Authentication $authentication): void
    {
        $this->validate();
        $authentication->register($this->all());
        $this->reset();
    }
}

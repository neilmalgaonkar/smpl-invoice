<?php

namespace App\Livewire\Pages;

use App\Livewire\Forms\Authentication\RegisterForm;
use App\Services\Authentication;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public RegisterForm $form;

    private Authentication $auth;

    public function boot(Authentication $auth): void
    {
        $this->auth = $auth;
    }

    /**
     * @return void
     * @throws ValidationException
     */
    public function register(): void
    {
        $this->form->register($this->auth);
    }

    #[Layout('components.layouts.guest')]
    public function render(): View
    {
        return view('livewire.pages.register');
    }
}

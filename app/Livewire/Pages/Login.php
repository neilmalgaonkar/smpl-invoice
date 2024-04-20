<?php

namespace App\Livewire\Pages;

use App\Livewire\Forms\Authentication\LoginForm;
use App\Services\Authentication;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    private $authentication;

    public function boot(Authentication $authentication): void
    {
        $this->authentication = $authentication;
    }

    /**
     * Logs in the user.
     *
     * @return void
     * @throws ValidationException
     */
    public function login(): void
    {
        $this->form->login($this->authentication);
    }

    #[Layout('components.layouts.guest')]
    public function render(): Factory|Application|View|ApplicationContract
    {
        return view('livewire.pages.login');
    }
}

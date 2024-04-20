<x-common.auth-form>
    <form wire:submit.prevent="register" method="post">
        <x-loader target="register"/>
        <x-forms.input type="text" name="form.firstName" label="First name" id="user-first-name" wire:model="form.firstName"/>
        <x-forms.input type="text" name="form.lastName" label="Last name" id="user-last-name" wire:model="form.lastName"/>
        <x-forms.input type="text" name="form.email" label="Email address" id="user-email" wire:model="form.email"/>
        <x-forms.input type="password" name="form.password" label="Password" value="" id="user-password" wire:model="form.password"/>
        <x-forms.input type="password" name="form.confirmPassword" label="Confirm Password" value="" id="user-confirm-password" wire:model="form.confirmPassword"/>
        <x-forms.button label="Register"/>
    </form>
</x-common.auth-form>

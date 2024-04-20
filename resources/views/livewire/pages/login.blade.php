<x-common.auth-form>
    <form wire:submit.prevent="login" method="post" class="relative">
        <x-loader target="login"/>
        <x-forms.input type="text" name="form.userEmail" label="Email address" id="user-email" wire:model="form.userEmail"/>
        <x-forms.input type="password" name="form.userPassword" label="Password" value="" id="user-password" wire:model="form.userPassword"/>
        <x-forms.button label="Login" />
    </form>
</x-common.auth-form>

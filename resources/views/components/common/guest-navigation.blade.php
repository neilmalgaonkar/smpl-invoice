<div class="absolute w-full flex justify-end py-2 px-4">
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <nav>
        <ul class="m-0 p-0 list-none flex">
            <li class="px-6"><a href="/login" wire:navigate @class([
                'text-base leading-4 transition-all hover:text-blue-400',
                'underline underline-offset-8 text-blue-400 decoration-2' => request()->routeIs('app.login')
            ])>Login</a></li>
            <li><a href="/register" wire:navigate @class([
                'text-base leading-4 transition-all hover:text-blue-400',
                'underline underline-offset-8 text-blue-400 decoration-2' => request()->routeIs('app.register')
            ])>Register</a></li>
        </ul>
    </nav>
</div>

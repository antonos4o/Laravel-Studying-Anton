<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log in!</h1>
    
                <form method="POST" action="/login" class="mt-10">
                    @csrf
                    <x-form.input name="email" type="email" autocomplete="email"/>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-form.button class="ml">Log In</x-form.button>
                </form>
                
                <div class="flex justify-between mt-4">
                    <form method="GET" action="/forgot-password">
                        <x-form.button>Forgot Password?</x-form.button>
                    </form>
                    
                    <form method="GET" action="/register">
                        <x-form.button class="text-right">No Account ?</x-form.button>
                    </form>
                </div>
            </x-panel>
        </main>
    </section>
</x-layout>

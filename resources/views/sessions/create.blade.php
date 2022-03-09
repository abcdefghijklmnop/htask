<x-layout>
    <section class="px-6 py-8" >
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl" >Log In!</h1>
                <form id="ajaxloginform" action="{{url('/login')}}" method="post" class="mt-10">
                    @csrf
                    <div class="mb-6">
                        {{--  --}}
                        <x-form.input name="email" type="email" autocomplete="username" ></x-form.input>
                        {{--  --}}
                        <x-form.input name="password" type="password" autocomplete="new-password" ></x-form.input>
                        {{--  --}}
                        <x-form.button>Log In</x-form.button>
                        {{--  --}}
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

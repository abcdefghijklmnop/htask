<!doctype html>

<html lang="en">
    <head>
        <title>Htask</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <style>
        html {
            scroll-behavior: smooth;

        }
        .clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .clamp.one-line {
            -webkit-line-clamp: 1;
        }
    </style>
    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">
            <nav class="md:flex md:justify-between md:items-center">
                <div class="mt-8 md:mt-0 flex items-center">
                    @auth
                        <x-dropdown>
                            <x-slot name="trigger" >
                                <button class="text-xs font-bold uppercase">Üdv {{ auth()->user()->email }}</button>
                            </x-slot>

                            <x-dropdown-item x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()" href="#" >Log Out</x-dropdown-item>
                            <form id="logout-form" action="{{url('/logout')}}" method="post" class="hidden">
                                @csrf
                                <button type="submit">Log out</button>
                            </form>
                        </x-dropdown>
                    @else
                        <a href="{{url('/register')}}" class="text-xs font-bold uppercase">Register</a>
                        <a href="{{url('/login')}}" class="ml-6 text-xs font-bold uppercase">Log In</a>
                    @endauth
                </div>
            </nav>

            {{ $slot }}


        </section>
        <x-flash/>
    </body>
<html>

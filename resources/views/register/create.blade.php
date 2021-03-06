<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Registration!</h1>
            <form action="{{url('/register')}}" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        email
                    </label>
                    <input type="email" name="email" id="email" class="border border-gray-400 p2 w-full" required
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    {{--  --}}
                    <label for="emailagain" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email again
                    </label>
                    <input type="emailagain" name="emailagain" id="emailagain" class="border border-gray-400 p2 w-full"
                        required value="{{ old('emailagain') }}">
                    @error('emailagain')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    {{--  --}}
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        password
                    </label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p2 w-full"
                        required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    {{--  --}}
                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Submit
                        </button>
                    </div>
                    {{--  --}}
                    {{-- @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif --}}
                </div>
            </form>
        </main>
    </section>
</x-layout>

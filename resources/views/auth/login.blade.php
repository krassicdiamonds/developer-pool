<x-layout>
    <form action="{{ route('login') }}" method="POST" class="bg-white mx-auto my-5 px-5 py-2.5 rounded-sm w-[60%]">
        @csrf

        <h2 class="font-bold text-center">Login into your account</h2>

        <label for="email" class="block">Email</label>

        <input type="email" name="email" id="email" required class="block px-2.5 py-0.5 border border-gray-300 rounded-sm outline-0 w-full" value="{{ old('email') }}">

        <label for="password" class="block">Password</label>
        <input type="text" name="password" id="password" required class="block px-2.5 py-0.5 border border-gray-300 rounded-sm outline-0 w-full">

        <input type="submit" value="Login" class="block bg-gray-200 mx-auto my-2.5 px-5 py-1.5 rounded cursor-pointer">

        {{-- validation errors --}}
    </form>
</x-layout>
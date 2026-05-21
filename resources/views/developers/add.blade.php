{{-- Add new developer --}}

{{-- 
    name,
    role,
    email,
    experience,
    description,
    company_id
--}}


<x-layout>

    <div class="mt-5 text-center">

    </div>
        <h2 class="text-2xl text-center">Add Developer</h2>
    
    <form action="{{ route('developers.store') }}" method="POST" class="bg-white mx-auto my-5 px-5 py-2.5 rounded-sm w-[60%]">
        @csrf

        {{-- name --}}
        <div>
            <div>
                <label for="name">Name</label>
            </div>
            <input type="text" name="name" id="name" required value="{{ old('name') }}"  class="px-2.5 py-0.5 border border-gray-300 rounded-sm outline-0 w-full" />
        </div>

        {{-- role --}}
        <div>
            <div>
                <label for="role">Role</label>
            </div>
            <input type="text" name="role" id="role" value="{{ old('role') }}"  class="px-2.5 py-0.5 border border-gray-300 rounded-sm outline-0 w-full" />
        </div>

        {{-- email --}}
        <div>
            <div>
                <label for="email">Email</label>
            </div>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="px-2.5 py-0.5 border border-gray-300 rounded-sm outline-0 w-full">
        </div>

        {{-- experience --}}
        <div>
            <div>
                <label for="experience">Experience</label>
            </div>
            <input type="number" name="experience" id="experience" value="{{ old('experience') }}" class="px-2.5 py-0.5 border border-gray-300 rounded-sm outline-0 w-full">
        </div>

        {{-- description --}}
        <div>
            <div>
                <label for="description">Description</label>
            </div>
            <textarea name="description" id="description" class="px-2.5 py-0.5 border border-gray-300 rounded-sm outline-0 w-full"></textarea>
        </div>

        {{-- company_id --}}
        <select name="company_id" id="company_id" class="bg-gray-200 py-0.5 w-full">
            <option value="" selected disabled>Select Company</option>
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{$company->name}}</option>
            @endforeach
        </select>

        <input type="submit" value="Add Developer" class="bg-gray-200 my-2.5 px-5 py-1.5 rounded cursor-pointer">

        {{-- Output Errors --}}
        <div>
            @if($errors->any())
                <ul class="bg-red-100 px-2.5 py-1.5">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-sm">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </form>
</x-layout>
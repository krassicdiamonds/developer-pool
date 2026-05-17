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
    
    <form action="{{ route('developers.store') }}" method="POST" class="bg-white mx-auto my-5 px-5 py-2.5 rounded-sm w-2/3">
        @csrf

        {{-- name --}}
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required />
        </div>

        {{-- role --}}
        <div>
            <label for="role">Role:</label>
            <input type="text" name="role" id="role" />
        </div>

        {{-- email --}}
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>

        {{-- experience --}}
        <div>
            <label for="experience">Experience</label>
            <input type="number" name="experience" id="experience">
        </div>

        {{-- description --}}
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>

        {{-- company_id --}}
        <select name="company_id" id="company_id">
            <option value="" selected disabled>Select Company</option>
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{$company->name}}</option>
            @endforeach
        </select>

        <input type="submit" value="Add Developer">
    </form>
</x-layout>
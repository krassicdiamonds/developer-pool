<x-layout>

     <div class="flex flex-col gap-y-2.5 bg-white shadow-xs my-5 p-2.5 rounded-sm">
        <div class="bg-gray-50 px-2.5 py-1.5 rounded-xs">
            {{-- Developer's name --}}
            <h2 class="font-medium">{{$developer->name}}</h2>
            {{-- Developer's role --}}
            <h3 class="text-gray-500 text-xs">{{$developer->role}}</h3>
        </div>

        <div class="flex flex-col gap-y-1 bg-gray-50 px-2.5 py-1.5 rounded-xs">

            <h2 class="mb-1.5 text-gray-800"><span class="font-bold uppercase">Company Info</h2>
            
            <h3 class="text-gray-800 text-sm"><span class="font-bold">Company:</span> {{$developer->company->name}}</h3>

            <h3 class="mt-1.5 text-gray-800 text-sm"><span class="font-bold">Email:</span> {{$developer->company->email}}</h3>
            {{-- View Details --}}

            {{-- City --}}
            <h3 class="text-gray-800 text-sm"><span class="font-bold">Location:</span> {{$developer->company->location}}</h3>
            {{-- View Details --}}
            
            <h3 class="text-gray-800 text-sm"><span class="font-bold">Work Experience:</span> {{$developer->experience}}
                @if($developer->experience > 1)
                    years
                @else
                    year
                @endif
            </h3>
            {{-- View Details --}}
        </div>

        <div class="bg-gray-50 px-2.5 py-1.5 rounded-xs">
            <p class="text-gray-800 text-sm">{{$developer->description}}</p>
        </div>

        <button class="right-40 bottom-20 absolute hover:bg-gray-400 px-2.5 border border-gray-500 rounded-sm w-fit hover:text-white text-sm transition-all duration-200 cursor-pointer">
            <a href="{{ route('developers.index') }}">Back</a>
        </button>
</x-layout>


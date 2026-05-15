<x-layout>

     <div class="flex flex-col gap-y-2.5 bg-white shadow-xs my-5 p-2.5 rounded-sm">
        <div class="bg-gray-50 px-2.5 py-1.5 rounded-xs">
            {{-- Developer's name --}}
            <h2 class="font-medium">{{$developer->name}}</h2>
            {{-- Developer's role --}}
            <h3 class="text-gray-500 text-xs">{{$developer->role}}</h3>
        </div>

        <div class="flex flex-col gap-y-1 bg-gray-50 px-2.5 py-1.5 rounded-xs">
            <h3 class="mt-1.5 text-gray-800 text-sm"><span class="font-bold">Email:</span> {{$developer->email}}</h3>
            {{-- View Details --}}

            {{-- <h3 class="text-gray-800 text-sm"><span class="font-bold">Company:</span> {{$developer->company}}</h3> --}}
            {{-- View Details --}}
            
            <h3 class="text-gray-800 text-sm"><span class="font-bold">Work Experience:</span> {{$developer->experience}} years</h3>
            {{-- View Details --}}
        </div>

        <div class="bg-gray-50 px-2.5 py-1.5 rounded-xs">
            <p class="text-gray-800 text-sm">{{$developer->description}}</p>
        </div>

</x-layout>


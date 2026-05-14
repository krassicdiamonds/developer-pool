<x-layout>

     <div class="bg-white shadow-xs my-5 p-2.5 rounded-sm">
            {{-- Developer's name --}}
            <h2 class="font-medium">{{$developer->name}}</h2>
            {{-- Developer's role --}}
            <h3 class="text-gray-500 text-xs">{{$developer->role}}</h3>
            {{-- View Details --}}

            <div class="py-2.5">
                <p class="text-gray-600 text-sm">{{$developer->description}}</p>
            </div>

</x-layout>


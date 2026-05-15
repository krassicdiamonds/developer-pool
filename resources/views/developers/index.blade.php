{{-- Show all developers. Name, role, view details button --}}

<x-layout>

    {{-- Title --}}
    <div class="mt-5">
        <h2 class="text-2xl text-center">Meet the developers</h2>
    </div>

    {{-- Cards --}}
    <div class="gap-2.5 grid grid-cols-2 my-5">
        
        @foreach ($developers as $developer)
        <div class="bg-white shadow-xs p-2.5 rounded-sm">
            {{-- Developer's name --}}
            <h2 class="font-medium">{{$developer->name}}</h2>
            {{-- Developer's role --}}
            <h3 class="text-gray-500 text-xs">{{$developer->role}}</h3>
            {{-- View Details --}}

            <div class="py-2.5">

                <button class="hover:bg-gray-400 px-2.5 border border-gray-500 hover:text-white text-sm transition-all duration-200">
                    <a href="{{ route('developers.show', $developer->id) }}" >View Details</a>
                </button>

            </div>
        </div>
        @endforeach
        
    </div>
        
    {{ $developers->links() }}

</x-layout>
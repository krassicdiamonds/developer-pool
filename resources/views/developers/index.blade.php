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

            <div class="flex justify-between items-center py-2.5">

                <button class="hover:bg-gray-400 px-5 py-1.5 border border-gray-500 rounded-sm hover:text-white text-sm transition-all duration-200 cursor-pointer">
                    <a href="{{ route('developers.show', $developer->id) }}" >View Details</a>
                </button>

                   
            <form 
            action="{{ route('developers.destroy', $developer->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" class="bg-red-500 hover:bg-red-400 px-5 py-1.5 rounded-sm text-white text-sm uppercase transition-all duration-200 cursor-pointer">
            </form>

            </div>

        </div>
        @endforeach
        
    </div>
        
    {{ $developers->links() }}

</x-layout>
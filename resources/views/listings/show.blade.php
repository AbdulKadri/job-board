<x-layout>
    
    @include('partials._search')
    
    <a href="{{ url()->previous() }}" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
    <x-card class="p-10">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                src="{{ $listing->logo ? 
                    asset('storage/' . $listing->logo)
                    : asset('images/logo.svg') 
                }}"
                alt=""
            />
    
            <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
    
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div class="w-full">
                <h3 class="text-3xl font-bold mb-4">
                    Job Description
                </h3>
                <div class="flex flex-col items-center text-lg space-y-6">
                    {{ $listing->description }}
    
                    <a
                        href="mailto:{{ $listing->email }}"
                        class="w-1/2 block bg-secondary text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact Employer</a
                    >
    
                    <a
                        href="{{ $listing->url }}"
                        target="_blank"
                        class="w-1/2 block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                        Website</a
                    >
                </div>
            </div>
        </div>
    </x-card>

    {{-- only allow user who created listing to see edit and delete --}}
    @if(auth()->check() && auth()->user()->id == $listing->user_id) 
        <div class="flex gap-3 justify-center">
            <x-card class="mt-4 p-2 space-x-6 w-1/4 border-primary text-white text-center hover:opacity-80 cursor-pointer">
                <a href="/listings/{{$listing->id}}/edit" class="text-white">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
            </x-card>

            <x-card class="mt-4 p-2 space-x-6 w-1/4 bg-red-500 border-red-500 text-white text-center hover:opacity-80 cursor-pointer">
                <form action="/listings/{{$listing->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </form>
            </x-card>
        </div>
    @endif
    </div>
    
</x-layout>
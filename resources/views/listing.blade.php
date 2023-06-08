@extends('layout')

@section('content')
@include('partials._search')

<a href="{{ url()->previous() }}" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{asset('images/logo.svg')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
        <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
        <ul class="flex">
            @foreach(explode(', ', $listing->tags) as $tag)
                <li
                    class="flex items-center justify-center bg-secondary text-white rounded-xl px-3 py-1 mr-2"
                >
                    <a href="#">{{ strtoupper($tag) }}</a>
                </li>
            @endforeach
        </ul>
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="flex flex-col items-center text-lg space-y-6">
                {{ $listing->description }}

                <a
                    href="mailto:{{ $listing->email }}"
                    class="w-1/2 block bg-primary text-white mt-6 py-2 rounded-xl hover:opacity-80"
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
</div>
</div>
    
@endsection
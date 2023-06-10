<x-layout>

    <x-card class="p-10">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Manage Jobs
            </h1>
        </header>

        <table class="w-full table-fixed rounded-sm">
            <tbody>
                @unless($listings->isEmpty())

                @foreach($listings as $listing)
                    <tr class="border-secondary font-bold bg-gray-200">
                        <td
                            class="px-4 py-8 border-t border-b border-secondary text-lg"
                        >
                            <a href="/listings/{{$listing->id}}">
                                {{ $listing->title }}
                            </a>
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-secondary text-lg"
                        >
                            <a
                                href="/listings/{{$listing->id}}/edit"
                                class="text-secondary px-6 py-2 rounded-xl hover:opacity-80"
                                ><i
                                    class="fa-solid fa-pen-to-square"
                                ></i>
                                Edit</a
                            >
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-secondary text-lg"
                        >
                            <form action="/listings/{{$listing->id}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="text-red-500 hover:opacity-80">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @else
                    <tr class="border-secondary">
                        <td
                            class="px-4 py-8 border-t border-b border-secondary text-lg"
                        >
                            No listings yet.
                        </td>
                    </tr>

                @endunless
            </tbody>
        </table>
    </x-card>

</x-layout>
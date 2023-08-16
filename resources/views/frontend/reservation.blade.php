<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make Reservation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('reservations.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="event_id" class="block font-medium text-gray-700">Event</label>
                            <select id="event_id" name="event_id"
                                    class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="name" class="block font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name"
                                   class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                   class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                        </div>

                        <div>
                            <button type="submit" class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                Reserve
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

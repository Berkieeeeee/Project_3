<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-200">
                    <h1>Customer Name: {{ $order->customer->firstname }} {{ $order->customer->lastname }}</h1>
                    <br>
                    <p>Order:</p>
                    <br>
                    <form method="POST" action="{{ route('staff.update', ['order' => $order->id]) }}">
                        @csrf
                        @method('PUT')

                        @foreach($order->pizzas as $pizza)
                            <p>{{ $pizza->pizzaName }}</p>
                        @endforeach

                        <br>
                        <p>Status order:
                            <select name="order_status" class="dark:text-black">
                                <option value="Is being processed" {{ $order->status_order == 'Is being processed' ? 'selected' : '' }}>Is being processed</option>
                                <option value="Finished" {{ $order->status_order == 'Finished' ? 'selected' : '' }}>Finished</option>
                            </select>
                        </p>

                        <br>
                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

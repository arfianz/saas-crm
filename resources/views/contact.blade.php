<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p class="text-lg leading-relaxed">
                    Welcome to our Contact Us page. If you have any questions, please feel free to reach out to us at any time. We are here to assist you.
                </p>
                <p class="mt-4">
                    You can contact us through the following channels:
                </p>
                <ul class="mt-2 list-disc list-inside">
                    <li>Email: support@example.com</li>
                    <li>Phone: +123 456 7890</li>
                    <li>Address: 123 Main Street, Anytown, AN 12345</li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
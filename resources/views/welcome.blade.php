<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to Our CRM') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Kolom Kiri -->
                    <div class="flex flex-col justify-center">
                        <h3 class="text-2xl font-semibold mb-4">What is CRM?</h3>
                        <p class="text-lg leading-relaxed mb-4">
                            CRM, or Customer Relationship Management, is a technology for managing all your company’s relationships and interactions with customers and potential customers. The goal is simple: Improve business relationships. A CRM system helps companies stay connected to customers, streamline processes, and improve profitability.
                        </p>
                        <div class="flex space-x-4">
                            <x-button>
                                {{ __('Get Started') }}
                            </x-button>
                            <x-button>
                                {{ __('Learn More') }}
                            </x-button>
                        </div>
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="flex justify-center items-center">
                        <img src="images/undraw_data_re_80ws.svg" alt="CRM Illustration" class="max-w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
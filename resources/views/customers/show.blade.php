<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Patient Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <!-- Name -->
                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Name</p>
                    <p>{{ $customer->name }}</p>
                </div>

                <!-- Gender -->
                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Gender</p>
                    <p class="text-blue-600">{{ ucfirst($customer->gender) }}</p>
                </div>

                <!-- Date of Birth (FIXED) -->
                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Date of Birth</p>
                    <p>{{ $customer->dob }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Student ID</p>
                    <p>{{ $customer->student_id }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Department</p>
                    <p>{{ $customer->department }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Time In</p>
                    <p>{{ $customer->time_in }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Time Out</p>
                    <p>{{ $customer->time_out ?? 'Still Inside' }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-xs text-gray-500 uppercase">Reason</p>
                    <p>{{ $customer->reason }}</p>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-2">
                    <a href="{{ route('customers.edit', $customer) }}"
                       class="bg-gray-800 text-white px-4 py-2 text-sm rounded">
                        EDIT
                    </a>

                    <a href="{{ route('customers.index') }}"
                       class="border px-4 py-2 text-sm rounded">
                        BACK TO LIST
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
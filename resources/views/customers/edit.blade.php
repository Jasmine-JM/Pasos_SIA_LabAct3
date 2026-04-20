<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Patient
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Edit Patient</h3>

                <form method="POST" action="{{ route('customers.update', $customer) }}">
                    @csrf
                    @method('PUT')

                    <!-- NAME -->
                    <div class="mb-4">
                        <label class="block text-sm mb-1">Name</label>
                        <input type="text" name="name"
                               value="{{ old('name', $customer->name) }}"
                               class="w-full border rounded px-3 py-2 text-sm">
                    </div>

                    <!-- GENDER -->
                    <div class="mb-4">
                        <label class="block text-sm mb-1">Gender</label>
                        <select name="gender" class="w-full border rounded px-3 py-2 text-sm">
                            <option value="Male" {{ old('gender', $customer->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender', $customer->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <!-- DATE OF BIRTH -->
                    <div class="mb-6">
                        <label class="block text-sm mb-1">Date of Birth</label>
                        <input type="date" name="dob"
                               value="{{ old('dob', $customer->dob) }}"
                               class="w-full border rounded px-3 py-2 text-sm">
                    </div>

                    <div class="mb-4">
                        <label>Student ID</label>
                        <input type="text" name="student_id"
                            value="{{ $customer->student_id }}"
                            class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Department</label>
                        <input type="text" name="department"
                            value="{{ $customer->department }}"
                            class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Time Out</label>
                        <input type="time" name="time_out"
                            value="{{ $customer->time_out }}"
                            class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Reason</label>
                        <textarea name="reason" class="w-full border p-2 rounded">{{ $customer->reason }}</textarea>
                    </div>

                    <!-- BUTTONS -->
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('customers.index') }}"
                           class="text-sm px-4 py-2">Cancel</a>

                        <button type="submit"
                                class="bg-gray-800 text-white px-4 py-2 text-sm rounded">
                            UPDATE PATIENT
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
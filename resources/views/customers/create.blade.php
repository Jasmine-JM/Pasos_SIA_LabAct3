<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Record Clinic Visit
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('customers.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label>Student ID</label>
                        <input type="text" name="student_id" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Name</label>
                        <input type="text" name="name" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Gender</label>
                        <select name="gender" class="w-full border p-2 rounded">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label>Department</label>
                        <input type="text" name="department" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="w-full border p-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label>Reason for Visit</label>
                        <textarea name="reason" class="w-full border p-2 rounded"></textarea>
                    </div>

                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">
                        Record Visit
                    </button>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
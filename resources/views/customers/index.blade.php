<x-app-layout>
    <x-slot name="header">
        <h2>Clinic Visit Records</h2>
    </x-slot>

    <div style="padding: 40px;">
        <div style="max-width: 1100px; margin: auto;">

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ddd;">

                <!-- HEADER -->
                <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                    <h3>Clinic Visit List</h3>

                    <a href="{{ route('customers.create') }}"
                       style="background: #333; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">
                        RECORD VISIT
                    </a>
                </div>

                <!-- SUCCESS MESSAGE -->
                @if(session('success'))
                    <div style="margin-bottom: 15px; color: green;">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- TABLE -->
                <table style="width: 100%; border-collapse: collapse;">

                    <thead style="background: #f2f2f2;">
                        <tr>
                            <th style="padding: 10px; border: 1px solid #ddd;">Student ID</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Gender</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Department</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Time In</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Time Out</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Reason</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($customers as $customer)
                        <tr>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $customer->student_id }}
                            </td>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $customer->name }}
                            </td>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $customer->gender }}
                            </td>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $customer->department }}
                            </td>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $customer->time_in }}
                            </td>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                @if($customer->time_out)
                                    {{ $customer->time_out }}
                                @else
                                    <span style="color: green; font-weight: bold;">Inside Clinic</span>
                                @endif
                            </td>

                            <td style="padding: 10px; border: 1px solid #ddd;">
                                {{ $customer->reason }}
                            </td>

                            <!-- ACTIONS -->
                            <td style="padding: 10px; border: 1px solid #ddd;">
                                <div style="display: flex; gap: 6px; align-items: center; justify-content: center; flex-wrap: wrap;">

                                    <!-- VIEW -->
                                    <a href="{{ route('customers.show', $customer) }}"
                                    style="background: green; color: white; padding: 5px 10px; font-size: 12px; border-radius: 4px; text-decoration: none;">
                                        VIEW
                                    </a>

                                    <!-- EDIT -->
                                    <a href="{{ route('customers.edit', $customer) }}"
                                    style="background: blue; color: white; padding: 5px 10px; font-size: 12px; border-radius: 4px; text-decoration: none;">
                                        EDIT
                                    </a>

                                    <!-- DELETE -->
                                    <form action="{{ route('customers.destroy', $customer) }}"
                                        method="POST"
                                        style="margin: 0;">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                style="background: red; color: white; padding: 5px 10px; font-size: 12px; border-radius: 4px; border: none; cursor: pointer;">
                                            DELETE
                                        </button>
                                    </form>

                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="8" style="text-align: center; padding: 15px; color: gray;">
                                No clinic visit records found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</x-app-layout>
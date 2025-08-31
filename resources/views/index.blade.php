<x-layout>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Student List</h2>
        <a href="/students/create" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Add New Student</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Age</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Section</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Department</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($students as $student)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->age }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->section }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->department }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="/students/{{ $student->id }}/edit" class="text-yellow-600 hover:text-yellow-800 mr-3">Edit</a>
                            <form action="/students/{{ $student->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($students->isEmpty())
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mt-4">
            No students found. Please add some students.
        </div>
    @endif
</x-layout>
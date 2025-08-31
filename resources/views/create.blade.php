<x-layout>
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Student</h2>
    
    <form method="POST" action="/students" class="bg-white p-6 rounded shadow-md">
        @csrf
        
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
                   id="name" name="name" required>
        </div>
        
        <div class="mb-4">
            <label for="age" class="block text-gray-700 font-medium mb-2">Age</label>
            <input type="number" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
                   id="age" name="age" required>
        </div>
        
        <div class="mb-4">
            <label for="section" class="block text-gray-700 font-medium mb-2">Section</label>
            <input type="text" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
                   id="section" name="section" required>
        </div>
        
        <div class="mb-4">
            <label for="department" class="block text-gray-700 font-medium mb-2">Department</label>
            <select class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    id="department" name="department" required>
                <option value="">Select Department</option>
                <option value="CAS">CAS</option>
                <option value="CBME">CBME</option>
                <option value="CTE">CTE</option>
            </select>
        </div>
        
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Submit</button>
            <a href="/" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Cancel</a>
        </div>
    </form>
</x-layout>
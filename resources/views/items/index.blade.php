<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Items List</h1>

        @auth
        <div class="d-flex align-items-center">
            <span class="me-3 text-muted small">{{ auth()->user()->email }}</span>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-secondary btn-sm">Logout</button>
            </form>
        </div>
        @endauth
    </div>

    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Add Item</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Description</th>
                <th>Price</th><th>Quantity</th><th>Created At</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>${{ number_format($item->price, 2) }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this item?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tools Management</h1>

        <!-- Button to create a new tool -->
        <a href="{{ route('tools.create') }}" class="btn btn-primary mb-3">Create New Tool</a>

        <!-- Check if there are any tools to display -->
        @if ($tools->isEmpty())
            <p>No tools found. Create one!</p>
        @else
            <!-- Table to display tools -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tools as $tool)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tool->title }}</td>
                            <td>{{ $tool->slug }}</td>
                            <td>{{ $tool->created_at->format('Y-m-d') }}</td>
                            <td>
                                <!-- Button to edit the tool -->
                                <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-warning">Edit</a>
                                
                                <!-- Optionally, you can add a delete button as well -->
                                <form action="{{ route('tools.destroy', $tool->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

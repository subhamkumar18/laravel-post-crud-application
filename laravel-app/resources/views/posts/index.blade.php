@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
</div>

<form method="GET" action="{{ route('posts.index') }}" class="row g-3 mb-4">
    <div class="col-md-3">
        <select name="status" class="form-select">
            <option value="">-- Filter by Status --</option>
            @foreach ($allstatus as $key => $label)
                <option value="{{ $key }}" {{ request('status') === $key ? 'selected' : '' }}>
                {{ $label }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
    </div>
    <div class="col-md-3">
        <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-secondary">Apply Filters</button>
    </div>
</form>

@if($posts->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ ucfirst(str_replace('_', ' ', $post->status)) }}</td>
                    <td>{{ $post->due_date ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this Post?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@else
    <div class="alert alert-info">No tasks found.</div>
@endif
    @if($posts->count())
        {{ $posts->appends(request()->query())->links() }}
    @endif

@endsection

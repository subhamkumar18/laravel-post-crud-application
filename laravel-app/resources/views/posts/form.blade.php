<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title ?? '') }}">
    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $post->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" class="form-select @error('status') is-invalid @enderror">
        @foreach (\App\Models\Post::STATUSES as $key => $label)
            <option value="{{ $key }}" {{ old('status', $post->status ?? '') == $key ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
    @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label for="due_date" class="form-label">Due Date</label>
    <input type="date" name="due_date" class="form-control" value="{{ old('due_date', $post->due_date ?? '') }}">
</div>

<button type="submit" class="btn btn-success">Save</button>
<a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>

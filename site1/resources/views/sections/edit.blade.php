@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit {{ ucfirst($section->name) }} Section</h1>
    <form action="{{ route('admin.sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="10">{{ $section->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Save Changes</button>
    </form>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Sections</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
            <tr>
                <td>{{ ucfirst($section->name) }}</td>
                <td>
                    <a href="{{ route('admin.sections.edit', $section->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

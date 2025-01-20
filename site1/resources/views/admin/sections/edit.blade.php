@extends('layouts.app')

@section('content')
    <h1>Edit Section</h1>

    <form action="{{ route('admin.sections.update', $section) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Section Name</label>
            <input type="text" id="name" name="name" value="{{ $section->name }}" class="form-control" readonly>
        </div>

        @php 
            // Ensure $section->content is decoded properly into an array
            $content = json_decode(is_string($section->content) ? $section->content : json_encode($section->content), true);
        @endphp

        <div id="content-container">
            @foreach ($content as $key => $value)
                <div class="content-group border rounded p-3 mb-3">
                    <h4>{{ ucfirst($key) }}</h4>

                    @if (is_array($value))  <!-- If the value is an array (e.g., sub-elements like features) -->
                        @foreach ($value as $index => $subitem)
                            <div class="mb-3">
                                <label for="{{ $index }}" class="form-label">{{ ucfirst($index) }} {{ $key + 1 }}</label>
                                <textarea name="content[{{ $key }}][{{$index}}]" class="form-control" rows="3" required>{{ $subitem }}</textarea>
                            </div>
                        @endforeach
                    @else
                        <div class="mb-3">
                            <label for="{{ $key }}" class="form-label">{{ ucfirst($key) }}</label>
                            <input type="text" name="content[{{ $key }}]" class="form-control" value="{{ $value }}" required>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
@endsection

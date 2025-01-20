@extends('layouts.app')

@section('content')
    <h1>Create Section</h1>

    <form action="{{ route('admin.sections.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Section Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div id="content-container">
            <!-- Placeholder for dynamically added fields -->
        </div>

        <div class="mb-3">
            <button type="button" class="btn btn-secondary" id="add-field-btn">Add Field</button>
        </div>

        <button type="submit" class="btn btn-primary">Save Section</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const contentContainer = document.getElementById('content-container');
            const addFieldBtn = document.getElementById('add-field-btn');

            addFieldBtn.addEventListener('click', function () {
                const fieldIndex = contentContainer.children.length;

                // Create a new field group
                const fieldGroup = document.createElement('div');
                fieldGroup.classList.add('content-group', 'border', 'rounded', 'p-3', 'mb-3');

                // Create the key input
                const keyInputGroup = document.createElement('div');
                keyInputGroup.classList.add('mb-3');
                const keyLabel = document.createElement('label');
                keyLabel.innerText = 'Key';
                keyLabel.classList.add('form-label');
                const keyInput = document.createElement('input');
                keyInput.type = 'text';
                keyInput.name = `content[${fieldIndex}][key]`;
                keyInput.classList.add('form-control');
                keyInput.required = true;
                keyInputGroup.appendChild(keyLabel);
                keyInputGroup.appendChild(keyInput);

                // Create the value input
                const valueInputGroup = document.createElement('div');
                valueInputGroup.classList.add('mb-3');
                const valueLabel = document.createElement('label');
                valueLabel.innerText = 'Value';
                valueLabel.classList.add('form-label');
                const valueInput = document.createElement('input');
                valueInput.type = 'text';
                valueInput.name = `content[${fieldIndex}][value]`;
                valueInput.classList.add('form-control');
                valueInput.required = true;
                valueInputGroup.appendChild(valueLabel);
                valueInputGroup.appendChild(valueInput);

                // Create the remove button
                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.classList.add('btn', 'btn-danger', 'mt-2');
                removeBtn.innerText = 'Remove';
                removeBtn.addEventListener('click', function () {
                    contentContainer.removeChild(fieldGroup);
                });

                // Append inputs and button to the field group
                fieldGroup.appendChild(keyInputGroup);
                fieldGroup.appendChild(valueInputGroup);
                fieldGroup.appendChild(removeBtn);

                // Append the field group to the content container
                contentContainer.appendChild(fieldGroup);
            });
        });
    </script>
@endsection

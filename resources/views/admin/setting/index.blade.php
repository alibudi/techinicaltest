@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Settings</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSettingModal">Add Setting</button>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="settingsTable">
            @foreach($settings as $setting)
                <tr id="setting-{{ $setting->id }}">
                    <td>{{ $setting->id }}</td>
                    <td>{{ $setting->title }}</td>
                    <td>{{ $setting->image }}</td>
                    <td>{{ $setting->description }}</td>
                    <td>
                        <button class="btn btn-info editBtn" data-id="{{ $setting->id }}" data-bs-toggle="modal" data-bs-target="#editSettingModal">Edit</button>
                        <button class="btn btn-danger deleteBtn" data-id="{{ $setting->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Create Setting Modal -->
<div class="modal fade" id="createSettingModal" tabindex="-1" aria-labelledby="createSettingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="createSettingForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="createSettingModalLabel">Create Setting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="mb-3">
                        <label for="certificate" class="form-label">Certificate</label>
                        <input type="text" class="form-control" id="certificate" name="certificate" required>
                    </div>
                    <div class="mb-3">
                        <label for="desc1" class="form-label">Description 1</label>
                        <input type="text" class="form-control" id="desc1" name="desc1" required>
                    </div>
                    <div class="mb-3">
                        <label for="boarding" class="form-label">Boarding</label>
                        <input type="text" class="form-control" id="boarding" name="boarding" required>
                    </div>
                    <div class="mb-3">
                        <label for="desc2" class="form-label">Description 2</label>
                        <input type="text" class="form-control" id="desc2" name="desc2" required>
                    </div>
                    <div class="mb-3">
                        <label for="demand" class="form-label">Training</label>
                        <input type="text" class="form-control" id="demand" name="demand" required>
                    </div>
                    <div class="mb-3">
                        <label for="desc3" class="form-label">Description 3</label>
                        <input type="text" class="form-control" id="desc3" name="desc3" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Setting Modal -->
<div class="modal fade" id="editSettingModal" tabindex="-1" aria-labelledby="editSettingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editSettingForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSettingModalLabel">Edit Setting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_setting_id">
                    <div class="mb-3">
                        <label for="edit_title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="edit_title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_image" class="form-label">Image</label>
                        <input type="fi;e" class="form-control" id="edit_image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="edit_description"  cols="30" rows="10"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="edit_certificate" class="form-label">Certificate</label>
                        <input type="text" class="form-control" id="edit_certificate" name="certificate" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_desc1" class="form-label">Description 1</label>
                        <input type="text" class="form-control" id="edit_desc1" name="desc1" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_boarding" class="form-label">Boarding</label>
                        <input type="text" class="form-control" id="edit_boarding" name="boarding" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_desc2" class="form-label">Description 2</label>
                        <input type="text" class="form-control" id="edit_desc2" name="desc2" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_demand" class="form-label">Training</label>
                        <input type="text" class="form-control" id="edit_demand" name="demand" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_desc3" class="form-label">Description 3</label>
                        <input type="text" class="form-control" id="edit_desc3" name="desc3" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const createSettingForm = document.getElementById('createSettingForm');
        const editSettingForm = document.getElementById('editSettingForm');
        const settingsTable = document.getElementById('settingsTable');

        createSettingForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(createSettingForm);
            fetch('/settings', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.id) {
                    const newRow =`
                        <tr id="setting-${data.id}">
                            <td>${data.id}</td>
                            <td>${data.title}</td>
                            <td>${data.image}</td>
                            <td>${data.description}</td>
                            <td>
                                <button class="btn btn-info editBtn" data-id="${data.id}" data-bs-toggle="modal" data-bs-target="#editSettingModal">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                            </td>
                        </tr>`;
                    settingsTable.insertAdjacentHTML('beforeend', newRow);
                    createSettingForm.reset();
                    bootstrap.Modal.getInstance(document.getElementById('createSettingModal')).hide();
                    showAlert('Setting added successfully!', 'success');
                }
            });
        });

        editSettingForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const settingId = document.getElementById('edit_setting_id').value;
            const formData = new FormData(editSettingForm);
            formData.append('_method', 'PUT'); // Add method override for PUT
            fetch(`/settings/${settingId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(data => {
                if (data.id) {
                    const row = document.getElementById(`setting-${data.id}`);
                    row.innerHTML = `
                        <td>${data.id}</td>
                        <td>${data.title}</td>
                        <td>${data.image}</td>
                        <td>${data.description}</td>
                        <td>
                            <button class="btn btn-info editBtn" data-id="${data.id}" data-bs-toggle="modal" data-bs-target="#editsettingModal">Edit</button>
                            <button class="btn btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                        </td>
                    `;
                    bootstrap.Modal.getInstance(document.getElementById('editsettingModal')).hide();
                    showAlert('Setting updated successfully!', 'success');
                }
            });
        });

        settingsTable.addEventListener('click', function (e) {
            if (e.target.classList.contains('editBtn')) {
                const settingId = e.target.getAttribute('data-id');
                fetch(`/settings/${settingId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('edit_setting_id').value = data.id;
                    document.getElementById('edit_name').value = data.title;
                    document.getElementById('edit_video').value = data.image;
                    document.getElementById('edit_description').value = data.description;
                    document.getElementById('edit_certificate').value = data.cerficate;
                    document.getElementById('edit_desc1').value = data.desc1;
                    document.getElementById('edit_boarding').value = data.boarding;
                    document.getElementById('edit_desc2').value = data.desc2;
                    document.getElementById('edit_demand').value = data.demand;
                    document.getElementById('edit_desc2').value = data.desc2;
                });
            }

            if (e.target.classList.contains('deleteBtn')) {
                const settingId  = e.target.getAttribute('data-id');
                if (confirm('Are you sure you want to delete this settings?')) {
                    fetch(`/settings/${settingId }`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById(`setting-${settingId }`).remove();
                            showAlert('Setting deleted successfully!', 'success');
                        } else {
                            showAlert('Failed to delete setting!', 'danger');
                        }
                    });
                }
            }
        });

        function showAlert(message, type) {
            const alert = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                              ${message}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
            document.body.insertAdjacentHTML('beforeend', alert);
            setTimeout(() => {
                document.querySelector('.alert').remove();
            }, 3000); // Remove alert after 3 seconds
        }
    });
</script>
@endpush

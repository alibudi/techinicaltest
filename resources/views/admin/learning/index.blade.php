@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Learnings</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createLearningModal">Add Learning</button>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Video</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="learningsTable">
            @foreach($learnings as $learning)
                <tr id="learning-{{ $learning->id }}">
                    <td>{{ $learning->id }}</td>
                    <td>{{ $learning->name }}</td>
                    <td>{{ $learning->video }}</td>
                    <td>{{ $learning->description }}</td>
                    <td>
                        <button class="btn btn-info editBtn" data-id="{{ $learning->id }}" data-bs-toggle="modal" data-bs-target="#editLearningModal">Edit</button>
                        <button class="btn btn-danger deleteBtn" data-id="{{ $learning->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Create Learning Modal -->
<div class="modal fade" id="createLearningModal" tabindex="-1" aria-labelledby="createLearningModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="createLearningForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLearningModalLabel">Create Learning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Video</label>
                        <input type="text" class="form-control" id="video" name="video" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
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

<!-- Edit Learning Modal -->
<div class="modal fade" id="editLearningModal" tabindex="-1" aria-labelledby="editLearningModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editLearningForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLearningModalLabel">Edit Learning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_learning_id">
                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_video" class="form-label">Video</label>
                        <input type="text" class="form-control" id="edit_video" name="video" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="edit_description" name="description" required>
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
        const createLearningForm = document.getElementById('createLearningForm');
        const editLearningForm = document.getElementById('editLearningForm');
        const learningsTable = document.getElementById('learningsTable');

        createLearningForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(createLearningForm);
            fetch('/learnings', {
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
                    const newRow = `
                        <tr id="learning-${data.id}">
                            <td>${data.id}</td>
                            <td>${data.name}</td>
                            <td>${data.video}</td>
                            <td>${data.description}</td>
                            <td>
                                <button class="btn btn-info editBtn" data-id="${data.id}" data-bs-toggle="modal" data-bs-target="#editLearningModal">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                            </td>
                        </tr>
                    `;
                    learningsTable.insertAdjacentHTML('beforeend', newRow);
                    createLearningForm.reset();
                    bootstrap.Modal.getInstance(document.getElementById('createLearningModal')).hide();
                    showAlert('Learning added successfully!', 'success');
                }
            });
        });

        editLearningForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const learningId = document.getElementById('edit_learning_id').value;
            const formData = new FormData(editLearningForm);
            formData.append('_method', 'PUT'); // Add method override for PUT
            fetch(`/learnings/${learningId}`, {
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
                    const row = document.getElementById(`learning-${data.id}`);
                    row.innerHTML = `
                        <td>${data.id}</td>
                        <td>${data.name}</td>
                        <td>${data.video}</td>
                        <td>${data.description}</td>
                        <td>
                            <button class="btn btn-info editBtn" data-id="${data.id}" data-bs-toggle="modal" data-bs-target="#editLearningModal">Edit</button>
                            <button class="btn btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                        </td>
                    `;
                    bootstrap.Modal.getInstance(document.getElementById('editLearningModal')).hide();
                    showAlert('Learning updated successfully!', 'success');
                }
            });
        });

        learningsTable.addEventListener('click', function (e) {
            if (e.target.classList.contains('editBtn')) {
                const learningId = e.target.getAttribute('data-id');
                fetch(`/learnings/${learningId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('edit_learning_id').value = data.id;
                    document.getElementById('edit_name').value = data.name;
                    document.getElementById('edit_video').value = data.video;
                    document.getElementById('edit_description').value = data.description;
                });
            }

            if (e.target.classList.contains('deleteBtn')) {
                const learningId  = e.target.getAttribute('data-id');
                if (confirm('Are you sure you want to delete this learning?')) {
                    fetch(`/learnings/${learningId }`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById(`learning-${learningId }`).remove();
                            showAlert('Learning deleted successfully!', 'success');
                        } else {
                            showAlert('Failed to delete learning!', 'danger');
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

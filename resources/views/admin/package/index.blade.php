<!-- resources/views/packages/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Packages</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPackageModal">Add Package</button>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Package Name</th>
                <th>Price Per Month</th>
                <th>Max Users</th>
                <th>Max Class Options</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="packagesTable">
            @foreach($packages as $package)
                <tr id="package-{{ $package->id }}">
                    <td>{{ $package->id }}</td>
                    <td>{{ $package->package_name }}</td>
                    <td>{{ $package->price_per_month }}</td>
                    <td>{{ $package->max_users }}</td>
                    <td>{{ $package->max_class_options }}</td>
                    <td>
                        <button class="btn btn-info editBtn" data-id="{{ $package->id }}" data-bs-toggle="modal" data-bs-target="#editPackageModal">Edit</button>
                        <button class="btn btn-danger deleteBtn" data-id="{{ $package->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Create Package Modal -->
<div class="modal fade" id="createPackageModal" tabindex="-1" aria-labelledby="createPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="createPackageForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPackageModalLabel">Create Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="package_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="package_name" class="form-label">Package Name</label>
                        <input type="text" class="form-control" id="package_name" name="package_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price_per_month" class="form-label">Price Per Month</label>
                        <input type="number" step="0.01" class="form-control" id="price_per_month" name="price_per_month" required>
                    </div>
                    <div class="mb-3">
                        <label for="max_users" class="form-label">Max Users</label>
                        <input type="text" class="form-control" id="max_users" name="max_users" required>
                    </div>
                    <div class="mb-3">
                        <label for="max_users" class="form-label">Charge Users</label>
                        <input type="text" class="form-control" id="charge_users" name="charge_users" required>
                    </div>
                    <div class="mb-3">
                        <label for="max_class_options" class="form-label">Max Class Options</label>
                        <input type="text" class="form-control" id="max_class_options" name="max_class_options" required>
                    </div>
                    <div class="mb-3">
                        <label for="class_update_frequency" class="form-label">Class Update Frequency</label>
                        <input type="text" class="form-control" id="class_update_frequency" name="class_update_frequency">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="certificate_included" name="certificate_included" checked>
                        <label for="certificate_included" class="form-check-label">Certificate Included</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="free_consultation" name="free_consultation" checked>
                        <label for="free_consultation" class="form-check-label">Free Consultation</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="dedicated_assistant" name="dedicated_assistant" checked>
                        <label for="dedicated_assistant" class="form-check-label">Dedicated Assistant</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="full_support" name="full_support" checked>
                        <label for="full_support" class="form-check-label">Full Support</label>
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

<!-- Edit Package Modal -->
<div class="modal fade" id="editPackageModal" tabindex="-1" aria-labelledby="editPackageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editPackageForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPackageModalLabel">Edit Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_package_id">
                    <div class="mb-3">
                        <label for="edit_package_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_package_name" class="form-label">Package Name</label>
                        <input type="text" class="form-control" id="edit_package_name" name="package_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_price_per_month" class="form-label">Price Per Month</label>
                        <input type="number" step="0.01" class="form-control" id="edit_price_per_month" name="price_per_month" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_max_users" class="form-label">Max Users</label>
                        <input type="text" class="form-control" id="edit_max_users" name="max_users" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_max_users" class="form-label">Charge Users</label>
                        <input type="text" class="form-control" id="edit_charge_users" name="charge_users" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_max_class_options" class="form-label">Max Class Options</label>
                        <input type="text" class="form-control" id="edit_max_class_options" name="max_class_options" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_class_update_frequency" class="form-label">Class Update Frequency</label>
                        <input type="text" class="form-control" id="edit_class_update_frequency" name="class_update_frequency">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="edit_certificate_included" name="certificate_included">
                        <label for="edit_certificate_included" class="form-check-label">Certificate Included</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="edit_free_consultation" name="free_consultation">
                        <label for="edit_free_consultation" class="form-check-label">Free Consultation</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="edit_dedicated_assistant" name="dedicated_assistant">
                        <label for="edit_dedicated_assistant" class="form-check-label">Dedicated Assistant</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="edit_full_support" name="full_support">
                        <label for="edit_full_support" class="form-check-label">Full Support</label>
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
        const createPackageForm = document.getElementById('createPackageForm');
        const editPackageForm = document.getElementById('editPackageForm');
        const packagesTable = document.getElementById('packagesTable');

        createPackageForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(createPackageForm);
            fetch('/packages', {
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
                        <tr id="package-${data.id}">
                            <td>${data.id}</td>
                             <td>${data.name}</td>
                            <td>${data.package_name}</td>
                            <td>${data.price_per_month}</td>
                            <td>${data.max_users}</td>
                            <td>${data.max_class_options}</td>
                            <td>
                                <button class="btn btn-info editBtn" data-id="${data.id}" data-bs-toggle="modal" data-bs-target="#editPackageModal">Edit</button>
                                <button class="btn btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                            </td>
                        </tr>
                    `;
                    packagesTable.insertAdjacentHTML('beforeend', newRow);
                    createPackageForm.reset();
                    bootstrap.Modal.getInstance(document.getElementById('createPackageModal')).hide();
                    showAlert('Package added successfully!', 'success');
                }
            });
        });

        editPackageForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const packageId = document.getElementById('edit_package_id').value;
            const formData = new FormData(editPackageForm);
            formData.append('_method', 'PUT'); // Add method override for PUT
            fetch(`/packages/${packageId}`, {
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
                    const row = document.getElementById(`package-${data.id}`);
                    row.innerHTML = `
                        <td>${data.id}</td>
                        <td>${data.name}</td>
                        <td>${data.package_name}</td>
                        <td>${data.price_per_month}</td>
                        <td>${data.max_users}</td>
                        <td>${data.max_class_options}</td>
                        <td>
                            <button class="btn btn-info editBtn" data-id="${data.id}" data-bs-toggle="modal" data-bs-target="#editPackageModal">Edit</button>
                            <button class="btn btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                        </td>
                    `;
                    bootstrap.Modal.getInstance(document.getElementById('editPackageModal')).hide();
                    showAlert('Package updated successfully!', 'success');
                }
            });
        });

        packagesTable.addEventListener('click', function (e) {
            if (e.target.classList.contains('editBtn')) {
                const packageId = e.target.getAttribute('data-id');
                fetch(`/packages/${packageId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('edit_package_id').value = data.id;
                    document.getElementById('edit_name').value = data.name;
                    document.getElementById('edit_package_name').value = data.package_name;
                    document.getElementById('edit_price_per_month').value = data.price_per_month;
                    document.getElementById('edit_max_users').value = data.max_users;
                    document.getElementById('edit_charge_users').value = data.charge_users;
                    document.getElementById('edit_max_class_options').value = data.max_class_options;
                    document.getElementById('edit_class_update_frequency').value = data.class_update_frequency;
                    document.getElementById('edit_certificate_included').checked = data.certificate_included;
                    document.getElementById('edit_free_consultation').checked = data.free_consultation;
                    document.getElementById('edit_dedicated_assistant').checked = data.dedicated_assistant;
                    document.getElementById('edit_full_support').checked = data.full_support;
                });
            }

            if (e.target.classList.contains('deleteBtn')) {
                const packageId = e.target.getAttribute('data-id');
                if (confirm('Are you sure you want to delete this package?')) {
                    fetch(`/packages/${packageId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById(`package-${packageId}`).remove();
                            showAlert('Package deleted successfully!', 'success');
                        } else {
                            showAlert('Failed to delete package!', 'danger');
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

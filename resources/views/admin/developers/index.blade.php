@extends('layouts.app')

@section('content')
    @include('section.breadcrumb')

    <!--User Dashboard-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('section.sidebar')
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Developer(s)</h3>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif
                            <div class="manged-ad table-responsive userprof-tab">
                                <table class="table table-bordered table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Developer</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($developers as $developer)
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox"
                                                            value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            @if ($developer->logo)
                                                                <img src="{{ asset('storage/' . $developer->logo) }}"
                                                                    alt="{{ $developer->name }}">
                                                            @else
                                                                <img src="{{ asset('assets/images/products/h1.png') }}"
                                                                    alt="No Logo">
                                                            @endif
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ms-4 p-0 mt-2">
                                                                <a href="javascript:void(0);" class="text-dark">
                                                                    <h4 class="font-weight-semibold">{{ $developer->name }}
                                                                    </h4>
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-clock-o me-1"></i>
                                                                    {{ $developer->created_at->format('M-d-Y, H:i') }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ Str::limit($developer->description, 50) }}</td>
                                                <td>
                                                    @if ($developer->is_active)
                                                        <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                    @else
                                                        <a href="javascript:void(0);"
                                                            class="badge badge-danger">Inactive</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- Edit --}}
                                                    {{-- Edit --}}
                                                    <button class="btn btn-success btn-sm text-white"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"
                                                        onclick="openEditModal(
                                                            '{{ $developer->id }}',
                                                            '{{ addslashes($developer->name) }}',
                                                            '{{ addslashes($developer->description) }}',
                                                            '{{ $developer->logo ? asset('storage/' . $developer->logo) : '' }}',
                                                            '{{ $developer->is_active }}'
                                                        )">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>

                                                    {{-- Delete --}}
                                                    <button type="button" class="btn btn-danger btn-sm text-white"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"
                                                        onclick="openDeleteModal('{{ $developer->id }}', '{{ addslashes($developer->name) }}')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>

                                                    {{-- View --}}
                                                    {{-- <a class="btn btn-primary btn-sm text-white" data-bs-toggle="tooltip"
                                                        data-bs-original-title="View">
                                                        <i class="fa fa-eye"></i>
                                                    </a> --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No developers found.</td>
                                            </tr>
                                        @endforelse

                                        <tr>
                                            <td colspan="5">
                                                {{ $developers->links() }}
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Edit Developer Modal --}}
    <div class="modal fade" id="editDeveloperModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Developer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form method="POST" action="" enctype="multipart/form-data" id="editDeveloperForm">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        {{-- Error Messages --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Name --}}
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="edit_name"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="form-group">
                            <label class="form-label text-dark">Description</label>
                            <textarea name="description" id="edit_description" class="form-control @error('description') is-invalid @enderror"
                                rows="6" placeholder="Text here..">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Current Logo --}}
                        <div class="form-group">
                            <label class="form-label text-dark">Current Logo</label><br>
                            <img id="edit_current_logo" src="" alt="Current Logo"
                                style="width:80px; height:80px; object-fit:cover; border-radius:5px;" class="mb-2">
                        </div>

                        {{-- New Logo Upload --}}
                        <div class="form-group">
                            <div class="p-2 border mb-4">
                                <label class="form-label text-dark">Upload New Logo <small class="text-muted">(leave empty
                                        to keep current)</small></label>
                                <input type="file" name="logo" id="edit_logo"
                                    class="form-control @error('logo') is-invalid @enderror"
                                    accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                                @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Active Checkbox --}}
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="is_active" id="edit_is_active" class="custom-control-input"
                                    value="1" />
                                <span class="custom-control-label text-dark ps-2">Active</span>
                            </label>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Delete Confirmation Modal --}}
    <div class="modal fade" id="deleteDeveloperModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger text-center">
                        <i class="fa fa-trash-o me-2"></i>Delete Developer
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="fa fa-exclamation-triangle text-danger" style="font-size: 3rem;"></i>
                    <p class="mt-3 mb-0">Are you sure you want to delete</p>
                    <strong id="delete_developer_name" class="text-danger"></strong>
                    <p class="text-muted mt-2 mb-0"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <form method="POST" id="deleteDeveloperForm" action="" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash-o me-1"></i> Yes, Delete
                        </button>
                    </form>

                    <button type="button" class="btn btn-dark ms-2" data-bs-dismiss="modal">
                        <i class="fa fa-times me-1"></i> Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--/User Dashboard-->

    @push('scripts')
        <script>
            // Edit Modal
            function openEditModal(id, name, description, logo, isActive) {
                document.getElementById('editDeveloperForm').action = '/admin/developers/' + id + '/update';
                document.getElementById('edit_name').value = name;
                document.getElementById('edit_description').value = description;

                const logoImg = document.getElementById('edit_current_logo');
                if (logo) {
                    logoImg.src = logo;
                    logoImg.style.display = 'block';
                } else {
                    logoImg.style.display = 'none';
                }

                document.getElementById('edit_is_active').checked = isActive == '1';

                var modal = new bootstrap.Modal(document.getElementById('editDeveloperModal'));
                modal.show();
            }

            // Delete Modal
            function openDeleteModal(id, name) {
                document.getElementById('delete_developer_name').textContent = name;
                document.getElementById('deleteDeveloperForm').action = '/admin/developers/' + id + '/delete';

                var modal = new bootstrap.Modal(document.getElementById('deleteDeveloperModal'));
                modal.show();
            }
        </script>

    @endsection

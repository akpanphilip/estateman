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
                            <h3 class="card-title">Estates</h3>
                        </div>
                        <div class="card-body">
                            {{-- Success Message --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <table class="table table-bordered table-hover mb-0 text-nowrap table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Developer</th>
                                        <th>Estate</th>
                                        <th>Location</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($estates as $estate)
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="checkbox"
                                                        value="checkbox">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </td>

                                            {{-- Developer --}}
                                            <td>
                                                <div class="media mt-0 mb-0 d-flex justify-content-center align-items-center gap-1">
                                                    {{-- <div class="card-aside-img">
                                                        @if ($estate->image)
                                                            <img src="{{ asset('storage/' . $estate->image) }}"
                                                                alt="{{ $estate->name }}">
                                                        @else
                                                            <img src="{{ asset('assets/images/products/h1.png') }}"
                                                                alt="No Image">
                                                        @endif
                                                    </div> --}}
                                                   
                                                        <a href="javascript:void(0);" class="text-dark media-body">
                                                            <h4 class="font-weight-semibold">
                                                                {{ $estate->developer->name }}</h4>
                                                        </a>
                                                
                                                </div>
                                            </td>

                                            {{-- Name --}}
                                            <td>{{ $estate->name }}</td>

                                            {{-- Location --}}
                                            <td>{{ $estate->location ?? 'N/A' }}</td>

                                            {{-- Description --}}
                                            <td>{{ Str::limit($estate->description, 50) }}</td>

                                            {{-- Status --}}
                                            <td>
                                                @if ($estate->is_active)
                                                    <a href="javascript:void(0);" class="badge badge-success">Active</a>
                                                @else
                                                    <a href="javascript:void(0);" class="badge badge-danger">Inactive</a>
                                                @endif
                                            </td>

                                            {{-- Actions --}}
                                            <td>
                                                {{-- Edit --}}
                                                <button class="btn btn-success btn-sm text-white" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"
                                                    onclick="openEditModal(
                            '{{ $estate->id }}',
                            '{{ $estate->developer_id }}',
                            '{{ addslashes($estate->name) }}',
                            '{{ addslashes($estate->location) }}',
                            '{{ addslashes($estate->description) }}',
                            '{{ $estate->image ? asset('storage/' . $estate->image) : '' }}',
                            '{{ $estate->is_active }}'
                        )">
                                                    <i class="fa fa-pencil"></i>
                                                </button>

                                                {{-- Delete --}}
                                                <button type="button" class="btn btn-danger btn-sm text-white"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Delete"
                                                    onclick="openDeleteModal('{{ $estate->id }}', '{{ addslashes($estate->name) }}')">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No estates found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            {{-- Pagination --}}
                            <div class="mt-3">
                                {{ $estates->links() }}
                            </div>


                            {{-- Edit Estate Modal --}}
                            <div class="modal fade" id="editEstateModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Estate</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form method="POST" action="" enctype="multipart/form-data"
                                            id="editEstateForm">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul class="mb-0">
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                {{-- Developer --}}
                                                <div class="form-group">
                                                    <label class="form-label text-dark">Developer</label>
                                                    <select name="developer_id" id="edit_developer_id"
                                                        class="form-control select2 form-select @error('developer_id') is-invalid @enderror">
                                                        <option value="">Select Developer</option>
                                                        @foreach ($developers as $developer)
                                                            <option value="{{ $developer->id }}">{{ $developer->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('developer_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Name --}}
                                                <div class="form-group">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" name="name" id="edit_name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        placeholder="Name">
                                                    @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Location --}}
                                                <div class="form-group">
                                                    <label class="form-label">Location</label>
                                                    <input type="text" name="location" id="edit_location"
                                                        class="form-control @error('location') is-invalid @enderror"
                                                        placeholder="Location">
                                                    @error('location')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Description --}}
                                                <div class="form-group">
                                                    <label class="form-label text-dark">Description</label>
                                                    <textarea name="description" id="edit_description" class="form-control @error('description') is-invalid @enderror"
                                                        rows="4" placeholder="Text here.."></textarea>
                                                    @error('description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Current Image --}}
                                                <div class="form-group">
                                                    <label class="form-label text-dark">Current Image</label><br>
                                                    <img id="edit_current_image" src="" alt="Current Image"
                                                        style="width:80px; height:80px; object-fit:cover; border-radius:5px;"
                                                        class="mb-2">
                                                </div>

                                                {{-- New Image Upload --}}
                                                <div class="form-group">
                                                    <div class="p-2 border mb-4">
                                                        <label class="form-label text-dark">Upload New Image
                                                            <small class="text-muted">(leave empty to keep current)</small>
                                                        </label>
                                                        <input type="file" name="image" id="edit_image"
                                                            class="form-control @error('image') is-invalid @enderror"
                                                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                                                        @error('image')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Active --}}
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="is_active" id="edit_is_active"
                                                            class="custom-control-input" value="1" />
                                                        <span class="custom-control-label text-dark ps-2">Active</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="modal-footer ">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Delete Confirmation Modal --}}
                            <div class="modal fade" id="deleteEstateModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger">
                                                <i class="fa fa-trash-o me-2"></i>Delete Estate
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <i class="fa fa-exclamation-triangle text-danger"
                                                style="font-size: 3rem;"></i>
                                            <p class="mt-3 mb-0">Are you sure you want to delete</p>
                                            <strong id="delete_estate_name" class="text-danger"></strong>
                                            <p class="text-muted mt-2 mb-0"><small>This action cannot be undone.</small>
                                            </p>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center align-items-center">
                                            <form method="POST" id="deleteEstateForm" action="" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash-o me-1"></i>Yes, Delete
                                                </button>
                                            </form>
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                                                <i class="fa fa-times me-1"></i>Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            function openEditModal(id, developerId, name, location, description, image, isActive) {
                document.getElementById('editEstateForm').action = '/admin/estates/' + id + '/update';
                document.getElementById('edit_developer_id').value = developerId;
                document.getElementById('edit_name').value = name;
                document.getElementById('edit_location').value = location;
                document.getElementById('edit_description').value = description;

                const img = document.getElementById('edit_current_image');
                if (image) {
                    img.src = image;
                    img.style.display = 'block';
                } else {
                    img.style.display = 'none';
                }

                document.getElementById('edit_is_active').checked = isActive == '1';

                var modal = new bootstrap.Modal(document.getElementById('editEstateModal'));
                modal.show();
            }

            function openDeleteModal(id, name) {
                document.getElementById('delete_estate_name').textContent = name;
                document.getElementById('deleteEstateForm').action = '/admin/estates/' + id + '/delete';

                var modal = new bootstrap.Modal(document.getElementById('deleteEstateModal'));
                modal.show();
            }
        </script>
    @endpush
@endsection

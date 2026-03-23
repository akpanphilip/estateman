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

                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Image</th>
                                        <th>Estate</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Plot Size</th>
                                        <th>Category</th>
                                        <th>Links</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($prototypes as $prototype)
                                        <tr>
                                            {{-- Checkbox --}}
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="checkbox"
                                                        value="checkbox">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </td>

                                            {{-- First Image --}}
                                            <td>
                                                <div
                                                    class="media mt-0 mb-0 d-flex justify-content-center align-items-center">
                                                    @if ($prototype->coverImage)
                                                        <img src="{{ asset('storage/' . $prototype->coverImage->image) }}"
                                                            alt="{{ $prototype->name }}"
                                                            style="width:60px; height:60px; object-fit:cover; border-radius:5px;">
                                                    @else
                                                        <img src="{{ asset('assets/images/products/h1.png') }}"
                                                            alt="No Image"
                                                            style="width:60px; height:60px; object-fit:cover; border-radius:5px;">
                                                    @endif
                                                </div>
                                            </td>

                                            {{-- Estate --}}
                                            <td>
                                                {{ $prototype->estate->name }}<br>
                                                <small class="text-muted">{{ $prototype->estate->developer->name }}</small>
                                            </td>

                                            {{-- Name --}}
                                            <td>{{ $prototype->name }}</td>

                                            {{-- Description --}}
                                            <td>{{ Str::limit($prototype->description, 40) }}</td>

                                            {{-- Price --}}
                                            <td>
                                                @if ($prototype->price)
                                                    ₦{{ number_format($prototype->price) }}
                                                @else
                                                    <span class="text-muted">N/A</span>
                                                @endif
                                            </td>

                                            {{-- Plot Size --}}
                                            <td>{{ $prototype->plot_size ?? 'N/A' }}</td>

                                            {{-- Category --}}
                                            <td>
                                                @if ($prototype->category === 'featured')
                                                    <span class="badge badge-warning">Featured</span>
                                                @elseif($prototype->category === 'new_listing')
                                                    <span class="badge badge-info">New Listing</span>
                                                @else
                                                    <span class="badge badge-secondary">Regular</span>
                                                @endif
                                            </td>

                                            {{-- Links --}}
                                            <td>
                                                @if ($prototype->facebook_link)
                                                    <a href="{{ $prototype->facebook_link }}" target="_blank"
                                                        class="btn btn-sm btn-primary me-1" title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                @endif
                                                @if ($prototype->instagram_link)
                                                    <a href="{{ $prototype->instagram_link }}" target="_blank"
                                                        class="btn btn-sm btn-danger me-1" title="Instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                @endif
                                                @if ($prototype->whatsapp_number)
                                                    <a href="https://wa.me/{{ $prototype->whatsapp_number }}"
                                                        target="_blank" class="btn btn-sm btn-success me-1"
                                                        title="WhatsApp">
                                                        <i class="fa fa-whatsapp"></i>
                                                    </a>
                                                @endif
                                                @if ($prototype->phone_number)
                                                    <a href="tel:{{ $prototype->phone_number }}"
                                                        class="btn btn-sm btn-info" title="Phone">
                                                        <i class="fa fa-phone"></i>
                                                    </a>
                                                @endif
                                                @if (
                                                    !$prototype->facebook_link &&
                                                        !$prototype->instagram_link &&
                                                        !$prototype->whatsapp_number &&
                                                        !$prototype->phone_number)
                                                    <span class="text-muted">None</span>
                                                @endif
                                            </td>

                                            {{-- Status --}}
                                            <td>
                                                @if ($prototype->is_active)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>

                                            {{-- Actions --}}
                                            <td>
                                                {{-- Edit --}}
                                                <a href="{{ route('admin.prototypes.edit', $prototype->id) }}"
                                                    class="btn btn-success btn-sm text-white" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>

                                                {{-- Manage Images --}}
                                                <a href="{{ route('admin.prototypes.images', $prototype->id) }}"
                                                    class="btn btn-info btn-sm text-white" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Manage Images">
                                                    <i class="fa fa-picture-o"></i>
                                                </a>

                                                {{-- Delete --}}
                                                <button type="button" class="btn btn-danger btn-sm text-white"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Delete"
                                                    onclick="openDeleteModal('{{ $prototype->id }}', '{{ addslashes($prototype->name) }}')">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="11" class="text-center">No prototypes found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            {{-- Pagination --}}
                            <div class="mt-3">
                                {{ $prototypes->links() }}
                            </div>

                            {{-- Delete Confirmation Modal --}}
                            <div class="modal fade" id="deletePrototypeModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger">
                                                <i class="fa fa-trash-o me-2"></i>Delete Prototype
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <i class="fa fa-exclamation-triangle text-danger" style="font-size: 3rem;"></i>
                                            <p class="mt-3 mb-0">Are you sure you want to delete</p>
                                            <strong id="delete_prototype_name" class="text-danger"></strong>
                                            <p class="text-muted mt-2 mb-0">
                                                <small>This will also delete all images. This action cannot be
                                                    undone.</small>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                <i class="fa fa-times me-1"></i>Cancel
                                            </button>
                                            <form method="POST" id="deletePrototypeForm" action=""
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash-o me-1"></i>Yes, Delete
                                                </button>
                                            </form>
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
            function openDeleteModal(id, name) {
                document.getElementById('delete_prototype_name').textContent = name;
                document.getElementById('deletePrototypeForm').action = '/admin/prototypes/' + id + '/delete';
                var modal = new bootstrap.Modal(document.getElementById('deletePrototypeModal'));
                modal.show();
            }
        </script>
    @endpush
@endsection

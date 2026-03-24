@extends('layouts.app')

@section('content')
    @include('section.breadcrumb')

    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('section.sidebar')
                <div class="col-xl-9 col-lg-12 col-md-12">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Banners</h3>
                            <div class="card-options">
                                <a href="{{ route('admin.banners.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus me-1"></i> Add Banner
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                @forelse($banners as $banner)
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="card shadow-sm h-100">
                                            <div style="position: relative;">
                                                <img src="{{ asset('storage/' . $banner->image) }}"
                                                    alt="{{ $banner->title }}" class="card-img-top"
                                                    style="height: 150px; object-fit: cover;">
                                                {{-- Status Badge --}}
                                                <span class="badge badge-{{ $banner->is_active ? 'success' : 'danger' }}"
                                                    style="position: absolute; top: 8px; left: 8px;">
                                                    {{ $banner->is_active ? 'Active' : 'Inactive' }}
                                                </span>
                                            </div>
                                            <div class="card-body p-2">
                                                <h6 class="mb-1">{{ $banner->title }}</h6>
                                                @if ($banner->link)
                                                    <small class="text-muted text-truncate d-block">
                                                        <i class="fa fa-link me-1"></i>
                                                        {{ $banner->link }}
                                                    </small>
                                                @endif
                                                <small class="text-muted">
                                                    <i class="fa fa-sort me-1"></i>Order: {{ $banner->order }}
                                                </small>
                                            </div>
                                            <div class="card-footer p-2 text-center">
                                                <form method="POST"
                                                    action="{{ route('admin.banners.delete', $banner->id) }}"
                                                    class="d-inline" onsubmit="return confirm('Delete this banner?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm w-100">
                                                        <i class="fa fa-trash-o me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center py-5">
                                        <i class="fa fa-image text-muted" style="font-size: 3rem;"></i>
                                        <p class="text-muted mt-2">No banners yet.</p>
                                        <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">
                                            <i class="fa fa-plus me-1"></i> Add First Banner
                                        </a>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                        <div class="card-footer">
                            {{ $banners->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

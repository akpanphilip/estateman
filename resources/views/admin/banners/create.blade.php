@extends('layouts.app')

@section('content')
    @include('section.breadcrumb')

    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('section.sidebar')
                <div class="col-xl-9 col-lg-12 col-md-12">

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add New Banner</h3>
                            <div class="card-options">
                                <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-arrow-left me-1"></i> Back to Banners
                                </a>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('admin.banners.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">

                                    {{-- Title --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Banner Title</label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Banner Title" value="{{ old('title') }}">
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Link --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Click Link <small
                                                    class="text-muted">(optional)</small></label>
                                            <input type="url" name="link"
                                                class="form-control @error('link') is-invalid @enderror"
                                                placeholder="https://example.com" value="{{ old('link') }}">
                                            @error('link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Order --}}
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Display Order</label>
                                            <input type="number" name="order"
                                                class="form-control @error('order') is-invalid @enderror" placeholder="0"
                                                value="{{ old('order', 0) }}">
                                            @error('order')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Image Upload with Preview --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group p-2 border">
                                            <label class="form-label text-dark">Banner Image</label>
                                            <input type="file" name="image" id="bannerImage"
                                                class="form-control @error('image') is-invalid @enderror"
                                                accept=".jpg,.jpeg,.png,.webp" onchange="previewBanner(event)">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="text-muted">JPG, JPEG, PNG, WEBP. Max 2MB.</small>

                                            {{-- Preview --}}
                                            <div id="bannerPreview"
                                                style="display:none; margin-top: 15px; position: relative; display: none;">
                                                <img id="previewImg" src=""
                                                    style="width: 100%; max-height: 200px; object-fit: cover; border-radius: 8px;"
                                                    alt="Banner Preview">
                                                <button type="button" onclick="removeBanner()"
                                                    style="position: absolute; top: 8px; right: 8px; border-radius: 50%; width: 28px; height: 28px; padding: 0; line-height: 1;"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Active --}}
                                    <div class="col-lg-12">
                                        <div class="checkbox checkbox-info">
                                            <label class="custom-control mt-4 custom-checkbox">
                                                <input type="checkbox" name="is_active" class="custom-control-input"
                                                    value="1" {{ old('is_active', true) ? 'checked' : '' }} />
                                                <span class="custom-control-label text-dark ps-2">Active</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-upload me-1"></i> Upload Banner
                                </button>
                                <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        function previewBanner(event) {
            const file = event.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('bannerPreview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        }

        function removeBanner() {
            document.getElementById('bannerImage').value = '';
            document.getElementById('previewImg').src = '';
            document.getElementById('bannerPreview').style.display = 'none';
        }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    @include('section.breadcrumb')

    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('section.sidebar')
                <div class="col-xl-9 col-lg-12 col-md-12">

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    {{-- Error Messages --}}
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
                            <h3 class="card-title">
                                Add Images — {{ $prototype->name }}
                            </h3>
                            <div class="card-options">
                                <span class="badge badge-{{ $images->count() >= 5 ? 'danger' : 'success' }}">
                                    {{ $images->count() }}/5 images uploaded
                                </span>
                            </div>
                        </div>

                        {{-- Upload Form --}}
                        @if ($images->count() < 5)
                            <form method="POST" action="{{ route('admin.prototypes.images.store', $prototype->id) }}"
                                enctype="multipart/form-data" id="uploadForm">
                                @csrf

                                <div class="card-body">

                                    {{-- Drop Zone --}}
                                    <div class="form-group">
                                        <label class="form-label text-dark">
                                            Upload Images
                                            <small class="text-muted">
                                                ({{ 5 - $images->count() }} slot(s) remaining)
                                            </small>
                                        </label>

                                        <div id="dropZone"
                                            style="border: 2px dashed #ccc; border-radius: 8px; padding: 30px; text-align: center; cursor: pointer;"
                                            onclick="document.getElementById('imageInput').click()">
                                            <i class="fa fa-cloud-upload" style="font-size: 2.5rem; color: #ccc;"></i>
                                            <p class="mt-2 mb-0 text-muted">
                                                Click to select or drag & drop images here
                                            </p>
                                            <small class="text-muted">
                                                JPG, JPEG, PNG, WEBP — Max 2MB each
                                            </small>
                                        </div>


                                        <input type="file" id="imageInput" name="images[]" accept=".jpg,.jpeg,.png,.webp"
                                            multiple style="display: none;" onchange="previewImages(event)">
                                        @error('images')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                        @error('images.*')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Preview Area --}}
                                    <div id="previewArea" class="row mt-3" style="display: none !important;">
                                        <div class="col-12 mb-2">
                                            <h6>Selected Images Preview
                                                <small class="text-muted" id="previewCount"></small>
                                            </h6>
                                        </div>
                                        <div id="previewGrid" class="row px-2"></div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id="uploadBtn" disabled>
                                        <i class="fa fa-upload me-1"></i>
                                        Upload Images
                                    </button>
                                    <a href="{{ route('admin.prototypes.index') }}" class="btn btn-secondary ms-2">
                                        Skip & Finish
                                    </a>
                                </div>
                            </form>
                        @else
                            <div class="card-body">
                                <div class="alert alert-warning mb-0">
                                    <i class="fa fa-exclamation-triangle me-2"></i>
                                    Maximum of 5 images reached. Delete an image below to upload a new one.
                                </div>
                            </div>
                        @endif

                        {{-- Existing Uploaded Images --}}
                        @if ($images->count() > 0)
                            <div class="card-body border-top">
                                <h5 class="mb-3">
                                    <i class="fa fa-picture-o me-2"></i>Uploaded Images
                                </h5>
                                <div class="row">
                                    @foreach ($images as $image)
                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                                            <div class="card h-100 shadow-sm">
                                                <div style="position: relative;">
                                                    <img src="{{ asset('storage/' . $image->image) }}"
                                                        alt="Prototype Image" class="card-img-top"
                                                        style="height: 150px; object-fit: cover;">
                                                    {{-- Delete button overlay --}}
                                                    <form method="POST"
                                                        action="{{ route('admin.prototypes.images.delete', $image->id) }}"
                                                        onsubmit="return confirm('Delete this image?')"
                                                        style="position: absolute; top: 5px; right: 5px;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            style="border-radius: 50%; width: 28px; height: 28px; padding: 0; line-height: 1;"
                                                            title="Delete image">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="card-body p-2 text-center">
                                                    <small class="text-muted">
                                                        <i class="fa fa-sort me-1"></i>Order: {{ $image->order }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        const maxSlots = {{ 5 - $images->count() }};
        let selectedFiles = [];

        // Handle file input change
        function previewImages(event) {
            const files = Array.from(event.target.files);
            processFiles(files);
        }

        // Handle drag over
        function handleDragOver(event) {
            event.preventDefault();
            document.getElementById('dropZone').style.borderColor = '#5c67f2';
            document.getElementById('dropZone').style.backgroundColor = '#f0f1ff';
        }

        // Handle drag leave
        function handleDragLeave(event) {
            document.getElementById('dropZone').style.borderColor = '#ccc';
            document.getElementById('dropZone').style.backgroundColor = '';
        }

        // Handle drop
        function handleDrop(event) {
            event.preventDefault();
            handleDragLeave(event);
            const files = Array.from(event.dataTransfer.files);
            processFiles(files);
        }

        // Process selected files
        function processFiles(files) {
            // Limit to available slots
            if (selectedFiles.length >= maxSlots) {
                alert('You can only upload ' + maxSlots + ' more image(s).');
                return;
            }

            files.forEach(file => {
                if (selectedFiles.length >= maxSlots) return;

                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/webp'];
                if (!validTypes.includes(file.type)) {
                    alert(file.name + ' is not a valid image type.');
                    return;
                }

                // Validate file size (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert(file.name + ' exceeds the 2MB limit.');
                    return;
                }

                selectedFiles.push(file);
            });

            updatePreview();
            updateFileInput();
        }

        // Update preview grid
        function updatePreview() {
            const previewArea = document.getElementById('previewArea');
            const previewGrid = document.getElementById('previewGrid');
            const previewCount = document.getElementById('previewCount');
            const uploadBtn = document.getElementById('uploadBtn');

            previewGrid.innerHTML = '';

            if (selectedFiles.length === 0) {
                previewArea.style.setProperty('display', 'none', 'important');
                uploadBtn.disabled = true;
                return;
            }

            previewArea.style.setProperty('display', 'flex', 'important');
            previewCount.textContent = '(' + selectedFiles.length + ' selected)';
            uploadBtn.disabled = false;

            selectedFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const col = document.createElement('div');
                    col.className = 'col-sm-6 col-md-4 col-lg-3 mb-3';
                    col.innerHTML = `
                    <div class="card shadow-sm" style="position: relative;">
                        <img src="${e.target.result}"
                            class="card-img-top"
                            style="height: 130px; object-fit: cover; border-radius: 5px 5px 0 0;"
                            alt="Preview"
                        >
                        <button
                            type="button"
                            onclick="removeFile(${index})"
                            style="position: absolute; top: 5px; right: 5px; border-radius: 50%; width: 28px; height: 28px; padding: 0; line-height: 1;"
                            class="btn btn-danger btn-sm"
                            title="Remove"
                        >
                            <i class="fa fa-times"></i>
                        </button>
                        <div class="card-body p-1 text-center">
                            <small class="text-muted text-truncate d-block" style="max-width: 100px; margin: 0 auto;">
                                ${file.name}
                            </small>
                            <small class="text-muted">
                                ${(file.size / 1024).toFixed(1)} KB
                            </small>
                        </div>
                    </div>
                `;
                    previewGrid.appendChild(col);
                };
                reader.readAsDataURL(file);
            });
        }

        // Remove a file from selection
        function removeFile(index) {
            selectedFiles.splice(index, 1);
            updatePreview();
            updateFileInput();
        }

        // Sync selectedFiles back to the file input
        function updateFileInput() {
            const dataTransfer = new DataTransfer();
            selectedFiles.forEach(file => dataTransfer.items.add(file));
            document.getElementById('imageInput').files = dataTransfer.files;
        }
    </script>
@endpush

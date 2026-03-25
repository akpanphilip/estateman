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
                            <h3 class="card-title">Create Estate</h3>
                        </div>
                        {{-- Success Message --}}
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.estates.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">

                                    {{-- Developer --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Developer</label>
                                            <select name="developer_id"
                                                class="form-control select2 form-select @error('developer_id') is-invalid @enderror">
                                                <option value="">Select Developer</option>
                                                @foreach ($developers as $developer)
                                                    <option value="{{ $developer->id }}"
                                                        {{ old('developer_id') == $developer->id ? 'selected' : '' }}>
                                                        {{ $developer->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('developer_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Name --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Location --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Location</label>
                                            <input type="text" name="location"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="Location" value="{{ old('location') }}">
                                            @error('location')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Description</label>
                                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                placeholder="Text here..">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Image Upload --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="p-2 border mb-4 form-group">
                                            <label class="form-label text-dark">Upload Image</label>
                                            <input type="file" name="image"
                                                class="form-control @error('image') is-invalid @enderror"
                                                accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Active Checkbox --}}
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
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="{{ route('admin.estates.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->

    @push('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('#description'), {
                    toolbar: [
                        'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                        'blockQuote', 'insertTable', 'undo', 'redo'
                    ],
                })
                .catch(error => console.error(error));
        </script>
    @endpush
@endsection

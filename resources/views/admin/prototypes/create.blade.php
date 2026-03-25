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
                            <h3 class="card-title">Create Prototype</h3>
                        </div>
                        {{-- Success Message --}}
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.prototypes.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">

                                    {{-- Estate --}}
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Estate</label>
                                            <select name="estate_id"
                                                class="form-control select2 form-select @error('estate_id') is-invalid @enderror">
                                                <option value="">Select Estate</option>
                                                @foreach ($estates as $estate)
                                                    <option value="{{ $estate->id }}"
                                                        {{ old('estate_id') == $estate->id ? 'selected' : '' }}>
                                                        {{ $estate->name }} ({{ $estate->developer->name }})
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('estate_id')
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

                                    {{-- Description --}}
                                    {{-- <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Description</label>
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4"
                                                placeholder="Text here..">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}
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


                                    {{-- Price & Plot Size --}}
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Price</label>
                                            <input type="number" name="price"
                                                class="form-control @error('price') is-invalid @enderror"
                                                placeholder="Price" value="{{ old('price') }}">
                                            @error('price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Plot Size</label>
                                            <input type="text" name="plot_size"
                                                class="form-control @error('plot_size') is-invalid @enderror"
                                                placeholder="e.g 600 sqm" value="{{ old('plot_size') }}">
                                            @error('plot_size')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Location</label>
                                            <input type="text" name="location"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="e.g Lekki Phase 1, Lagos"
                                                value="{{ old('location', $prototype->location ?? '') }}">
                                            @error('location')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Category --}}
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Category</label>
                                            <select name="category"
                                                class="form-control select2 form-select @error('category') is-invalid @enderror">
                                                <option value="">Select Category</option>
                                                @foreach (\App\Models\Prototype::CATEGORIES as $value => $label)
                                                    <option value="{{ $value }}"
                                                        {{ old('category') == $value ? 'selected' : '' }}>
                                                        {{ $label }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Phone & WhatsApp --}}
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" name="phone_number"
                                                class="form-control @error('phone_number') is-invalid @enderror"
                                                placeholder="Phone Number" value="{{ old('phone_number') }}">
                                            @error('phone_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">WhatsApp Number</label>
                                            <input type="text" name="whatsapp_number"
                                                class="form-control @error('whatsapp_number') is-invalid @enderror"
                                                placeholder="WhatsApp Number" value="{{ old('whatsapp_number') }}">
                                            @error('whatsapp_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Facebook & Instagram --}}
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Facebook Link</label>
                                            <input type="url" name="facebook_link"
                                                class="form-control @error('facebook_link') is-invalid @enderror"
                                                placeholder="https://facebook.com/..."
                                                value="{{ old('facebook_link') }}">
                                            @error('facebook_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Instagram Link</label>
                                            <input type="url" name="instagram_link"
                                                class="form-control @error('instagram_link') is-invalid @enderror"
                                                placeholder="https://instagram.com/..."
                                                value="{{ old('instagram_link') }}">
                                            @error('instagram_link')
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
                                <button type="submit" class="btn btn-primary">
                                    Create & Add Images →
                                </button>
                                <a href="{{ route('admin.prototypes.index') }}" class="btn btn-secondary ms-2">Cancel</a>
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

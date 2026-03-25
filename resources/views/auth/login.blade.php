@extends('layouts.auth')

@section('content')
    <div class="page page-h">
        <div class="page-content z-index-10">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                        <div class="single-page w-100 p-0">
                            <div class="wrapper wrapper2">
                                {{-- <form id="forgotpsd" class="card-body">
										<div class="text-center mb-4 ">
											<span class="avatar avatar-xxl  brround cover-image" data-bs-image-src="../assets/images/faces/male/25.jpg"></span>
										</div>
										<span class="m-4 d-none d-lg-block text-center">
											<span class="text-dark"><strong>Rubin Carmody</strong></span>
										</span>
										<div class="passwd">
											<input type="password" name="password">
											<label>Password</label>
										</div>
										<a href="javascript:void(0);" class="btn btn-primary btn-block">Unlock</a>
									</form> --}}

                                <form method="POST" action="{{ route('login') }}" class="card-body" tabindex="500">
                                    @csrf

                                    <div class="smllogo py-4">
                                        <img src="{{ asset('assets/images/brand/favicon.png') }}" alt="">
                                    </div>
                                    <h3 class="mt-4">Login</h3>

                                    <div class="mail">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            autocomplete="email">
                                        <label>Mail or Username</label>
                                        @error('email')
                                            <span class="text-danger small text-left py-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="passwd">
                                        <input type="password" name="password" autocomplete="current-password">
                                        <label>Password</label>
                                        @error('password')
                                            <span class="text-danger small text-left py-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="submit">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

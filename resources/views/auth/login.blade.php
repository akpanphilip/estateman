@extends('layouts.auth')

@section('content')
    <section class="sptb mt-9">
        <div class="container">
            <div class="row">
                <div class="single-page">
                    <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                        <div class="wrapper wrapper2">
                            <form method="POST" action="{{ route('login') }}" class="card-body" tabindex="500">
                                @csrf

                                <div class="smllogo py-4">
                                    <img src="../assets/images/brand/logo.png" class="mobile-light-logo" width="120"
                                        alt="" />
                                    <img src="../assets/images/brand/logo1.png" class="mobile-dark-logo" width="120"
                                        alt="" />
                                </div>
                                <h3 class="mt-4">Login</h3>

                                <div class="mail">
                                    <input type="email" name="email" value="{{ old('email') }}" autocomplete="email">
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
    </section>
@endsection

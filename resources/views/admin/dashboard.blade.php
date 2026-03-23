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
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Updated Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->
@endsection

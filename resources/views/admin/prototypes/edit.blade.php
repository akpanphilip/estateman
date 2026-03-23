@extends('layouts.app')

@section('content')
    @include('section.breadcrumb')

    <!--User Dashboard-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('section.sidebar')
                <div class="col-xl-9 col-lg-12 col-md-12">
                
                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->
@endsection

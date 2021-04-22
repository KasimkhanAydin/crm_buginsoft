@extends('admin.layouts.layout')

@section('sidebar')
    @include('admin.layouts.admin_sidebar')
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>@yield('form_title')</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            @yield('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

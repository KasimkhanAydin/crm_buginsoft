@extends('admin.layouts.layout')

@section('sidebar')
    @include('admin.layouts.admin_sidebar')
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>@yield('table_title')</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                @yield('table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

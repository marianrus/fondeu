@include('layouts.admin-header');

{{-- @yield('content') --}}

@include('layouts.admin-navbar')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                @yield('title')
                <div class="pull-right">
                    <a href="{{ URL::previous() }}" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Inapoi
                    </a>
                </div>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @yield('content')
        </div>
    </div>
</div>
@include('layouts.admin-footer')
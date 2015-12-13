@include('layouts.frontend.master-header')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="tabbable">
                @include('frontend.account.menu-tab')

                <div class="tab-content">
                    @include('frontend.account.general-tab')

                    @include('frontend.account.edit-info-tab')

                    @include('frontend.account.opportunities-tab')

                    @include('frontend.account.partners-tab')

                    @include('frontend.account.courses-tab')
                </div>
            </div>
        </div>
    </div>
@stop

@include('layouts.frontend.master-content')

@include('layouts.frontend.master-footer')

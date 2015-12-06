
<div id="panel_courses" class="tab-pane fade">

    <div class="row pull-left margin-bottom">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <button class="btn btn-green btn-block" id="btn-add-course" type="submit">
                Adauga <i class="fa fa-plus"></i>
            </button>
        </div>
    </div>

    <div class="divider_block margin_top_20"></div>
    @include('frontend.account.courses-tab.courses-tab-add-panel')

    @include('frontend.account.courses-tab.courses-tab-courses-table')

</div>
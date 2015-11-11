
@if(isset($paginate))
<div class="col-md-12 col-md-offset-5 margin_top_20">
    <ul class="pagination clearfix page_margin_top_section">
        <li class="left">
            <a href="{{$paginate->previousPageUrl()}}" title="">&nbsp;</a>
        </li>
       @for($i=1; $i <= ceil($paginate->count() / Config::get('fondnews.results_per_page')); $i++)
            <li @if($paginate->currentPage() == $i) class="selected" @endif>
                <a href="?page={{$i}}">{{$i}}</a>
            </li>
        @endfor
        <li class="right">
            <a href="{{$paginate->nextPageUrl()}}" title="">&nbsp;</a>
        </li>
    </ul>
</div>
@endif
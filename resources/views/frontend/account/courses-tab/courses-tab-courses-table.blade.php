<div class="row clearfix" id="courses-table">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover margin_top_20" id="projects">
            <thead>
            <tr>
                <th class="center">
                    <div class="checkbox-table">
                        <label>
                            <input type="checkbox" class="flat-grey selectall">
                        </label>
                    </div>
                </th>
                <th>Numele</th>
                <th class="hidden-xs">Incepe</th>
                <th>Sfarseste</th>
                <th class="hidden-xs">%Comp</th>
                <th class="hidden-xs center">Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
                <td class="center">
                    <div class="checkbox-table">
                        <label>
                            <input type="checkbox" class="flat-grey foocheck">
                        </label>
                    </div>
                </td>
                <td>{{$course->course_name}}</td>
                <td class="hidden-xs">{{$course->course_from}}</td>
                <td>{{$course->course_to}}</td>
                <td class="hidden-xs">
                    <div class="progress active progress-xs">
                        <div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"
                             class="progress-bar progress-bar-warning">
                            <span class="sr-only"> 70% Complete (danger)</span>
                        </div>
                    </div>
                </td>
                <td class="center hidden-xs">
                    @if($course->course_on_site)
                    <span class="label label-success">Online</span>
                    @else
                    <span class="label label-danger">Offline</span>
                    @endif
                </td>
                <td class="center">
                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                        <a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i
                                class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i
                                class="fa fa-share"></i></a>
                        <a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i
                                class="fa fa-times fa fa-white"></i></a>
                    </div>
                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                        <div class="btn-group">
                            <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <span class="caret"></span>
                            </a>
                            <ul role="menu" class="dropdown-menu dropdown-dark pull-right">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">
                                        <i class="fa fa-share"></i> Share
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
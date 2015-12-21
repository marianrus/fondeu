<div class="row clearfix" id="courses-table">
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover margin_top_20" id="projects">
            <thead>
            <tr>
                <th>Numele</th>
                <th class="hidden-xs">Incepe</th>
                <th>Sfarseste</th>
                <th class="hidden-xs">Status</th>
                <th class="hidden-xs center"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr data-course-id="{{$course->course_id}}">
                <td>{{$course->course_name}}</td>
                <td class="hidden-xs">{{$course->course_from}}</td>
                <td>{{$course->course_to}}</td>
                <td class="center hidden-xs">
                    @if($course->course_on_site)
                    <span class="label label-success">Online</span>
                    @else
                    <span class="label label-danger">Offline</span>
                    @endif
                </td>
                <td class="center">
                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                        <a href="#" class="btn btn-light-blue tooltips edit-course" data-placement="top" data-original-title="Edit"><i
                                class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-red tooltips delete-course" data-placement="top" data-original-title="Remove"><i
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
                                        <i class="fa fa-edit edit-course"></i> Edit
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="#">
                                        <i class="fa fa-times delete-course"></i> Remove
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
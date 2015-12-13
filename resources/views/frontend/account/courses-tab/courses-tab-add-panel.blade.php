<div class="row clearfix margin_top_20" id="courses-add-panel">
    <div class="col-md-12 margin_top_20">
        <div class="panel panel-default">
<!--            <div class="panel-heading">-->
<!--                Nou curs-->
<!--            </div>-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form  action="/courses-admin-form" method="post" id="new-course-add">
                            {!! csrf_field() !!}
                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i>Corectati erorile
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Validarea a fost facuta cu success!
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Informatii Curs</h3>
                                <hr>
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="control-label">
                                    Numele cursului <span class="symbol required"></span>
                                </label>
                                <input class="form-control" name="course_name" id="course_name" placeholder="Numele cursului">
                            </div>

                            <div class="form-group col-lg-6">
                                    <label>Categoria </label>
                                    <select name="category_course_id" data-placeholder="Categoria"  class="form-control select2-select select-container">
                                        <option></option>
                                        @foreach($categories as $cat)
                                             <option  value="{{$cat->category_course_id}}">{{$cat->category_course_name}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Pret</label>
                                <input class="form-control " name="price" placeholder="Pret">
                            </div>

                            <div class="col-md-12">
                                <h3>Derulare</h3>
                                <hr>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Incepe</label>
                                <input class="form-control date-picker" name="course_from" placeholder="Inceput">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Se termina</label>
                                <input class="form-control date-picker" name="course_to" placeholder="Se termina">
                            </div>

                            <div class="row"></div>
                            <div class="col-md-12">
                                <h3>Locatie</h3>
                                <hr>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Judet</label>
                                <input class="form-control county select-container" name="county_name">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Localitate</label>
                                <input class="form-control city select-container" name="city_name" placeholder="Oras">
                            </div>

                            <div class="divider_block">&nbsp;</div>

                            <div class="form-group">
                                <label for="course_description-add-panel">Descriere</label>
                                <textarea class="form-control tiny-mce" name="course_description"  rows="50"></textarea>
                            </div>
                    </div>
                    <div class="col-lg-3">
                        <h1>Vizibilitate</h1>
                        <div class="form-group ">
                            <label>Vizibil pe site</label>
                            <input type="checkbox" name="onSite" class="make-switch" data-on-color="success" data-off-color="danger" data-on-text="Da" data-off-text="Nu" checked>
                        </div>
                        <div class="form-group "
                            <label>Vizibil pe Facebook</label>
                            <input type="checkbox" name="onFacebook" class="make-switch" data-on-color="success" data-off-color="danger" data-on-text="Da" data-off-text="Nu" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
<!--        <div class="col-md-8">-->
<!--          -->
<!--        </div>-->
        <div class="col-md-4 pull-right">
            <button class="btn btn-green btn-block" id="successSweetAlert" type="submit">
                Salvati <i class="fa fa-arrow-circle-right"></i>
            </button>
        </div>
    </div>
</div>
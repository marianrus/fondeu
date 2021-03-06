
$(document).ready(function(){
    resetPanelStates();
    initTooltips();
//    initTinyMce();
    initDatePicker();
    initBootstrapSwitch();
    handleButtonCourse();
    editTabCountyAndCity();
    addTabCountyAndCity();
    handleEditCourse();
    dateRangePicker();
    initCitySelect2();
    handleDeleteCourse();
    validateForm('#new-course-add');
    $(".currency").maskMoney();
});



function initTooltips(){
    if ($(".tooltips").length) {
        $('.tooltips').tooltip();
    }
}
function handleButtonCourse(){
    $('#btn-add-course').click(function () {
        toggleCoursePanel();
        App.Helper.FrontendHelper.refreshForm('#new-course-add');
    });
}

function toggleCoursePanel(){
    $('#courses-table').fadeToggle("slow", "linear");
    $('#courses-add-panel').fadeToggle("slow", "linear");
}

function editTabCountyAndCity(){
    /**
     * edit info tab
     */
    App.Plugins.select2Handler(
        '#edit-county-id',
        '',
        '/helper/counties',
        'county',
        null,
        {
            text : 'county_name',
            id   :  'county_id'
        }
    );


    $('#edit-county-id').on('change', function(){
        var countyId = $('#edit-county-id').val();
        App.Plugins.select2Handler(
            '#edit-city-id',
            '',
            '/helper/cities',
            'city_name',
            {
                county_id : countyId
            },
            {
                text : 'city_name',
                id   : 'city_id'
            }
        );
    });

}

function addTabCountyAndCity(){
    /**
     * course add tab
     */
    App.Plugins.select2Handler(
        '#add-county-id',
        '',
        '/helper/counties',
        'county',
        null,
        {
            text : 'county_name',
            id   :  'county_id'
        }
    );

    $('#add-county-id').on('change',function(){
        initCitySelect2();
    });
}

function initCitySelect2(){
    App.Plugins.select2Handler(
        '#add-city-id',
        '',
        '/helper/cities',
        'city_name',
        {
            county_id : $('#add-county-id').val()
        },
        {
            text : 'city_name',
            id   : 'city_id'
        }
    );
}

function dateRangePicker()
{
    $('.date-range').daterangepicker({
        language : 'ro'
    });
}

function initTinyMce(){
    tinymce.init({
        selector: ".tiny-mce",
        theme: "modern",
        height : "480",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
    });
}
function initDatePicker(){
    $('.date-picker').datepicker();
}
function initBootstrapSwitch(){
    $('.make-switch').bootstrapSwitch();
}

function handleEditCourse(){

    var element  = '.edit-course';

    $(element).click(function(e){
      var  courseId = $(e.currentTarget).closest('tr').data('course-id');
        App.Helper.ajaxCall(
            '/curs/' + courseId +'?format=json',
            'GET',
            function (r) {
                App.Helper.FrontendHelper.fillForm('#new-course-add' , r);
                toggleCoursePanel();
            },
            function (e) {
                alert('error');
            }
        );
    });
}
function handleDeleteCourse(){

    var element  = '.delete-course';

    $(element).click(function(e){
      var parentElement = $(e.currentTarget).closest('tr');
      var  courseId = parentElement.data('course-id');

        swal({ title: "Sunteti siguri ca vreti sa stergeti cursul?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sterge",
            closeOnConfirm: true,
            cancelButtonText : 'Anuleaza'
        }, function(){
            App.Helper.ajaxCall(
                '/curs/' + courseId +'?format=json',
                'Delete',
                function (r) {
                    if(r == 'success'){
                        parentElement.fadeOut("slow");
                        parentElement.remove();
                    }
                },
                function (e) {
                    alert('error');
                }
            );
        });
    });
}

function displayEditForm(data){
    data = JSON.stringify(data);
    var form = $('#new-course-add');
}

function resetPanelStates()
{
    $('.nav-tabs li').click(function(e){
       var panel =  $(e.currentTarget).children().attr('href');

        switch (panel){

            case '#panel_courses':
                $('#courses-table').show();
                $('#courses-add-panel').hide();
            default : break;
        }
    });
}
function validateForm(element){

      var  rules = {
            course_name : {
                minlength : 3,
                required:true
            },
            category_course_id : {
                required:true
            },
            price : {
                required:true,
                min     : 1,
                decimal : true
            },
            county_id : {
                required:true
            },
            city_id   :{
                required:true
            },
            course_description : {
                required  : true,
                minlength : 50
            }
        };
     var messages = {
            course_name : {
                minlength : 'Va rog specificati numele cursului',
                required  : 'Numele cursului este obligatoriu'
            },
            price : {
                min       : 'Pretul trebuie sa fie minim 1',
                required  : 'Pretul cursului este obligatoriu',
                digits    : 'Pretul trebuie sa fie un numar pozitiv'
            },
            category_course_id : 'Categoria este obligatorie',
            county_id : 'Judetul este obligatoriu',
            city_id   : 'Orasul este obligatoriu',
            course_description : {
                required :  'Descrierea este obligatorie',
                minlength :  'Descrierea trebuie sa aibe minim 50 carctere'
            }
        };

    App.Helper.validateForm(element, rules, messages);
}
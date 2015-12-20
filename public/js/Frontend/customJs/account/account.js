
$(document).ready(function(){

    initTooltips();
//    initTinyMce();
    initDatePicker();
    initBootstrapSwitch();
    initSweetAlert();
    handleButtonCourse();
    editTabCountyAndCity();
    addTabCountyAndCity();
    handleEditCourse();
    dateRangePicker();
});



function initTooltips(){
    if ($(".tooltips").length) {
        $('.tooltips').tooltip();
    }
//    $('.popovers').popover();
}
function handleButtonCourse(){
    $('#btn-add-course').click(function () {
        toggleCoursePanel();
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
        var countyId = $('#add-county-id').val();
        App.Plugins.select2Handler(
            '#add-city-id',
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
function initSweetAlert(){
    $("#successSweetAlert").on("click", function (e) {
        swal("Cursul a fost salvat", "", "success")

        e.preventDefault();
    });


}

/**
 * Validation of new course add
 */
//$.validate();
//jQuery('#new-course-add').validate({
//    errorElement    : 'span',
//    errorClass      : 'help-block',
//    errorPlacement  : function(error, element){
//        error.insertAfter(element);
//    }
//});

function handleEditCourse(){

    var element  = '.edit-course';

    $(element).click(function(e){
      var  courseId = $(e.currentTarget).closest('tr').data('course-id');
        App.Helper.ajaxCall(
            '/curs/' + courseId +'?format=json',
            'GET',
            function (r) {
//                displayEditForm(r);
//                App.Helper.FrontendHelper.fillForm('#new-course-add' ,JSON.stringify(r));
                App.Helper.FrontendHelper.fillForm('#new-course-add' , r);
                toggleCoursePanel();
            },
            function (e) {
                alert('error');
            }
        );
    });
}

function displayEditForm(data){
    data = JSON.stringify(data);
    var form = $('#new-course-add');


}


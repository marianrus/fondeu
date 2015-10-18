$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#dataTables-example').DataTable({
        responsive: true
    });
    App.Helper.formatArticleDescription('.article-description');

    $('#project_start_at').datepicker();
    $('#project_ends_at').datepicker();
});


$('.category-td').click(function(){
    var categoryId = $(this).parent().data('category-id');
    window.location.href = '/category-admin/' +categoryId;
});

$('#category-edit').click(function(){
    $('#fieldsetId').removeAttr('disabled');
    $('#category-disabledTextarea').prop('disabled', false);
    $('#category-disabledInput').prop('disabled', false).focus();
    $('#category-save').show();
    $('#category-edit').hide();
    $('#category-cancel').show();
});

$('#category-cancel').click(function(){
    $('#fieldsetId').attr('disabled');
    $('#category-edit').show();
    $('#category-save').hide();
    $('#category-cancel').hide();
});

function categoryDelete(categoryId){
    App.Dialog.confirm(
        'Esti sigur ca vrei sa stergi categoria?',
         function (){
             App.Helper.ajaxCall(
                 '/category-admin/'+ categoryId,
                 'DELETE',
                 function(){
                     App.Dialog.alert('Categoria a fost stearsa cu success!!');
                     $('#category-'+categoryId).remove();

                 },
                 function(){
                     App.Dialog.alert('Categoria nu a putut fi stearsa deoarece exista articole care apartin categoriei!');
                 }
         )}
    );
}

function deleteArticle(articleId){
    App.Dialog.confirm(
        'Esti sigur ca vrei sa stergi articolul?',
        function(){
            App.Helper.ajaxCall(
                '/articles-admin/'+ articleId,
                'DELETE',
                function(){
                    App.Dialog.alert(
                        'Articolul a fost stears cu success!!',
                        $('#article-'+articleId).remove()
                    )
                },
                function(){
                    App.Dialog.alert(
                        'Articolul nu a putu fi sters!'
                    );
                }
            );
        }
    );
}
function projectDelete(projectId){
    App.Dialog.confirm(
        'Esti sigur ca vrei sa stergi Proiectul?',
        function(){
            App.Helper.ajaxCall(
                '/eu-project-admin/'+ projectId,
                'DELETE',
                function(){
                    App.Dialog.alert(
                        'Proiectul a fost sters cu success!!',
                        $('#project-'+projectId).remove()
                    )
                },
                function(){
                    App.Dialog.alert(
                        'Proiectul nu a putut fi sters!'
                    );
                }
            );
        }
    );
}
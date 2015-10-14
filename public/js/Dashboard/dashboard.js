$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#dataTables-example').DataTable({
        responsive: true
    });
    App.Helper.formatArticleDescription();
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

$('.category-delete').click(function(){
    var categoryId = $(this).closest('tr').data('category-id');
    vex.dialog.confirm({
        message: 'Esti sigur ca vrei sa stergi categoria?',
        callback : function(value){
            if(value){
                $.ajax({
                   url : '/category-admin/'+ categoryId,
                   type : 'DELETE',
                    dataType : 'json',
                   success : function(data){
                       vex.dialog.alert({
                           message:'Categoria a fost stearsa cu success!!'
                       })
                   },
                    error : function(data){
                       vex.dialog.alert({
                           message:'Categoria nu a putut fi stearsa deoarece exista articole care apartin categoriei!'
                       })
                    }
                });
            }
        }
    });

});

function deleteArticle(articleId){
    vex.dialog.confirm({
        message: 'Esti sigur ca vrei sa stergi articolul?',
        callback : function(value){
            if(value){
                $.ajax({
                    url : '/articles-admin/'+ articleId,
                    type : 'DELETE',
                    dataType : 'json',
                    success : function(data){
                        vex.dialog.alert({
                            message:'Articolul a fost stears cu success!!'
                        });
                        $('#article-'+articleId).remove();
                    },
                    error : function(data){
                        vex.dialog.alert({
                            message:'Categoria nu a putut fi stearsa deoarece exista articole care apartin categoriei!'
                        })
                    }
                });
            }
        }
    });

}

(function(){

   window.App = {
       Helper : {}
   }

    App.Helper = {

        formatDescription : function(element){
            var self     = this;
            $(element).each(function(k, v){
                var truncatedLink = self.truncateAndBuildLink($(v).text());
                $(v).text(truncatedLink);
            });
        },
        truncateAndBuildLink : function(string){
            var noOfChar = 50;
            return string.length > noOfChar
                ?  string.substr(0,noOfChar-1) +' ...'
                : string;
        },

        FrontendHelper : {

            fillPostBox : function(r){
                var  liPost          =  $('<li>').attr('class', 'post');
                var  divPostContent  =  $('<div>').attr('class','post_content');
                var  h2WithNumber    =  $('<h2>').attr('class','with_number');
                var  aName           =  $('<a>',{
                    href : 'curs/' + r.course_id,
                    title: r.course_name,
                    text : r.course_name
                })
                var aCommNo      = $('<a>',{
                    class : 'comments_number',
                    href  : 'asdadadadada',
                    title : 'vizualizari',
                    text : r.viewed
                })
                var spanArrow = $('<span>',{
                    class : 'arrow_comments'
                })

                var ulPostDetails = $('<ul>',{
                    class : 'post_details'

                })
                    .append(
                        $('<li>',{
                            class : 'category'
                        }).append(
                                $('<a>',{
                                    href : '/categorie/'+ r.category_course_id,
                                    title : r.category_course_name,
                                    text : r.category_course_name
                                })
                            )
                    )
                    .append(
                        $('<li>',{
                                class : 'date',
                                text   : '10:11 PM, Feb 02'
                            }
                        )
                    )
                var courseDescription = $('<p>',{
                    class: 'course-description',
                    text : r.course_description_short
                });

                var CourseLocation = $('<p>',{
                    class : 'pull-left'
                }).append(
                        $('<span>',{
                            class:'glyphicon glyphicon-map-marker',
                            text : r.county_name + ', ' + r.city_name
                        })
                    )

                var readMore = $('<a>',{
                    class : 'read_more',
                    href : 'post_quote.html',
                    title : 'Citeste'
                })

                return  liPost
                        .append(divPostContent
                        .append(h2WithNumber.append(aName).append(aCommNo).append(spanArrow))
                        .append(ulPostDetails)
                        .append(courseDescription)
                        .append(CourseLocation)
                        .append(readMore));
            },
            /**
             *
             */
            fillForm : function(element, data){
              $(element +' *').filter(':input, select textarea').each(function(k,e){
                  var el = $(e);
                   if($.inArray(data[0] , el.attr('name'))){
                       el.val(data[0][el.attr('name')]);
                   }

                  if(el.hasClass('select-container')){
                      if(el.attr('id')){
                          var elementId = el.attr('id');
                          $('#'+elementId).select2('data',{
                              text : data[0][el.attr('name')]
                          });
                      }
                  }
              });
            },

            refreshForm : function(element){
                $(element +' *').filter(':input, select textarea').each(function(k,e){
                    var el = $(e);
                    el.val('');
                    if(el.hasClass('select-container')){
                        if(el.attr('id')){
                            var elementId = el.attr('id');
                            $('#'+elementId).select2('data',{
                                text :''
                            });
                        }
                    }
                });
            }
        },

        /**
         *
         * @param element
         * @param rulesToApply object
         * @param messagesToRules object
         */
        validateForm : function(element, rulesToApply, messagesToRules){

            $.validator.addMethod("dataRange", function () {
                if ($("#dd").val() != "" && $("#mm").val() != "" && $("#yyyy").val() != "") {
                    return true;
                } else {
                    return false;
                }
            }, 'Please select a day, month, and year');
            var form = $(element);
            var errorHandler   = $('.errorHandler', form);
            var successHandler = $('.successHandler', form);

            form.validate({
                errorElement    : 'span',
                errorClass      : 'help-block',
                errorPlacement  : function(error, element){
                    if(element.attr('type') == 'radio' || element.attr('type') =='checkbox'){
                        error.insertAfter($(element).closest('.form-group').children('div').children().last());
                    } else {
                        error.insertAfter(element);
                    }
                },
                ignore:"",
                rules       : rulesToApply,
                messages    : messagesToRules,
                invalidHandler : function(event, validator){
                    successHandler.hide();
                    errorHandler.show();
                },
                highlight : function(element){
                    $(element).closest('.help-block').removeClass('valid');
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
//                    errorHandler.show();
//                    successHandler.hide();
                },
                unhighlight : function(element){
                    $(element).closest('.form-group').removeClass('has-error');
//                    successHandler.show();
//                    errorHandler.hide();
                },
                success : function(label, element){
                    label.addClass('help-block valid');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
                },
                submitHandler: function (form, event) {
                    event.preventDefault();
                    swal("Cursul a fost salvat", "", "success")
                    successHandler.show();
                    errorHandler.hide();
                    setTimeout(function(){
                        successHandler.hide();
                    },1000)
                }
            });
        },

        /**
         *
         * @param url
         * @param type
         * @param successCallback on success
         * @param errorCallback   on error
         */
        ajaxCall : function(url, type,successCallback,errorCallback,data, loading){

            if(loading === true){
                var beforeSendCallback = function(){$('.loading').show()}
                var completeCallback   = function(){ setTimeout(function(){$('.loading').hide()},500)}
            }

            if(!type){
                type = 'GET'
            }
            $.ajax({
                url      : url,
                type     : type,
                dataType : 'json',
                data     : data,
                success : successCallback,
                error   : errorCallback,
                beforeSend : beforeSendCallback /*== undefined ? function(){} : beforeSendCallback*/,
                complete   : completeCallback  /* || function(){}*/
            });
        }
    };
    App.Dialog = {

        /**
         *
         * @param message
         */
        alert : function(message){
            vex.dialog.alert({message:message});
        },

        /**
         *
         * @param message
         * @param callbackFunction to be executed if value is true
         */
        confirm : function(message,callbackFunction){
            vex.dialog.confirm({
                message: message,
                callback : function(value){
                    if(value){
                        callbackFunction();
                    }
                }
            });
        }
    },


    App.Plugins = {

        /**
         * Example1: App.Plugins.select2Handler(
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
         *
         *
         *
         * @param identifier
         * @param placeholder
         * @param ajaxUrl
         * @param termKey
         * @param extraTerm
         * @param resultsMap
         * @param stringToShortMsg
         */
        select2Handler : function(identifier, placeholder, ajaxUrl, termKey, extraTerm, resultsMap, stringToShortMsg){

            extraTerm = extraTerm instanceof Object ? extraTerm : {};
            $(identifier).select2({
                allowClear : true,
                placeholder         : placeholder,
                formatInputTooShort : function(){
                        return stringToShortMsg || "Introduceti cel putin un caracter"
                },
                minimumInputLength: 1,
                ajax : {
                    url         : ajaxUrl,
                    dataType    : 'json',
                    delay       : 250,
                    quietMillis : 50,
                    data        : function(term){
                         extraTerm[termKey] = term;
                        return extraTerm;

                    },
                    results     : function(data){
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text:item[resultsMap.text],
                                    id:  item[resultsMap.id]
                                }
                            })
                        }
                    }
                }
            });
        }
    }
}());

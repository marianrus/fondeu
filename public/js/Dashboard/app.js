
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

            fillPostBox : function(r){debugger;
                var  liPost       =  $('<li>').attr('class', 'post');
                var  divPostContent  =  $('<div>').attr('class','post_content');
                var  h2WithNumber =  $('<h2>').attr('class','with_number');
                var  aName        =  $('<a>',{
                    href : 'posrasdada.com',
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
            }
        },
        /**
         *
         * @param url
         * @param type
         * @param successCallback on success
         * @param errorCallback   on error
         */
        ajaxCall : function(url, type,successCallback,errorCallback,data){
            if(!type){
                type = 'GET'
            }
            $.ajax({
                url      : url,
                type     : type,
                dataType : 'json',
                data     : data,
                success : successCallback,
                error   : errorCallback
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
    }
}());

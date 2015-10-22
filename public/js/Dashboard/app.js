
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
        /**
         *
         * @param url
         * @param type
         * @param successCallback on success
         * @param errorCallback   on error
         */
        ajaxCall : function(url, type,successCallback,errorCallback){
            if(!type){
                type = 'GET'
            }
            $.ajax({
                url      : url,
                type     : type,
                dataType : 'json',

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

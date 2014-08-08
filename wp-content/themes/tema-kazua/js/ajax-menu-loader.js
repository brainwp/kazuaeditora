/**
 * Created by root on 08/08/14.
 */
(function ($) {
    'use strict';
    $('.is-menu-ajax a').on('click',function(e){
        if($('#ajax-menu-load-div').attr('data-ajax') == 'true'){
            e.preventDefault();
            var _href = $(this).attr('href') + '?AjaxMenuLoader=true';
            $('#ajax-menu-load-div').load(_href);
        }
    })
}(jQuery));
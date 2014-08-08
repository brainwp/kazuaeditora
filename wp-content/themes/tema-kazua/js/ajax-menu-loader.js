/**
 * Created by root on 08/08/14.
 */
(function ($) {
    'use strict';
    $('.nav-menu li a').on('click',function(e){
        var _attr = $(this).attr('data-menu-ajax');
        if($('#ajax-menu-load-div').attr('data-ajax') == 'true' && _attr == 'true'){
            e.preventDefault();
            var _href = $(this).attr('href') + '?AjaxMenuLoader=true';
            $('#ajax-menu-load-div').load(_href);
        }
    })
}(jQuery));
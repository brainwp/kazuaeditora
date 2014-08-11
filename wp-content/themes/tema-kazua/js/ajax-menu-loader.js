/**
 * Created by root on 08/08/14.
 */
(function ($) {
    'use strict';
    $('.is-menu-ajax a').on('click',function(e){
        if($('#ajax-menu-load-div').attr('data-ajax') == 'true'){
            e.preventDefault();
            var _href = $(this).attr('href') + '?AjaxMenuLoader=true';
            var _img =  $(this).attr('data-load-image');

            $('#ajax-menu-load-div').append('<img src="' + _img + '">');
            $.get(_href, function( data ) {
                $('#ajax-menu-load-div').html(data);
            });

        }
    })
}(jQuery));
(function($){

    $('.sidebar_menu a').on('click', function(e){
        if($(this).next().is('ul')  ){
            e.preventDefault();
            $('.sidebar_menu li').each(element => {
                let items = $('.sidebar_menu li');
                if(!$(this).parent().is(items[element])){
                    $(items[element]).removeClass('active');
                }
            });
            $(this).parent().toggleClass('active');

        }
    })
}(jQuery))
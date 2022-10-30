$(function(){
    $('.menu-bar').click(function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('.header__mobile').attr('style','z-index: 1000; transform: matrix(1, 0, 0, 1, 0, 0);display:none;opacity:0;height:0px').children().attr('style','opacity:0');
        }else{
            $(this).addClass('active');
            $('.header__mobile').attr('style','z-index: 1000; transform: matrix(1, 0, 0, 1, 0, 0);display:block; opacity:1;height: 100vh;').children().attr('style','opacity:1');
        }
    });
    $('.job_cats_title').click(function(){
        var parent=$(this).parent();
        if($(parent).hasClass('closed')){
            $(parent).removeClass('closed')
        }else{
            $(parent).addClass('closed')

        }
    });
    $('.cv_tit').click(function(){
        var parent=$(this).parent();
        if($(parent).hasClass('closed')){
            $(parent).removeClass('closed')
        }else{
            $(parent).addClass('closed')

        }
    });
    $('.ut_tittle').click(function(){
        var parent=$(this).parent();
        if($(parent).hasClass('closed')){
            $(parent).removeClass('closed')
        }else{
            $(parent).addClass('closed')

        }
    });
    // script for tab steps
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var href = $(e.target).attr('href');
        var $curr = $(".process-model  a[href='" + href + "']").parent();

        $('.process-model li').removeClass();

        $curr.addClass("active");
        $curr.prevAll().addClass("visited");
    });
    $('.process-model > li').each(function(index,data){
        $start=0;
        if(index>0){
            $wiline=$(this).position().left-$start;
            $(this).find('div.line').css({'width':$wiline+'px','z-index':99-index});
            $start=$(this).position().left;
        }else{
            $start=$(this).position().left;
        }
    });  
    // end  script for tab steps
    $('.nav-item').click(function(){
        if($(this).hasClass('active')){
            
        }else{
            $('.nav-item').removeClass('active');
            $(this).addClass('active')
            $('.cv_cate_body').removeClass('actived');
            $tabname=$(this).attr('tab-href');
            console.log($tabname);
            $('.cv_cate_body[tab-content="'+$tabname+'"]').addClass('actived');
        }

    });
    $('.location-point').click(function(){
        var varname=$(this).attr('name');
        var block=document.getElementById(varname);
        $('html, body').animate({
            scrollTop: $("#"+varname).offset().top
        }, 2000);
    });


})
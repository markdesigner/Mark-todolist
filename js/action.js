$(document).ready(function(){

    // 完成按鈕
    
    var source   = $("#entry-template").html();
    var template = Handlebars.compile(source);  
    var context = {thing: "快點記下什麼吧"}; 
    var content    = template(context);
    var item=$('#todolist').html(content);
    // 新增按鈕
    $('.add').on('click',function(e){
        $('#todolist').append(content);
    })
    $(document).on
    ('click','.complete',function(e){
        $(e.currentTarget).toggleClass('done');
        if( $(e.currentTarget).hasClass('done') )
        {
            $(e.currentTarget).siblings('.item').addClass('item-done');
        }
           else{
            $(e.currentTarget).siblings('.item').removeClass('item-done')
           }
    })

    // 刪除按鈕
    $(document).on
    ('click','.delete',function(e){
        $(e.currentTarget).closest('li').remove();
    })

    
    
})
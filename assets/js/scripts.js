$(document).ready(function(){
    $("#account").click(function(){
        $(".account").slideToggle('fast');
    });
    $("#addadwit").click(function(){
        $(".add-dwit").slideToggle('fast');
    });
    

    $("#icon-art").click(function(event){
        $(event.target).children().toggleClass("icon-art-yellow");
    });

    $("#icon-cooking").click(function(event){
        $(event.target).children().toggleClass("icon-cooking-yellow");
    });

    $("#icon-crafting").click(function(event){
        $(event.target).children().toggleClass("icon-crafting-yellow");
    });

    $("#icon-dance").click(function(event){
        $(event.target).children().toggleClass("icon-dance-yellow");
    });

    $("#icon-gaming").click(function(event){
        $(event.target).children().toggleClass("icon-gaming-yellow");
    });

    $("#icon-headphones").click(function(event){
        $(event.target).children().toggleClass("icon-headphones-yellow");
    });

    $("#icon-sport").click(function(event){
        $(event.target).children().toggleClass("icon-sport-yellow");
    });

    $("#icon-weird").click(function(event){
        $(event.target).children().toggleClass("icon-weird-yellow");
    });
});
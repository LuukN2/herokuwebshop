$(document).ready(function () { 

    $("#productSearch").on("input", function () {
           var input, filter; 
            input = $('#productSearch'); 
            filter = $('#productSearch').attr('value'); 
    $(".col-sm-6.col-md-4.product").each(function (index, value) { 
        var title = $(this).find(".title"); 
        var categories = $(this).find(".category"); 
        var subs = $(this).find(".sub"); 

        if (~title.text().toLowerCase().indexOf(filter)) 
            $(this).css("display", "block"); 
        
        else { 
            var matched = false; 
            categories.each(function () { 
               if(~$(this).text().toLowerCase().indexOf(filter)) 
                   matched = true; 
            }); 
            subs.each(function () { 
               if(~$(this).text().toLowerCase.indexOf(filter)) 
                   matched = true; 
            }); 
            if(!matched) 
                $(this).css("display", "none");
            else {
                $(this).css("display", "block");
            }
        } 
             
    });   
    }); 
}); 
$(document).ready(function () { 

    $(".productSearch").keydown(function (e) {
     
           var input, filter; 
            input = document.getElementById('productSearch'); 
            filter = input.value.toLowerCase(); 
            alert("👽👽👽");
    $(".col-sm-6.col-md-4.product").each(function (index, value) { 
        alert("👽");
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
        } 
             
    });   
    }); 
}); 
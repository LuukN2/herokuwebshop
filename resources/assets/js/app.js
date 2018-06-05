
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function () { 
   
    $(document).on("keypress", ".productSearch", function (e) { 
           var input, filter; 
            input = document.getElementById('productSearch'); 
            filter = input.value.toLowerCase(); 
 
    $(".col-sm-6.col-md-4.product").each(function () { 
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
 

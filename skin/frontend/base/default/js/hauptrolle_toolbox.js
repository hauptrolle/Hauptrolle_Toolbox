var hauptrolle = {
    showToolbox : function(){
        $$('#hauptrolle__toolbox')[0].setStyle({
            left: -250+'px'
        });
    },

    hideToolbox : function() {
        $$('#hauptrolle__toolbox')[0].setStyle({
            left: 0
        });
    }
}


document.observe('dom:loaded', function() {

    // Toggle Toolbox

    if(Mage.Cookies.get('toolbox_status') == "visible") {
        
    }

    $('hauptrolle__toogle').observe('click', function(event) {
        event.preventDefault();
        var leftCSS = $$('#hauptrolle__toolbox')[0].getStyle('left');
        if(leftCSS == "0px") {
            hauptrolle.showToolbox();
        }
        else {
            hauptrolle.hideToolbox();
        }
    });

    // Check if jQuery is loaded
    if (window.jQuery) {
        $$('#jquery-loaded')[0].insert('Yes');
    } else {
        $$('#jquery-loaded')[0].insert('No');
    }

});

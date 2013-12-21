document.observe('dom:loaded', function() {

    // Center Toolbox vertical
    var toolboxHeight = $$('#hauptrolle__toolbox')[0].getHeight();
    $$('#hauptrolle__toolbox')[0].setStyle({
        marginTop: '-' + toolboxHeight / 2 +'px'
    });

    // Check if jQuery is loaded
    if (window.jQuery) {
        $$('#jquery-loaded')[0].insert('Yes');
    } else {
        $$('#jquery-loaded')[0].insert('No');
    }

});

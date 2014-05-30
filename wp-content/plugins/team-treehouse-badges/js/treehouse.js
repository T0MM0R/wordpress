jQuery(document).ready(function( $ ) {
    // Setup our query ( username is the identifier for your treehouse profile page i.e. http://teamtreehouse.com/psyne )
    var username = jQuery('#badges_holder').data('treehouse'),
    badgeJson = 'http://teamtreehouse.com/' + username + '.json', 
    badges = $('#badges'),
    fragment = []; 

    // Pull in the elements from YQL using jQuery
    $.getJSON(badgeJson, function(results) {

        // This part can be a bit tricky if you are just learning JSON my suggestion is to use a viewer such as http://jsonviewer.stack.hu/   
        var resultArr = results.badges;

        $.each(resultArr, function(i, val) {
            fragment += '<li><img src="' + val.icon_url + '" alt="' + val.name + '" title="' + val.name + '"/></li>';
        });
        badges.append( fragment );
    });
});
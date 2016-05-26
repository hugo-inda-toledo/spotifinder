$(document).keypress(function(e) {
    if(e.which == 13) {
        doSearch();
    }
});

function playPreview(url_preview)
{
	$('embed').remove();
	$('body').append('<embed src="'+ url_preview +'" autostart="true" hidden="true" loop="false">');
}


function doSearch()
{
	$('#search_block_error').html('');

	if($('#query').val() != '')
	{
		$('#results').html('<p class="text-center"><img src="img/ajax-loader.gif" class="img-responsive"></p>');
		$.ajax({
	        url: 'search/searchEngine/' + $('#query').val(),

	        success: function (response) {

	        	$('#results').html(response);
	        }
	    });
	}
	else
	{
		$('#search_block_error').html('You must enter a keyword...');
	}
}
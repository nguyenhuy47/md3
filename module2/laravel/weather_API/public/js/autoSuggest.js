$.getJSON( "js/cityvn.json", function( data ) {
	var cityName = [];
	$.each( data, function( key, val ) {
		cityName.push(val.name);
	});
	$('#search').autocomplete({
		delay:100,
		source:cityName
	});
});

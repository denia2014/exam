"use strict";

$(document).ready(function() {
	var query = "SELECT * FROM abonent;";
	console.log(query);

	function create_templates(query) {
			var compiledTemplate;
			var category_content = $('.out__abonent');
			var category_data;
			$.ajax({
			type: 'POST',
			url: 'php/query.php',
			data: {
				'query': query
			},
			success: function(data) {
				compiledTemplate = Template7.compile($('#template-card_abonent').html());
				category_data = {abonent: $.parseJSON(data)};
				category_content.html(compiledTemplate(category_data));
			}

			
		});
	}

	create_templates(query);
});
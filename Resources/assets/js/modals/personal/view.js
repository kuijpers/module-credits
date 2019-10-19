// PERSONAL DRAFTS

$('#show_personal_draft_information').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	// Set the variables

	let info;
	// Input files
	let title;
	let content;

	// Input field ID's
	let title_id;
	let content_id;


	info			=	$(e.relatedTarget).data('info');

	// console.log('test'+info['content']);

	// Field values

	title		=	info['title'];
	content		=	info['content'];

	// Field ID's

	title_id	=	'view_title';
	content_id	=	'view_body';


	// console.log(info);

	$(this).find('.'+title_id).text(title);

	$(this).find('.'+content_id).html(content);

});
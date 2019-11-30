// PERSONAL DRAFTS

$('#show_authors_information').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	// Set the variables

	let info;
	// Input files
	let title;
	let content;
	let author;
	let created_at;
	let updated_at

	// Input field ID's
	let title_id;
	let content_id;
	let author_id;
	let created_at_id;
	let updated_at_id;


	info			=	$(e.relatedTarget).data('info');

	// console.log('test'+info['content']);

	// Field values

	title			=	info['title'];
	content			=	info['content'];
	author			=	info['author_name'];
	created_at		=	info['created_at'];
	updated_at		=	info['updated_at'];

	// Field ID's

	title_id		=	'view_title';
	content_id		=	'view_body';
	author_id		=	'view_author';
	created_at_id	=	'view_created_at';
	updated_at_id	=	'view_updated_at';


	// console.log(info);

	$(this).find('.'+title_id).text(title);

	$(this).find('.'+content_id).html(content);

	$(this).find('.'+author_id).text(author);

	$(this).find('.'+created_at_id).text(created_at);

	$(this).find('.'+updated_at_id).text(updated_at);

});
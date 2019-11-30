// PERSONAL DRAFTS

$('#show_editors_information').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	// Set the variables

	// Main variable
	let info;

	// Input files
	let author;
	let author_approved;
	let editor;
	let created_at;
	let updated_at;
	let title;
	let content;

	// Input field ID's
	let author_id;
	let author_approved_id;
	let editor_id;
	let created_at_id;
	let updated_at_id;
	let title_id;
	let content_id;


	info			=	$(e.relatedTarget).data('info');

	// console.log('test'+info['content']);

	// Field values

	author				=	info['author_name'];
	author_approved		=	info['author_approved'];
	editor				=	info['editor_name'];
	created_at			=	info['created_at'];
	updated_at			=	info['updated_at'];
	title				=	info['title'];
	content				=	info['content'];

	// Field ID's

	author_id			=	'view_author';
	author_approved_id	=	'view_approved_by_author';
	editor_id			=	'view_editor';
	created_at_id		=	'view_created_at';
	updated_at_id		=	'view_updated_at';
	title_id			=	'view_title';
	content_id			=	'view_body';


	// console.log(info);

	$(this).find('.'+author_id).text(author);

	$(this).find('.'+author_approved_id).text(author_approved);

	$(this).find('.'+editor_id).text(editor);

	$(this).find('.'+created_at_id).text(created_at);

	$(this).find('.'+updated_at_id).text(updated_at);

	$(this).find('.'+title_id).text(title);

	$(this).find('.'+content_id).html(content);

});
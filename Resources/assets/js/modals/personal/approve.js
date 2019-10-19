// PERSONAL DRAFTS

$('#approve_personal_draft_information').on('show.bs.modal', function(e) {

	console.log($(e.relatedTarget).data('info'));

	// Set the variables

	let info;
	// Input files
	let article;
	let title;
	let content;

	// Input field ID's
	let article_id;
	let title_id;
	let content_id


	info			=	$(e.relatedTarget).data('info');

	// console.log('test'+info['content']);

	// Field values

	article				=	info['id'];
	title				=	info['title'];
	content				=	info['content'];

	// Field ID's

	article_id			=	$("#approve_personal_drafts_id");
	title_id			=	'approve_title';
	content_id			=	'approve_body';



	// console.log(info);

	article_id.val(article);

	$(this).find('.'+title_id).text(title);

	$(this).find('.'+content_id).html(content);

});
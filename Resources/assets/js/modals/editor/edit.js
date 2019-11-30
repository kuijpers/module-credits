$('#edit_editors_information').on('show.bs.modal', function(e) {


	// console.log($(e.relatedTarget).data('info'));

	let info;
	// Input files
	let article;
	let title;
	let description;
	let content;

	// Input field ID's
	let article_id;
	let title_id;
	let description_id;
	let content_id;


	info			=	$(e.relatedTarget).data('info');

	// console.log('test'+info['content']);

	// Input file values

	article				=	info['id'];
	title				=	info['title'];
	description			=	info['description'];
	content				=	info['content'];

	// Input fields ID's

	article_id			=	$("#edit_editors_id");
	title_id			=	$("#edit_editors_title");
	description_id		=	$("#edit_editors_description");
	content_id			=	$("#edit_editors_content");



	console.log(title);

	article_id.val(article);

	description_id.val(description);

	title_id.val(title);

	add_summernote(content_id,content);

});

// $('#edit_personal_draft_information').on('hidden.bs.modal', function () {
// 	location.reload();
// });
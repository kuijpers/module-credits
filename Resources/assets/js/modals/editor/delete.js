$('#delete_editors_information').on('show.bs.modal', function(e) {


	console.log($(e.relatedTarget).data('info'));

	let info;
	// Input files
	let article;
	let title;

	// Input field ID's
	let article_id;
	let title_id;


	info			=	$(e.relatedTarget).data('info');

	console.log('test '+info['id']);

	// Input file values

	article				=	info['id'];
	title				=	info['title'];

	// Input fields ID's

	article_id			=	$("#delete_editors_id");
	title_id			=	'delete_title';



	// console.log(title);

	article_id.val(article);

	$(this).find('.'+title_id).text(title);


});

// $('#edit_personal_draft_information').on('hidden.bs.modal', function () {
// 	location.reload();
// });
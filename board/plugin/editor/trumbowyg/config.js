var trumbowyg_config = {
	lang: 'ko',
	tagsToRemove: [
		'html',
		'meta',
		'link',
		'style',
		'script',
		'head',
		'body',
		'input',
		'textarea',
		'button',
	],
	minimalLinks: true,
	autogrow: true,
	imageWidthModalEdit: true,
	btnsDef: {
		image: {
			dropdown: ['insertImage', 'upload'],
			ico: 'insertImage',
		},
	},
	btns: [
		['viewHTML'],
		['undo', 'redo'],
		['strong', 'em', 'del'],
		['foreColor', 'backColor'],
		['formatting', 'fontsize'],
		['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
		['link'],
		['image', 'noembed'],
	],
	plugins: {
		upload: {
			serverPath: 'https://api.imgur.com/3/image',
			fileFieldName: 'image',
			headers: {
				'Authorization': 'Client-ID e6fc55c6de6639d'
			},
			urlPropertyName: 'data.link',
		},
		/*
		upload: {
			serverPath: g5_url + '/plugin/editor/' + g5_editor + '/imageUpload/upload.php',
			fileFieldName: 'image',
			urlPropertyName: 'data.link',
		},
		*/
	},
}

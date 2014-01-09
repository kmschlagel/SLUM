
tinymce.init
({
browser_spellcheck: true,
these_advanced_text_colors: "C9A68F",
mode: "textareas",
element_format: "html",
entity_encoding: "numeric",
setup:
function(ed)
{
	ed.on('init', function()
	{
		this.getDoc().body.style.fontSize = '14px'; // Editor default font size
		//Set custom colors for the palette:
		$('.mce-colorbutton > .mce-open').on('click', function() {
			setTimeout(function() { //1 millisecond delay is necessary for some reason
				colorblk = document.getElementById('mce_43-1'); 
				colorblk.setAttribute('data-mce-color', 'C9A68F');
				colorblk.setAttribute('style', 'background-color: #C9A68F');
				colorblk.setAttribute('title', 'Silver Lake Pink');
				colorblk = document.getElementById('mce_43-2');
				colorblk.setAttribute('data-mce-color', 'C5B898');
				colorblk.setAttribute('style', 'background-color: #C5B898');
				colorblk.setAttribute('title', 'Silver Lake Tan');
				colorblk = document.getElementById('mce_43-3');
				colorblk.setAttribute('data-mce-color', 'BABBAD');
				colorblk.setAttribute('style', 'background-color: #BABBAD');
				colorblk.setAttribute('title', 'Silver Lake Blue');
				colorblk = document.getElementById('mce_43-4');
				colorblk.setAttribute('data-mce-color', '333333');
				colorblk.setAttribute('style', 'background-color: #333333');
				colorblk.setAttribute('title', 'Silver Lake Gray');
			}, 1);
		});
	});
	// On tab key, tab text in editor rather than tab out of textarea
	ed.on('keydown', function(event) {
		if (event.keyCode == 9) {
			if (event.shiftKey) {
				ed.execCommand('Outdent');
			}
			else {
				ed.execCommand('Indent');
			}
			event.preventDefault();
			return false;
		}
	});
},
autosave_interval: "30s",
fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
height: 400,
resize: "both",
content_css: "css/tinymce_style.css",
save_enablewhendirty: false,
selector:'textarea',
plugins: 'link image textcolor code template',
templates: "view/templates/templates.php",
toolbar1: 'undo redo | bold italic | fontsizeselect | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | template | formatselect',
});

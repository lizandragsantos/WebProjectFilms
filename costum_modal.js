    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

	 
    /*function loadGallery(setClickAttr){
        var current_image,
            selector;
 
		selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
			
        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
        }

        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }*/

$(document).ready(function(){
	
var id =0;
function pegarId(){
	$(document).ready(function(){
			$("img").click(function(){
				id = ($(this).attr("id"));
				lert(id);
			});
		 });	
	}
});

$("img")




}
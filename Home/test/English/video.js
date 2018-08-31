(function(){
	var video = document.getElementById('video'),
	vendorUrl = window.URL || window.webkitURL;
	
navigator.getMedia = navigator.getUserMedia || 
					navigator.webkitGetUserMedia;

navigator.getMedia({
	video: true,
	audio: true,
}, function(stream){
	video.src = vendorUrl.createObjectURL(stream);
	
	console.log(stream);
}, function(error){
	//an Error
});					
})();
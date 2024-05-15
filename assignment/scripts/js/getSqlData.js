// JavaScript Document
$(document).ready(function(){

		function getDataByType(jsonObj,type) {
			const matchingData = [];
			for (let i = 0; i < jsonObj.length; i++) {
				if (jsonObj[i].type == type) {
					matchingData.push(jsonObj[i]);
				}
			}
			return matchingData;
		}
	 //AJAX service request to get the main text data from the json data store
	 $.getJSON('./index.php?a=getData', function(jsonObj) {
		// console.log(jsonObj);
		//Get the home page main text data
		var home = getDataByType(jsonObj.textData,'home')[0];

		var brand = getDataByType(jsonObj.textData,'brand');
		var models = getDataByType(jsonObj.textData,'models');

		$('#title_home').html('<h2>' + home.title + '<h2>');
		$('#subTitle_home').html('<h3>' + home.subTitle + '</h3>');
		$('#description_home').html('<p>' + home.description + '</p>');
		
         //Get the home page left column text data
		$('#title_left').html('<h2>' + brand[0].title + '<h2>');
		$('#subTitle_left').html('<h3>' + brand[0].subTitle + '</h3>');
		$('#description_left').html('<p>' + brand[0].description + '</p>');	
		
		//Get the home page centre column text data
		$('#title_centre').html('<h2>' + brand[1].title + '<h2>');
		$('#subTitle_centre').html('<h3>' + brand[1].subTitle + '</h3>');
		$('#description_centre').html('<p>' + brand[1].description + '</p>');	
		
		//Get the home page right column text data
		$('#title_right').html('<h2>' + brand[2].title + '<h2>');
		$('#subTitle_right').html('<h3>' + brand[2].subTitle + '</h3>');
		$('#description_right').html('<p>' + brand[2].description + '</p>');			
	  
		//Get the coke main text data
		$('#x3dModelTitle_coke').html('<h2>' + models[0].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_coke').html('<p>' + models[0].x3dCreationMethod + '<p>');
		$('#title_coke').html('<h2>' + models[0].title + '<h2>');
		$('#subTitle_coke').html('<h3>' + models[0].subTitle + '</h3>');
		$('#description_coke').html('<p>' + models[0].description + '</p>');
 
		//Get the sprite main text data
		$('#x3dModelTitle_sprite').html('<h2>' + models[1].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_sprite').html('<p>' + models[1].x3dCreationMethod + '<p>');
		$('#title_sprite').html('<h2>' + models[1].title + '<h2>');
		$('#subTitle_sprite').html('<h3>' + models[1].subTitle + '</h3>');
		$('#description_sprite').html('<p>' + models[1].description + '</p>');		

		//Get the pepper main text data
		$('#x3dModelTitle_pepper').html('<h2>' + models[2].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_pepper').html('<p>' + models[2].x3dCreationMethod + '<p>');
 		$('#title_pepper').html('<h2>' + models[2].title + '<h2>');
		$('#subTitle_pepper').html('<h3>' + models[2].subTitle + '</h3>');
		$('#description_pepper').html('<p>' + models[2].description + '</p>');
		
		//Get the gallery contents data
		var gallery = getDataByType(jsonObj.textData,'gallery')[0];
		$('.title_gallery').html('<h2>' + gallery.title + '<h2>');
		$('.description_gallery').html('<p>' + gallery.description + '</p>');

		//Get camera contents data
		var camera = getDataByType(jsonObj.textData,'camera')[0];
		$('.x3dCameraTitle').html('<h2>' + camera.title + '<h2>');
		$('.x3dCameraSubtitle').html('<p>' + camera.subTitle + '<p');

	 });
});









// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	$('[data-toggle="popover"]').popover();   
	
	
	$(".expand").click(function(){
		var ele = $(this).parents('.card-header').siblings('.card-body');
		if(ele.css('display') == 'none'){
			ele.css('display','block');
		}else{
			ele.css('display','none');
		}
	});
	
	selectPage('home');
	selectModel();
	
	function selectPage(page) {
	 
		$('#home, #about, #models, #interaction, #cokeDescription, #spriteDescription, #pepperDescription').hide();
	  
		switch(page) {
			case 'home':
				$('#home').show();
				break;
			case 'about':
				$('#about').show();
				break;
			case 'models':
				$('#models').show();
				$('#interaction, #cokeDescription').show();
				break;
			default:
			  
				$('#home').show();
				break;
		}
	}


	$('#navHome').click(function(){
		selectPage('home');
	});

	$('#navAbout').click(function(){
		selectPage('about');
	});

	$('#navModels').click(function(){
		selectPage('models');
	});


	function selectModel() {

		$('#navCoke').click(function(){
			$('#coke').show();
			$('#sprite').hide();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').hide(); 
			$(this).parents('.nav').find('.nav-link').removeClass('active');
			$(this).addClass('active');
		});

		$('#navSprite').click(function(){
			$('#coke').hide();
			$('#sprite').show();
			$('#pepper').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#pepperDescription').hide(); 
			$(this).parents('.nav').find('.nav-link').removeClass('active');
			$(this).addClass('active');
		});

		$('#navPepper').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
			$('#pepper').show();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#pepperDescription').show(); 	
			$(this).parents('.nav').find('.nav-link').removeClass('active');
			$(this).addClass('active');
		});
	}

});


var colors = [
    { body: 'lightblue', header: '#FF0000', footer: '#FF9900' },
    { body: '#FF6600', header: '#FF9999', footer: '#996699' },
    { body: 'coral', header: 'darkcyan', footer: 'darksalmon' },
    { body: 'lightgrey', header: 'chocolate', footer: 'dimgrey' }
];

var counter = 0;

function changeLook() {
    counter = (counter + 1) % colors.length; 

    var color = colors[counter];

    $('#bodyColor').css('backgroundColor', color.body);
    $('#headerColor').css('backgroundColor', color.header);
    $('#footerColor').css('backgroundColor', color.footer);
}

function changeBack() {
    $('#bodyColor').css('backgroundColor', '#FFFFFF');
    $('#headerColor').css('backgroundColor', 'rgba(175,0,0,1)');
    $('#footerColor').css('backgroundColor', 'rgba(175,0,0,1)');
}



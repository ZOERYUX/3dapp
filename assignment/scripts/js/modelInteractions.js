//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	spinning = !spinning;
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname');  
	console.log(modelName);
	document.getElementById('model__RotationTimer_'+modelName).setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname');  
	document.getElementById('model__RotationTimer_'+modelName).setAttribute('enabled', spinning.toString());
}

function animateModel()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname');  
    if(document.getElementById('model__RotationTimer_'+modelName).getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer_'+modelName).setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer_'+modelName).setAttribute('enabled', 'false');
}

function wireframe(type)
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	var e = document.getElementById('model_'+modelName);
 
 
	while(e.runtime.togglePoints(true) != type) {}

}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}




function cFront()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	document.getElementById('model__Default_'+modelName).setAttribute('bind', 'true');
}
function cBack()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	document.getElementById('model__Back_'+modelName).setAttribute('bind', 'true');
}
function cLeft()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	document.getElementById('model__Left_'+modelName).setAttribute('bind', 'true');
}
function cRight()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	document.getElementById('model__Right_'+modelName).setAttribute('bind', 'true');
}
function cTop()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	document.getElementById('model__Top_'+modelName).setAttribute('bind', 'true');
}
function cBottom()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	document.getElementById('model__Bottom_'+modelName).setAttribute('bind', 'true');
}
function cOff()
{
	var ele = document.querySelector('#modelTab .nav-link.active');
    var modelName = ele.getAttribute('modelname'); 
	document.getElementById('model__Off_'+modelName).setAttribute('bind', 'true');
}

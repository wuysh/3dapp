function spinx(type)
{
	console.log(type);
	stopRotation(type);
	spinning = true;
	document.getElementById('model__RotationTimerx'+type).setAttribute('enabled', spinning.toString());
}
function spiny(type)
{
	stopRotation(type);
	spinning = true;
	document.getElementById('model__RotationTimery'+type).setAttribute('enabled', spinning.toString());
}

function spinz(type)
{
	stopRotation(type);
	spinning = true;
	document.getElementById('model__RotationTimerz'+type).setAttribute('enabled', spinning.toString());
}

function spinNew(type)
{	
    stopRotation(type);
	spinning = true;
	document.getElementById('model__RotationTimerNew'+type).setAttribute('enabled', spinning.toString());
}

function stopRotation(type)
{
	spinning = false;
	document.getElementById('model__RotationTimerx'+type).setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimery'+type).setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerz'+type).setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerNew'+type).setAttribute('enabled', spinning.toString());
}

function animateModel(type)
{	

    if(document.getElementById('model__RotationTimerNew'+type).getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimerNew'+type).setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimerNew'+type).setAttribute('enabled', 'false');

}



function wireFrame(type)
{
	var e = document.getElementById(type);
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function headLight(type,state)
{
	console.log('model__headlight'+type);
	if(state){
		lightOn = true;
	}else{
		lightOn = false;
	}
	document.getElementById('model__headlight'+type).setAttribute('headlight', lightOn.toString());
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}


function cameraFront(type)
{
	document.getElementById('model__CameraFront'+type).setAttribute('bind', 'true');
}

function cameraBack(type)
{
	document.getElementById('model__CameraBack'+type).setAttribute('bind', 'true');
}

function cameraLeft(type)
{
	document.getElementById('model__CameraLeft'+type).setAttribute('bind', 'true');
}

function cameraRight(type)
{
	document.getElementById('model__CameraRight'+type).setAttribute('bind', 'true');
}

function cameraTop(type)
{
	document.getElementById('model__CameraTop'+type).setAttribute('bind', 'true');
}

function cameraBottom(type)
{
	document.getElementById('model__CameraBottom'+type).setAttribute('bind', 'true');
}
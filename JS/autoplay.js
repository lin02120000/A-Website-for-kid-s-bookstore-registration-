/* This js file is to set autoplay effect for the pictures in landing page */

window.onload = function()
{
    /* get the dot elements */
    var allDot = document.getElementsByClassName("dot");

    /* set default value for index */
    var index = 0;

    /* set background color for the default dot */
    allDot[index].style.backgroundColor = "rgb(92, 91, 91)";

    /* for loop to set onclick effect for the dots */
    for(var i = 0; i < allDot.length; i++){

        /* get index for every dots */
        allDot[i].num = i;

        /* onclick function to bind the dots to the pictures */
        allDot[i].onclick = function(){

            clearInterval(timer);
            
            /* set index value */
            index = this.num;

            /* set position for every picture */
            // imgList.style.left = index * (-1000) + "px";

            setDot();

            move(imgList, "left", -1000*index, 20, function()
            {
                autoChange();
            });
        };
    }

    // Call function autoChange();
    autoChange();

    /* a function to set the colors for the dots */
    function setDot()
    {
        if(index >= 6)
        {
            index = 0;
            imgList.style.left = 0;
        }
        for(var i = 0; i < allDot.length; i++)
        {
            allDot[i].style.backgroundColor = "";
        }

        allDot[index].style.backgroundColor = "rgb(92, 91, 91)";
    }

    var timer;

    /* A function to control autoplay effect */
    function autoChange(){

        timer = setInterval(function(){
            index++;
            index = index % 7;
            move(imgList,"left", -1000*index, 20, function(){
                setDot();
            })
        },4000);

    }

       /* A function to move the pictures */
    function move(obj, attr, target, speed, callback) {

	    clearInterval(obj.timer);

	    var current = parseInt(getStyle(obj, attr));
	
	    if(current > target) {
		    speed = -speed;
	    }

	    obj.timer = setInterval(function() {

		var oldValue = parseInt(getStyle(obj, attr));

		var newValue = oldValue + speed;

		if((speed < 0 && newValue < target) || (speed > 0 && newValue > target)) {
			newValue = target;
		}

		obj.style[attr] = newValue + "px";

		if(newValue == target) {
	
			clearInterval(obj.timer);
		
			callback && callback();
		}

	}, 30);
    }

    /* A function to get style */
    function getStyle(obj, name) {

        if(window.getComputedStyle) {
            
            return getComputedStyle(obj, null)[name];
        } else {
           
            return obj.currentStyle[name];
        }

    }
    

}
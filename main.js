function logohappy() {
	document.querySelector("#logo").style.backgroundImage = "url(Images/cartoon1.png)";
}

function logosad() {
	document.querySelector("#logo").style.backgroundImage = "url(Images/cartoon2.png)";
}

function logo(id) {
	switch(id){
		case 0:
			document.querySelector("#logo").style.backgroundPosition = "top left"
			break;
		case 1:
			document.querySelector("#logo").style.backgroundPosition = "top center"
			break;
		case 2:
			document.querySelector("#logo").style.backgroundPosition = "center left"
			break;
		case 3:
			document.querySelector("#logo").style.backgroundPosition = "center"
			break;
		case 4:
			document.querySelector("#logo").style.backgroundPosition = "bottom left"
			break;
		case 5:
			document.querySelector("#logo").style.backgroundPosition = "top right"
			break;
		case 6:
			document.querySelector("#logo").style.backgroundPosition = "center right"
			break;
		case 7:
			document.querySelector("#logo").style.backgroundPosition = "bottom center"
			break;
		case 8:
			document.querySelector("#logo").style.backgroundPosition = "bottom right"
			break;
			
	}
}

function nofdays() {
	var birthdate = new Date("1993/07/12");
	var currentdate = new Date();
	var diff = currentdate.getTime() - birthdate.getTime();
	var days = Math.round(diff / 86400000);
	document.querySelector("#nofdays").innerHTML = "DAY " + days;
}

function next(sem) {
	var semester = document.querySelectorAll(".sem");
	if (sem + 1 < semester.length) {
		semester[sem].style.display = 'none';
		semester[sem + 1].style.display = 'block';
	}

}

function prev(sem) {

	var semester = document.querySelectorAll(".sem");
	if (sem - 1 >= 0) {
		semester[sem].style.display = 'none';
		semester[sem - 1].style.display = 'block';
	}
}

function addevent(datestr, type, info) {
	var birth = new Date("1993/07/12");
	var currentdate = new Date();
	if (type == 0) {
		var date = new Date(datestr);
		var diff1 = date.getTime() - birth.getTime();
		var diff2 = currentdate.getTime() - birth.getTime();
		var per = diff1 * 745 / diff2;
		var str = '<li class="eve0"><div style="left:' + per + 'px " name=" ' + monthLocale[date.getMonth()] + ' ' + date.getFullYear() + ' : ' + info + '"></div></li>';
		return str;
	} else if (type == 1) {
		var date = new Date(datestr);
		var diff1 = date.getTime() - birth.getTime();
		var diff2 = currentdate.getTime() - birth.getTime();
		var per = diff1 * 745 / diff2;
		var str = '<li class="eve1"> <div style="left:' + per + 'px " name=" ' + monthLocale[date.getMonth()] + ' ' + date.getFullYear() + ' : ' + info + '"></div></li>';
		return str;
	}
}

function addall(events) {
	var data = "";
	for (var i = 0; i < events.length; i++) {
		data += addevent(events[i][0], events[i][1], events[i][2]);
	}
	document.querySelector("#events").innerHTML = data;
}

function social_icon_move() {
	var scr = document.body.scrollTop + 20;
	var size = window.innerHeight;
	var bottom = scr + size - 80;
	document.querySelector("#social-icons").style.top = scr + "px";
	if (scr > 450) {
		document.querySelector("#to-top").style.top = bottom + "px";
	} else {
		document.querySelector("#to-top").style.top = "-50px";
	}
}

function smoothscroll(id) {
	var startY = document.body.scrollTop;
	var stopY = document.querySelector("#" + id).offsetTop;
	var distance = stopY > startY ? stopY - startY : startY - stopY;
	var speed = Math.round(distance / 100);
	if (speed >= 20)
		speed = 20;
	var step = Math.round(distance / 25);
	var leapY = stopY > startY ? startY + step : startY - step;
	var timer = 0;
	if (stopY > startY) {
		for (var i = startY; i < stopY; i += step) {
			setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
			leapY += step;
			if (leapY > stopY)
				leapY = stopY;
			timer++;
		}
		return;
	}
	for (var i = startY; i > stopY; i -= step) {
		setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
		leapY -= step;
		if (leapY < stopY)
			leapY = stopY;
		timer++;
	}
}


$(document).ready(function() {
	$("#myform").validate({
		debug : false,
		rules : {
			name : "required",
			message : "required",
			email : {
				required : true,
				email : true
			}
		},
		messages : {
			name : "Enter Your name",
			email : "Enter a valid Email",
			message : "Enter some message",
		}
	});
});

function fill_grade_box() {
	var grade_val = document.querySelectorAll(".grade div");
	for (var i = 0; i < grade_val.length; i++) {
		var val = grade_val[i].textContent;
		val=trim(val);
		switch(val) {
			case "AA":
				grade_val[i].style.width = "100%";
				break;
			case "AB":
				grade_val[i].style.width = "90%";
				break;
			case "BB":
				grade_val[i].style.width = "80%";
				break;
			case "BC":
				grade_val[i].style.width = "70%";
				break;
			case "CC":
				grade_val[i].style.width = "60%";
				break;
			case "CD":
				grade_val[i].style.width = "50%";
				break;
			default:
				if (parseFloat(val)) {
					var per = parseFloat(val);
					if (per < 10) {
						grade_val[i].style.width = per * 10 + "%";
					} else if (per < 100) {
						grade_val[i].style.width = per + "%";
					}
				}
				break;
		}
	}

}
function trim(s) {
	s = s.replace(/(^\s*)|(\s*$)/gi,"");
	s = s.replace(/[ ]{2,}/gi," ");
	s = s.replace(/\n /,"\n");
	return s;
}

function placeimages(){
	
	
}

var events = [["1993/07/12", 1, "I was Born"], ["1996/07/12", 0, "Started School :P"], ["2005/09/20", 1, "Got My first computer"], ["2009/05/25", 0, "Completed 10th"], ["2011/05/25", 0, "Completed 12th"], ["2011/07/22", 0, "Started First year at IITB"], ["2011/07/12", 1, "Turned 18 ;)"]];
var monthLocale = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
function all() {
	nofdays();
	document.querySelector("#events").innerHTML = "mayank1";
	addall(events);
	fill_grade_box();
}

window.onload = all;
window.onscroll = social_icon_move; 
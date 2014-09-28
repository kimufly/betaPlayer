// JavaScript Document
$(document).ready(function() {
	//alert("ready");
	var video = $('#video');

	//video.on('click', function() { playpause(); } );
	$('.btnPlay').on('click', function() { playpause(); } );
	$('.danmu').on('click', function() { playpause(); } );

	var playpause = function() {
		if (video[0].paused || video[0].ended) {
			$('.playbtn').replaceWith("<span class=\"glyphicon glyphicon-pause playbtn\"></span>");
			video[0].play();
		} else {
			$('.playbtn').replaceWith("<span class=\"glyphicon glyphicon-play playbtn\"></span>");
			video[0].pause();
		}
	};

	$('.sound').click(function() {
		video[0].muted = !video[0].muted;
		$(this).toggleClass('muted');
		if(video[0].muted) {
			$('.volumeBar').css('width',0);
			$('.soundbtn').replaceWith("<span class=\"glyphicon glyphicon glyphicon-volume-off soundbtn\"></span>");
		}
		else{
			$('.volumeBar').css('width', video[0].volume*100+'%');
			$('.soundbtn').replaceWith("<span class=\"glyphicon glyphicon glyphicon-volume-up soundbtn\"></span>");
		}
	});

	//transfer seconds to time
	var timeFormat = function(seconds){
		var m = Math.floor(seconds/60)<10 ? "0"+Math.floor(seconds/60) : Math.floor(seconds/60);
		var s = Math.floor(seconds-(m*60))<10 ? "0"+Math.floor(seconds-(m*60)) : Math.floor(seconds-(m*60));
		return m+":"+s;
	};


	//get HTML5 video time duration
	video.on('loadedmetadata', function() {
		$('.duration').text(timeFormat(video[0].duration));
		
	});

	//update HTML5 video current play time
	video.on('timeupdate', function() {
   		//$('.current').text(video[0].currentTime);
		//$("#123").animate({left:'0px'},4000);
		$('.current').text(timeFormat(video[0].currentTime));
		var currentPos = video[0].currentTime; //Get currenttime;
		var maxduration = video[0].duration; //Get video duration;
		var percentage = 100 * currentPos / maxduration;
		$('.timeBar').css('width', percentage+'%');
		$('#video_dur').val(maxduration);
		$('#video_pos').val(currentPos);
		var roundPos = Math.round(currentPos);
		$('.'+roundPos).animate({left:'-200px'},4000/*,
		function(){
			$('#'+roundPos).remove();
		}*/);
	});

	//VOLUME BAR
	//volume bar event
	var volumeDrag = false;
	$('.volume').on('mousedown', function(e) {
		volumeDrag = true;
		video[0].muted = false;
		$('.sound').removeClass('muted');
		updateVolume(e.pageX);
	});
	$(document).on('mouseup', function(e) {
		if(volumeDrag) {
			volumeDrag = false;
			updateVolume(e.pageX);
		}
	});
	$(document).on('mousemove', function(e) {
		if(volumeDrag) {
			updateVolume(e.pageX);
		}
	});
	var updateVolume = function(x, vol) {
		var volume = $('.volume');
		var percentage;
		//if only volume have specificed
		//then direct update volume
		if(vol) {
			percentage = vol * 100;
		}
		else {
			var position = x - volume.offset().left;
			percentage = 100 * position / volume.width();
		}
		
		if(percentage > 100) {
			percentage = 100;
		}
		if(percentage < 0) {
			percentage = 0;
		}
		
		//update volume bar and video volume
		$('.volumeBar').css('width',percentage+'%');	
		video[0].volume = percentage / 100;
		
		//change sound icon based on volume
		if(video[0].volume == 0){
			$('.soundbtn').replaceWith("<span class=\"glyphicon glyphicon glyphicon-volume-off soundbtn\"></span>");
		}
		else if(video[0].volume > 0.5){
			$('.soundbtn').replaceWith("<span class=\"glyphicon glyphicon glyphicon-volume-up soundbtn\"></span>");
		}
		else{
			$('.soundbtn').replaceWith("<span class=\"glyphicon glyphicon glyphicon-volume-down soundbtn\"></span>");
		}
		
	};

});
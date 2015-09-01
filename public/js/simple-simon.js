"use strict";
$(document).ready(function () {
var computerSequence = [];
var userIndex = 0; 

// Box Animation
	function flashBox (id) { // 2 options for blinking
		// $('#' + id).addClass('active');
		$('#' + id).fadeOut(200)
		// setTimeout(function () {
			// $('#' + id).removeClass('active');
		$('#' + id).fadeIn(200);
			// }, 100);
	};

// User Game Functions
	$('.box').click(function () {
		var boxClick = $(this).attr('id');
		flashBox(boxClick);
		if (boxClick == computerSequence[userIndex]) {
			userIndex +=1;
			if (userIndex == computerSequence.length) {
				nextRound ();
				userIndex = 0;
			}
		} else {
			alert("Game Over - You made it to Round: " + computerSequence.length + "!");
			location.reload(true);
		}
	});

// Computer Game Functions
	$('#start').click(function () {
		computerSequence = [];
		randomComputerChoice();
		playSimonSequence();
		$('#score').val("Round: " + computerSequence.length);
	});	
	
	// random color selector
	function randomComputerChoice () {	
		var colorArray = $('.box');
		var	randomComputerColor = Math.floor(Math.random() * colorArray.length); 
		var boxToAnimate = colorArray[randomComputerColor];
		var id = boxToAnimate.getAttribute('id');
		computerSequence.push(id); 
		console.log(computerSequence);
	};
	
	// color sequencing script
	function playSimonSequence () {
		var sliderValue = $('#slider').val();
		var i = 0;
		var intervalID = setInterval(function() {
			if (i >= computerSequence.length) {
				clearInterval(intervalID);
			};
		flashBox(computerSequence[i])
		i += 1;
		}, (sliderValue * 100));
	};
	
	// round sequencing portion...connected to the conditional in user game function
	function nextRound () {
		randomComputerChoice();
		playSimonSequence();
		$('#score').val("Round: " + computerSequence.length);
	};

})

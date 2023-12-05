// JavaScript Document

$(document).ready(function(){
	"use strict";  
	$(".toggle").click(function(){
		$(this).toggleClass("active");
		$(".nav").slideToggle();
		});
});
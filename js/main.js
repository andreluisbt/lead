$("document").ready(function(){
	
	$('#btHighContrast').click(function(e){
		$('body').toggleClass('high-contrast');
	});
	
	$(window).scroll(function () {
		if($(this).scrollTop() > 50){
			$('header #navigationBar').addClass('fixed');
			$('header #accessibilityBar').addClass('margined-bottom');
		}else{
			$('header #navigationBar').removeClass('fixed');
			$('header #accessibilityBar').removeClass('margined-bottom');
		}
	});


	$('.pie-chart').easyPieChart({
		barColor: '#009ee3',
		trackColor: '#f2f2f2',
		trackWidth: 20,
		scaleColor: false,
		size: 230,
		lineCap: 'square',
		lineWidth: 25,
	});
	
	
	/*
	 * Calendar
	**/
	calendarYear = 2015;
	$('#calendar .prev').click(function(e){
		e.preventDefault();
		calendarYear--;
		$('#calendar .year-bar .year').html(calendarYear);
	});
	
	$('#calendar .next').click(function(e){
		e.preventDefault();
		calendarYear++;
		$('#calendar .year-bar .year').html(calendarYear);
	});
	
	/*
	 * Letter size
	**/
	initFontSize = 16;
	$('#accessibilityBar #btFontIncrease').click(function(e){
		e.preventDefault();
		initFontSize++;
		$('body').css('font-size', initFontSize);
	});
	
	$('#accessibilityBar #btFontReset').click(function(e){
		e.preventDefault();
		initFontSize = 16;
		$('body').css('font-size', '');
	});
	
	$('#accessibilityBar #btFontDecrease').click(function(e){
		e.preventDefault();
		initFontSize--;
		$('body').css('font-size', initFontSize);
	});
	
	
	
});
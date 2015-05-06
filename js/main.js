$("document").ready(function(){
	
	$('#btHighContrast').click(function(e){
		$('body').toggleClass('high-contrast');
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
	
	
});
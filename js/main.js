$("document").ready(function(){
	
	preload = '<div class="preload">'+
				'<span class="bar bar-1"></span>'+
				'<span class="bar bar-2"></span>'+
				'<span class="bar bar-3"></span>'+
			'</div>';
	
	$('#btHighContrast').click(function(e){
		$('body').toggleClass('high-contrast');
		
		if($('body').hasClass('high-contrast')){
			$('.pie-chart').each(function(){
				var percent = $(this).data('percent');
				var pieChart = $(this).data('easyPieChart');
				
				console.log(pieChart.options);
				
				pieChart.options.trackColor = "#ffff00";
				pieChart.options.barColor = "#ffffff";
				pieChart.update(percent);
			});
		}else{
			$('.pie-chart').each(function(){
				var percent = $(this).data('percent');
				var pieChart = $(this).data('easyPieChart');
				
				pieChart.options.barColor = "#009ee3";
				pieChart.update(percent);
			});
		}
		
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
		trackColor: 'transparent',
		trackWidth: 20,
		scaleColor: false,
		size: 230,
		lineCap: 'square',
		lineWidth: 25,
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
	
	/*
	 * Mask
	**/
	$.applyDataMask();
	
	
	/*
	 * Calendar
	 */
	$('#calendar .months').on('click', 'a', function(e){
		e.preventDefault();
		
		$('#calendar .all-months').removeClass('active');
		$('#calendar .all-tasks').addClass('active');
	});
	
	$('#calendar .all-tasks').on('click', 'a.back', function(e){
		e.preventDefault();
		
		$('#calendar .all-tasks').removeClass('active');
		$('#calendar .all-months').addClass('active');
	});
	
	/*
	 * Open/close panels
	 */
	
	$('#admin .panel .panel-heading a').click(function(e){
		e.preventDefault();
		$(this).parents('.panel').find('.panel-body').toggle();
	});
	
	/*
	 * Html Editor summernote
	 */
	$('.summernote').summernote();
	
	
	/*
	 * File browser
	 */
	$('.lead-filebrowser .lead-filebrowser-area').click(function(e){
		e.preventDefault();
		$(this).parents('.lead-filebrowser').find('input[type="file"]').trigger('click');
	});
	
	$('.lead-filebrowser').on('change', 'input[type="file"]', function(e){
		$(this).parents('.lead-filebrowser').find('.file-name').html(this.files[0].name);
	});
	
});
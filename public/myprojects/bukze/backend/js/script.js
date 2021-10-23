

var movie_number;


$(".movie_list li a").click(function(){

	


	var current = this;
	movie_number = $(this).attr('data-index');
	var datai = "[data-index="+" \"" +movie_number+"\""+"]";



	$.ajax("https://herotalkies.com/api/v2/layouts?target=new")
		.done(function(data){
			$(".movie_name").html(data[movie_number].name);
			$(".movie_pic").attr("src",data[movie_number].thumbnail_url);
			$(current).attr("data-original-title",data[movie_number].released_date);
			$(datai).tooltip("show");  


		
				
})


})



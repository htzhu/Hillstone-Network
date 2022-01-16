// JavaScript Document

$(document).ready(function(){/*首页加载特效*/
	
    var a,b,c;
    a=$(window).height()/2;	
    $(window).scroll(function(){	
        var b=$(this).scrollTop();
		
        $(".news").each(function(){
            c=$(this).offset().top;	
            if(a+b>c){
                $(this).children('.news_card').addClass("cardmove");
            }
            else{
                $(this).children('.news_card').removeClass("cardmove");
            }
        });	
		
		$(".communication").each(function(){
            c=$(this).offset().top;	
            if(a+b>c){
				$('.communication .communication_body').children().addClass("othermove");
            }
			else{
				$('.communication .communication_body').children().removeClass("othermove");
            }
        });	
		
		$(".community").each(function(){
            c=$(this).offset().top;	
            if(a+b>c){
				$(this).find('.community_list').addClass("communitymove");
            }
			else{
				$(this).find('.community_list').removeClass("communitymove");
            }
        });	
		
		$(".science").each(function(){
            c=$(this).offset().top;	
            if(a+b>c){
				$('.science .science_body ul li').children().addClass("sciencemove");
				$('.science .science_foot').children().addClass("scienceimgmove");
            }
			else{
				$('.science .science_body ul li').children().removeClass("sciencemove");
				$('.science .science_foot').children().removeClass("scienceimgmove");
            }
        });	
		
    });

});


$(document).ready(function(){/*技术研发点击切换*/
	
	$('.science .science_foot img').click(function(){
		var id=$(this).attr('id');
		$('.science .science_body ul #'+id).siblings().hide('slow');
		$('.science .science_body ul #'+id).show('slow');
	});
	
});

$(document).ready(function(){/*返回顶部*/
	
	$(window).scroll(function(){	
        var top=$(this).scrollTop();
		if(top>500){
		    $('.back').show();
		}
		else{
			$('.back').hide();
		}
	});
	
	$('.back').click(function(){
		$('html,body').animate({scrollTop:0},1000);
	});
	
});

$(document).ready(function(){/*锚点跳转*/
    
	$(".nav div").click(function(){
	  
	    var attr=$(this).attr('id');
        $("html,body").animate({scrollTop:$('.'+attr).position().top}, 1000);//相对于父元素取值

   });
  
});
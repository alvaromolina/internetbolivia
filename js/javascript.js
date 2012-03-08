/* Wall+ script by 99Points.info 
 * Copyright (c) 2011 Zeeshan Rasool
 * Licensed under the GNU General Public License version 3.0 (GPLv3)
 * http://www.webintersect.com/license.php
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Date: January 1, 2012
 *------------------------------------------------------------------------------------------------*/

$(document).ready(function(){	
	
  var section = $("#section").val();
	
  $.post(base_url+"wall/index/show/"+section, {

	}, function(response){
		
		$('#loadpage').html(response).fadeIn(500);
	});
 	
	$('#uploadMedia').click(function(){
		$('#show_img_upload_div').show();
		//$('.main_bar').hide();
  });		

	$('#exit').click(function(){
    $.post(base_url+"index/logout", {

	  }, function(response){
        window.location.href = $('#logouturl').val();      
    
    });
  });
});


function go_to_page(page_num){

    var section = $("#section").val();
    $.post(base_url+"wall/index/show/"+section+"/15/"+page_num, {

    }, function(response){
      
      $('#loadpage').html(response).fadeIn(500);
      $.scrollTo('#UIComposer_Box',800,{});
    });
}

function order_by(order){

    if(order=='likes'){
      $('#likes_order').addClass("active");
      $('#date_created').removeClass("active");
    }else{
      $('#date_created').addClass("active");
      $('#likes_order').removeClass("active");

    }
  
    var section = $("#section").val();
    $.post(base_url+"wall/index/show/"+section+"/15/1/"+order+"/", {

    }, function(response){
      
      $('#loadpage').html(response).fadeIn(500);
    });
}



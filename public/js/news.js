function news() 
{	
	// college news
	var cw = "20%3D%20'http%3A%2F%2Fcollege.lattc.edu%2Fblog%2Fcategory%2Fnews%2Ffeed%2F'%20limit%2020";

    // facebook news
	var fb = "3D%22https%3A%2F%2Fwww.facebook.com%2Ffeeds%2Fpage.php%3Fformat%3Drss20%26id%3D250330846189%22";

    
    url = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20rss%20where%20url%' + fb + '&format=json&diagnostics=true&callback=';
	
	    $.getJSON(url, function(data){
	    	var items = data.query.results.item;  
		      var output = '';    
	    	      for(var i=0; i < items.length; i++){  
		    		  var title;
	    			  if (items[i].title === null)
		    		  {
		    			  title = "";
		    		  }
		    		  else
		    		  {
		    		  	title = items[i].title;
		    		  }
		    		var link = items[i].link;  
		            var desc = items[i].description; 
		    		var date = items[i].pubDate;
		    		var encod = items[i].encoded; 
		            output += "<a href='" + link + "'>"+title+"</a><br /> <div class='date'>" + date + "</div><div class='content'>" + desc + "</div><hr/>";  
		          }  
		          // Place news stories in div tag  
		          document.getElementById('msg').innerHTML = document.getElementById('msg').innerHTML + output; 
	    });
	    
	url = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20rss%20where%20url%' + cw + '&format=json&diagnostics=true&callback=';
	
	    $.getJSON(url, function(data){
	    	var items = data.query.results.item;  
		      var output = '';    
	    	      for(var i=0; i < items.length; i++){  
		    		  var title;
	    			  if (items[i].title === null)
		    		  {
		    			  title = "";
		    		  }
		    		  else
		    		  {
		    		  	title = items[i].title;
		    		  }
		    		var link = items[i].link;  
		            var desc = items[i].description; 
		    		var date = items[i].pubDate;
		    		var encod = items[i].encoded; 
		            output += "<a href='" + link + "'>"+title+"</a><br /> <div class='date'>" + date + "</div><div class='content'>" + desc + "</div><hr/>";  
		          }  
		          // Place news stories in div tag  
		          document.getElementById('msg2').innerHTML = document.getElementById('msg2').innerHTML + output; 
	    });	
}




window.onload = function(){news()};

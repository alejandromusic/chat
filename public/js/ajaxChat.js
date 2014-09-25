
// print new new tweets when they arrive
function request(a) {
    // make ajax request
    xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "false")
            {
                //alert("empty");
            }
            else
            {
                document.getElementById("here").innerHTML = xmlhttp.responseText;
                
                // append node
                var node=document.getElementById("here").firstChild;
                for (var i = 0; i < 4; i++)
                {
                    document.getElementById("chat").appendChild(node);
                    node=document.getElementById("here").firstChild;
                }
                
                var chatDiv = document.getElementById('chat');
                chat.scrollTop = chat.scrollHeight;
            }
            setTimeout(function(){time()}, 3000);
        }
    }
    xmlhttp.open("GET", "ajaxRequest.php?q=" + a, true);
    xmlhttp.send();
}


function time() {
    // get value of last id on page from the idC class
    tweets = document.getElementsByClassName("idC");
    y = tweets.length;

    request(tweets[y - 1].value);
}

/**send tweet needs revision **/
function tw() {
    
    // store tweet in var
    var tweet = document.getElementById("tex").value;

    // make ajax request
    xmlhttp = new XMLHttpRequest();
    
    // when getting a response
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            
            // if ajax gives us error
            if (xmlhttp.responseText == "false") {
                //alert("empty");
            }
            
            // if response from ajax
            else {  
 
                // add response to doc
                document.getElementById("here").innerHTML = xmlhttp.responseText;
                
                // append node
                var node=document.getElementById("here").firstChild;
                for (var i = 0; i < 4; i++)
                {
                    document.getElementById("chat").appendChild(node);
                    node=document.getElementById("here").firstChild;
                }
                
                // relocate the scrolling bar
                var chatDiv = document.getElementById('chat');
                chat.scrollTop = chat.scrollHeight;
            }
        }
    }
    xmlhttp.open("GET", "ajax.php?t=" + tweet, true);
    xmlhttp.send();
}

function send(e)
{
    // if enter key pressed
    if (e.keyCode == 13)
        {            
            document.getElementById('sendB').click();
            document.getElementById("tex").value="";
        }
}

window.onload=function(){time()};

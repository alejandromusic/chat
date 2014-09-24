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
                document.getElementById("here").innerHTML = document.getElementById("here").innerHTML + xmlhttp.responseText;
                //alert("q is " + a + " return is "+xmlhttp.responseText);
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
    // scroll to last message
    var chat = document.getElementById('chat');
    chat.scrollTop = chat.scrollHeight;
    
    // get value of last id on page from the idC class
    tweets = document.getElementsByClassName("idC");
    y = tweets.length;

    request(tweets[y - 1].value);
}

/**send tweet needs revision **/
function tweet() {
    // make ajax request
    xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // input the data in the docuemnt
            document.getElementById("here").innerHTML = document.getElementById("here").innerHTML + xmlhttp.responseText;
            //alert("q is " + a + " return is "+xmlhttp.responseText);
                
            // relocate the scrolling bar
            var chatDiv = document.getElementById('chat');
            chat.scrollTop = chat.scrollHeight;
        }
    }
    xmlhttp.open("GET", "ajaxRequest.php?q=" + a, true);
    xmlhttp.send();
}

window.onload=function(){time()};

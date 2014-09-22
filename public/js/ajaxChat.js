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

window.onload=function(){time()};

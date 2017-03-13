// To check on load if a chapter is specified
$(document).ready(function ()
{
	manipulateURL();
});
        //loads storychapter segments
        var visible = false;
        var currentChapter;
        function loadDoc(fileName, permLink) {
              
              if (visible == false || currentChapter != fileName) {
                var xhttp2 = new XMLHttpRequest();
                xhttp2.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var bottommenu = this.responseText;
                      document.getElementById("bottom").innerHTML = bottommenu;
                  }
                };
                xhttp2.open("GET", "bottomnav.php", true);
                xhttp2.send();
                currentChapter = fileName;
                $('#story').val(fileName);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                  var str = this.responseText;
                  str = str.replace(/(?:\r\n|\r|\n)/g, '<br />');
                  str = str.replace(new RegExp("'", 'g'), "&#039;");
                  document.getElementById("entr").innerHTML = str;
                  }
                };
                xhttp.open("POST", fileName+".php", true);
                xhttp.send();
                visible = true;
              } else {
                document.getElementById("entr").innerHTML = "";
                document.getElementById("bottom").innerHTML = "";
                visible = false;
            }
            
            if (!permLink)
                {
                    manipulateURL(fileName);
                }
    }

        function manipulateURL(url)
{
	// if the url param is specified it is called from loadDoc.
	if (url)
	{
		window.location.hash = url;
		return true;
	}
	// If url is not specified it is probably called from the .ready event.
	loadDoc(window.location.hash.substr(1), true);
}

        
  /*  
window.onpopstate = function(e){
    if(e.state){
        document.getElementById("entr").innerHTML = e.state.php;
        document.title = e.state.currentChapter;
    }
};

//window.history.pushState(“object or string”, “Title”, “/new-url”);

<?php
                $homepage = 'home';
                if (isset($_GET['page'])) {
                    if (file_exists('page/' . $_GET['page'] . '.php')) {
                        include('page/' . $_GET['page'] . '.php');
                    } else {
                        include('page/' . $homepage . '.php');
                    }
                } else {
                    include('page/' . $homepage . '.php');
                }
                ?>*/
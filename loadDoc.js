
        //loads storychapter segments
        var visible = false;
        var currentChapter;
        function loadDoc(folderName, fileName) {
              
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
                xhttp.open("POST", folderName+fileName+".php", true);
                xhttp.send();
                visible = true;
              } else {
                document.getElementById("entr").innerHTML = "";
                document.getElementById("bottom").innerHTML = "";
                visible = false;
                }
        }

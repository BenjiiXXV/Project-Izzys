//Button to homepage function
function Main() {
    window.location.href = "/index.php";
}

//loads storychapter segments
var visible = false;
var currentChapter;

function loadDoc(fileName) {
    if (visible == false || currentChapter != fileName) {
        currentChapter = fileName;
        $('#story').val(fileName);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var str = this.responseText;
                str = str.replace(/(?:\r\n|\r|\n)/g, '<br />');
                str = str.replace(new RegExp("'", 'g'), "&#039;");
                document.getElementById("entr").innerHTML = decodeURIComponent(str);
            }
        };
        xhttp.open("POST", "ge/" + fileName + ".php", true);
        xhttp.send();
        visible = true;
    } else {
        document.getElementById("entr").innerHTML = "";
        visible = false;
    }
}

//Dropdown menu
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

//changes font to yellow if red
function changeFont($font) {
    var x = document.getElementsByClassName("bloodyeverything");
    for (i = 0; i < x.length; i++) {
        x[i].style.color = $font;
    }
}
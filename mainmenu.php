
    <div class="meny pull-right">
      <ul>
        <li><button onclick="Main()" class="button" style="button">FEATURED PRIDE:<br>Greenberg's Experiment</button></li>
        <li>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">BACKBURNERS:<br>Idle Projects</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="wota.php">WAR OF<br>THE ANGELS</a>
              <a href="gol.php">DRAGON'S<br>LEGACY</a>
            </div>
          </div>
        </li>
        <li>
          <button onclick="Main2()" class="button" style="button">GRAVEYARD:<br>Dead Projects</button>
        </li>
        <li>
          <button onclick="me()" class="button" style="button" id="mebutton"></button>
        </li>
      </ul>
    </div>

 <script>
      //toggle hide/show dropdown button
      function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
      }

      //close the dropdown menu if the user clicks outside of it
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

       function Main(){
        window.location.href = "Greenberg.php";
      }
      function Main2(){
        window.location.href = "dead.php";
      }
      
        //if (user is logged on){
          document.getElementById("mebutton").innerHTML = "ME, MYSELF AND I<br>your profile page";
          function me(){
            window.location.href = "profile.php";
          }
        /*
        } else {
              document.getElementById("mebutton").innerHTML = "LOG<br>IN";
              function me(){
                include("login.php");
             ] 
          }
        */
      


    </script>
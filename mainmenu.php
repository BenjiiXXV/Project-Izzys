
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


    </script>
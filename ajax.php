<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="demo">
        <center>
            <fieldset>
                <legend>Ajax</legend>
                <table>
                    <form method = "post" onclick="loadDoc()" id = "demo" action="ajax.php">
                        <tr>
                            <td>
                                First Name: <input type = "text" name = "fname" id = "fname" onkeyup="showHint(this.value)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Last Name: <input type = "text" name = "lname" id = "lname" onkeyup="showHint(this.value)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email: <input type = "email" name = "email" id = "email" onkeyup="showHint(this.value)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                City <input type = "text" name = "city" id = "city" onkeyup="showHint(this.value)">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Country: <input type = "text" name = "count" id = "count" onkeyup="showHint(this.value)">
                            </td>
                        </tr>        
                    </form>
                   
                </table>
                <br>
                <button type="button" onclick="loadDoc()">Change Content</button>
                <p>First Name Suggestions: <span id="s1"></span></p>
                <!--<form>
                    <button type="submit" name= "submit" id = "submit" onclick="loadDoc()">Change Content</button>
                </form>-->
            </fieldset>
        </center>
        </div>
    <!--<script>
        function loadDoc() {
          const xhttp = new XMLHttpRequest();
          xhttp.onload = function() {
            document.getElementById("demo").innerHTML =
            this.responseText;
          }
          xhttp.open("GET", "data.php");
          xhttp.send();
        }
        </script>-->

<script>
  function showHint(str) {
    if (str.length == 0) {
      document.getElementById("s1").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("s1").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "gethint.php?q="+str, true);
      xmlhttp.send();
    }
  }
  </script>
       
</body>
</html>

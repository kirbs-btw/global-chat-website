<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="left-section">
      <form class="" action="php/add_text.php" method="post">
        <input type="text" name="username" value="" placeholder="username">
        <textarea name="message" rows="8" cols="80" placeholder="your message"></textarea>
        <button type="button" name="button">send</button>
      </form>
    </div>
    <div class="mid-section">
      <?php
        $host = "";
        $dbUsername = "";
        $dbPassword = "";
        $dbName = "";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


        $query = mysql_query("SELECT * FROM messages ORDER BY date", $conn);
        while ($row = mysql_fetch_array($query)) {
          echo "<div class="message">
            <h2>{$row['username']}</h2>
            <div class="content">
              <p>{$row['content']}</p>
            </div>
          </div>";
        }
      ?>


      <!-- <div class="message">
        <h2>username</h2>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="message">
        <h2>username</h2>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div> -->
    </div>
  </body>
</html>

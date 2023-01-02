
function getMessages(){
  var mysql = require('mysql');
  var con = mysql.createConnection({
    host: "localhost",
    user: "yourusername",
    password: "yourpassword"
  });

  con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    var sql = "SELECT * FROM messages ORDER BY date, time LIMIT 25";
    con.query(sql, function (err, result) {
      if (err) throw err;
      return result;
    });
  });
}


function loadMessages(){
  
}

{"filter":false,"title":"addTee.php","tooltip":"/addTee.php","undoManager":{"mark":87,"position":87,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":2},"action":"insert","lines":["<?php","$servername = \"localhost\";","$username = \"username\";","$password = \"password\";","$dbname = \"myDB\";","","// Create connection","$conn = new mysqli($servername, $username, $password, $dbname);","// Check connection","if ($conn->connect_error) {","    die(\"Connection failed: \" . $conn->connect_error);","} ","","$sql = \"INSERT INTO MyGuests (firstname, lastname, email)","VALUES ('John', 'Doe', 'john@example.com')\";","","if ($conn->query($sql) === TRUE) {","    echo \"New record created successfully\";","} else {","    echo \"Error: \" . $sql . \"<br>\" . $conn->error;","}","","$conn->close();","?>"],"id":1}],[{"start":{"row":1,"column":0},"end":{"row":4,"column":17},"action":"remove","lines":["$servername = \"localhost\";","$username = \"username\";","$password = \"password\";","$dbname = \"myDB\";"],"id":2},{"start":{"row":1,"column":0},"end":{"row":4,"column":20},"action":"insert","lines":["$servername = \"localhost\";","$username = \"justinkelleher\";","$password = \"\";","$dbname = \"dogBarn\";"]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":28},"action":"remove","lines":["MyGuests"],"id":3},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["h"],"id":4}],[{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["o"],"id":5}],[{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["p"],"id":6}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["p"],"id":7}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["i"],"id":8}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["n"],"id":9}],[{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["g"],"id":10}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["C"],"id":11}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["a"],"id":12}],[{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["r"],"id":13}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["t"],"id":14}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":43},"action":"remove","lines":["firstname"],"id":15}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":46},"action":"remove","lines":[", lastname, "],"id":16}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":39},"action":"remove","lines":["email"],"id":17},{"start":{"row":13,"column":34},"end":{"row":13,"column":42},"action":"insert","lines":["quantity"]}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":24},"action":"remove","lines":["John', 'Doe', '"],"id":18}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":25},"action":"remove","lines":["john@example.com"],"id":19},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["1"]}],[{"start":{"row":13,"column":8},"end":{"row":14,"column":12},"action":"remove","lines":["INSERT INTO shoppingCart (quantity)","VALUES ('1')"],"id":20},{"start":{"row":13,"column":8},"end":{"row":15,"column":19},"action":"insert","lines":["UPDATE `databasename`.`tablename` ","SET fieldB = fieldB + 1 ","WHERE fieldA = '2';"]}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":16},"action":"remove","lines":["`"],"id":21}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":40},"action":"remove","lines":["databasename`.`tablename`"],"id":22}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":16},"action":"insert","lines":["s"],"id":23}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["h"],"id":24}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["o"],"id":25}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["p"],"id":26}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["p"],"id":27}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["i"],"id":28}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["n"],"id":29}],[{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["g"],"id":30}],[{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["C"],"id":31}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["a"],"id":32}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["r"],"id":33}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["t"],"id":34}],[{"start":{"row":13,"column":28},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":35}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":38},"action":"remove","lines":["fieldB"],"id":36},{"start":{"row":13,"column":32},"end":{"row":13,"column":40},"action":"insert","lines":["quantity"]}],[{"start":{"row":13,"column":43},"end":{"row":13,"column":49},"action":"remove","lines":["fieldB"],"id":37},{"start":{"row":13,"column":43},"end":{"row":13,"column":51},"action":"insert","lines":["quantity"]}],[{"start":{"row":13,"column":56},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":38}],[{"start":{"row":13,"column":62},"end":{"row":13,"column":68},"action":"remove","lines":["fieldA"],"id":39},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"insert","lines":["p"]}],[{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"insert","lines":["r"],"id":40}],[{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"insert","lines":["o"],"id":41}],[{"start":{"row":13,"column":65},"end":{"row":13,"column":66},"action":"insert","lines":["d"],"id":42}],[{"start":{"row":13,"column":66},"end":{"row":13,"column":67},"action":"insert","lines":["u"],"id":43}],[{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"insert","lines":["c"],"id":44}],[{"start":{"row":13,"column":68},"end":{"row":13,"column":69},"action":"insert","lines":["t"],"id":45}],[{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"remove","lines":["'"],"id":49}],[{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"remove","lines":["2"],"id":50}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"remove","lines":["'"],"id":51}],[{"start":{"row":13,"column":72},"end":{"row":13,"column":73},"action":"insert","lines":["T"],"id":52}],[{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"insert","lines":["e"],"id":53}],[{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"insert","lines":["e"],"id":54}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"insert","lines":["4"],"id":55}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"remove","lines":["4"],"id":56}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"remove","lines":[";"],"id":57}],[{"start":{"row":13,"column":62},"end":{"row":13,"column":69},"action":"remove","lines":["product"],"id":58},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"insert","lines":["i"]}],[{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"insert","lines":["d"],"id":59}],[{"start":{"row":13,"column":67},"end":{"row":13,"column":70},"action":"remove","lines":["Tee"],"id":60},{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"insert","lines":["4"]}],[{"start":{"row":21,"column":15},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":61}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":62}],[{"start":{"row":23,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["if(processing == success) {","  header(\"Location:filename\");","  exit();","}"],"id":63}],[{"start":{"row":23,"column":2},"end":{"row":23,"column":3},"action":"insert","lines":[" "],"id":64}],[{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":[" "],"id":65}],[{"start":{"row":24,"column":20},"end":{"row":24,"column":28},"action":"remove","lines":["filename"],"id":66},{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":["h"],"id":67}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"insert","lines":["o"],"id":68}],[{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"insert","lines":["p"],"id":69}],[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["p"],"id":70}],[{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"insert","lines":["i"],"id":71}],[{"start":{"row":24,"column":26},"end":{"row":24,"column":27},"action":"insert","lines":["n"],"id":72}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["g"],"id":73}],[{"start":{"row":24,"column":28},"end":{"row":24,"column":29},"action":"insert","lines":["C"],"id":74}],[{"start":{"row":24,"column":29},"end":{"row":24,"column":30},"action":"insert","lines":["a"],"id":75}],[{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"insert","lines":["r"],"id":76}],[{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"insert","lines":["t"],"id":77}],[{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["."],"id":78}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"insert","lines":["p"],"id":79}],[{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"insert","lines":["h"],"id":80}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"insert","lines":["p"],"id":81}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"remove","lines":["if (processing == success) {",""],"id":82}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":["}"],"id":83}],[{"start":{"row":24,"column":9},"end":{"row":25,"column":0},"action":"remove","lines":["",""],"id":84}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"insert","lines":["    "],"id":85},{"start":{"row":2,"column":0},"end":{"row":2,"column":4},"action":"insert","lines":["    "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"remove","lines":["C"],"id":86}],[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["c"],"id":87}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"remove","lines":["4"],"id":88}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"insert","lines":["1"],"id":89}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"remove","lines":["1"],"id":90}],[{"start":{"row":13,"column":71},"end":{"row":13,"column":72},"action":"insert","lines":["2"],"id":91}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":72},"end":{"row":13,"column":72},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1525181187619,"hash":"02ba187de242d0b3130880db1d61db00fef91c58"}
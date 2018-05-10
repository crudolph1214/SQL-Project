{"filter":false,"title":"checkout.php","tooltip":"/checkout.php","undoManager":{"mark":91,"position":91,"stack":[[{"start":{"row":44,"column":0},"end":{"row":84,"column":16},"action":"remove","lines":["        <table class=\"table\">","            <thead>","                <tr>","                    <th scope=\"col\">Item</th>","                    <th scope=\"col\">Quantity</th>","                    <th scope=\"col\">Cost</th>","                </tr>","            </thead>","            <tbody>","                <?php","                    $servername = \"localhost\";","                    $username = \"justinkelleher\";","                    $password = \"\";","                    $dbname = \"dogBarn\";","                    ","                    // Create connection","                    $conn = new mysqli($servername, $username, $password, $dbname);","                    // Check connection","                    if ($conn->connect_error) {","                        die(\"Connection failed: \" . $conn->connect_error);","                    } ","                    ","                    $sql = \"SELECT product, quantity, price FROM shoppingCart\";","                    $result = $conn->query($sql);","                    ","                    if ($result->num_rows > 0) {","                        // output data of each row","                        while($row = $result->fetch_assoc()) {","                            echo \"<tr>\";","                            echo \"<td>\" . $row[\"product\"] . \"</td>\";","                            echo \"<td>\" . $row[\"quantity\"] . \"</td>\";","                            echo \"<td>$\" . ($row[\"quantity\"] * $row[\"price\"]) . \"</td>\";","                            echo \"</tr>\";","                        }","                    } else {","                        echo \"0 results\";","                    }","                    $conn->close();","                ?>","            </tbody>","        </table>"],"id":2},{"start":{"row":44,"column":0},"end":{"row":59,"column":7},"action":"insert","lines":["<form>","  <div class=\"form-group\">","    <label for=\"exampleInputEmail1\">Email address</label>","    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">","    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>","  </div>","  <div class=\"form-group\">","    <label for=\"exampleInputPassword1\">Password</label>","    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">","  </div>","  <div class=\"form-check\">","    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">","    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>","  </div>","  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>","</form>"]}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":2},"action":"remove","lines":["  "],"id":3},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"remove","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"remove","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"remove","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":2},"action":"remove","lines":["  "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":2},"action":"remove","lines":["  "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"remove","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"remove","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":2},"action":"remove","lines":["  "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":2},"action":"remove","lines":["  "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"remove","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"remove","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":2},"action":"remove","lines":["  "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":2},"action":"remove","lines":["  "]}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "],"id":4},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "],"id":5},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "],"id":6},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "],"id":7},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "],"id":8},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "],"id":9},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":48,"column":0},"end":{"row":49,"column":0},"action":"remove","lines":["                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>",""],"id":10}],[{"start":{"row":61,"column":64},"end":{"row":61,"column":72},"action":"remove","lines":["Checkout"],"id":11},{"start":{"row":61,"column":64},"end":{"row":61,"column":65},"action":"insert","lines":["S"]}],[{"start":{"row":61,"column":65},"end":{"row":61,"column":66},"action":"insert","lines":["u"],"id":12}],[{"start":{"row":61,"column":66},"end":{"row":61,"column":67},"action":"insert","lines":["b"],"id":13}],[{"start":{"row":61,"column":67},"end":{"row":61,"column":68},"action":"insert","lines":["m"],"id":14}],[{"start":{"row":61,"column":68},"end":{"row":61,"column":69},"action":"insert","lines":["i"],"id":15}],[{"start":{"row":61,"column":69},"end":{"row":61,"column":70},"action":"insert","lines":["t"],"id":16}],[{"start":{"row":60,"column":14},"end":{"row":60,"column":48},"action":"remove","lines":["action=\"checkout.php\" method=\"get\""],"id":17}],[{"start":{"row":44,"column":13},"end":{"row":44,"column":14},"action":"insert","lines":[" "],"id":18}],[{"start":{"row":44,"column":14},"end":{"row":44,"column":48},"action":"insert","lines":["action=\"checkout.php\" method=\"get\""],"id":19}],[{"start":{"row":59,"column":0},"end":{"row":62,"column":15},"action":"remove","lines":["        ","        <form >","            <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit\">","        </form>"],"id":20}],[{"start":{"row":58,"column":15},"end":{"row":59,"column":0},"action":"remove","lines":["",""],"id":21}],[{"start":{"row":47,"column":129},"end":{"row":47,"column":134},"action":"remove","lines":["email"],"id":22},{"start":{"row":47,"column":129},"end":{"row":47,"column":130},"action":"insert","lines":["n"]}],[{"start":{"row":47,"column":130},"end":{"row":47,"column":131},"action":"insert","lines":["a"],"id":23}],[{"start":{"row":47,"column":131},"end":{"row":47,"column":132},"action":"insert","lines":["m"],"id":24}],[{"start":{"row":47,"column":132},"end":{"row":47,"column":133},"action":"insert","lines":["e"],"id":25}],[{"start":{"row":46,"column":48},"end":{"row":46,"column":61},"action":"remove","lines":["Email address"],"id":26},{"start":{"row":46,"column":48},"end":{"row":46,"column":49},"action":"insert","lines":["N"]}],[{"start":{"row":46,"column":49},"end":{"row":46,"column":50},"action":"insert","lines":["a"],"id":27}],[{"start":{"row":46,"column":50},"end":{"row":46,"column":51},"action":"insert","lines":["m"],"id":28}],[{"start":{"row":46,"column":51},"end":{"row":46,"column":52},"action":"insert","lines":["e"],"id":29}],[{"start":{"row":49,"column":0},"end":{"row":56,"column":18},"action":"remove","lines":["            <div class=\"form-group\">","                <label for=\"exampleInputPassword1\">Password</label>","                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">","            </div>","            <div class=\"form-check\">","                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">","                <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>","            </div>"],"id":30},{"start":{"row":49,"column":0},"end":{"row":53,"column":8},"action":"insert","lines":["  <div class=\"form-group\">","    <label for=\"exampleInputEmail1\">Email address</label>","    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">","    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>","  </div>"]}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":2},"action":"remove","lines":["  "],"id":31},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"remove","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"remove","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"remove","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":2},"action":"remove","lines":["  "]}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "],"id":32},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "],"id":33},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "],"id":34},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":52,"column":0},"end":{"row":53,"column":0},"action":"remove","lines":["            <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>",""],"id":35}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "],"id":36},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":47,"column":61},"end":{"row":47,"column":79},"action":"remove","lines":["exampleInputEmail1"],"id":37},{"start":{"row":47,"column":61},"end":{"row":47,"column":62},"action":"insert","lines":["n"]}],[{"start":{"row":47,"column":62},"end":{"row":47,"column":63},"action":"insert","lines":["a"],"id":38}],[{"start":{"row":47,"column":63},"end":{"row":47,"column":64},"action":"insert","lines":["m"],"id":39}],[{"start":{"row":47,"column":64},"end":{"row":47,"column":65},"action":"insert","lines":["e"],"id":40}],[{"start":{"row":51,"column":61},"end":{"row":51,"column":79},"action":"remove","lines":["exampleInputEmail1"],"id":41},{"start":{"row":51,"column":61},"end":{"row":51,"column":62},"action":"insert","lines":["e"]}],[{"start":{"row":51,"column":62},"end":{"row":51,"column":63},"action":"insert","lines":["m"],"id":42}],[{"start":{"row":51,"column":63},"end":{"row":51,"column":64},"action":"insert","lines":["a"],"id":43}],[{"start":{"row":51,"column":64},"end":{"row":51,"column":65},"action":"insert","lines":["i"],"id":44}],[{"start":{"row":51,"column":65},"end":{"row":51,"column":66},"action":"insert","lines":["l"],"id":45}],[{"start":{"row":47,"column":29},"end":{"row":47,"column":34},"action":"remove","lines":["email"],"id":46},{"start":{"row":47,"column":29},"end":{"row":47,"column":30},"action":"insert","lines":["t"]}],[{"start":{"row":47,"column":30},"end":{"row":47,"column":31},"action":"insert","lines":["e"],"id":47}],[{"start":{"row":47,"column":31},"end":{"row":47,"column":32},"action":"insert","lines":["x"],"id":48}],[{"start":{"row":47,"column":32},"end":{"row":47,"column":33},"action":"insert","lines":["t"],"id":49}],[{"start":{"row":47,"column":66},"end":{"row":47,"column":94},"action":"remove","lines":["aria-describedby=\"emailHelp\""],"id":50}],[{"start":{"row":47,"column":65},"end":{"row":47,"column":66},"action":"remove","lines":[" "],"id":51}],[{"start":{"row":46,"column":28},"end":{"row":46,"column":46},"action":"remove","lines":["exampleInputEmail1"],"id":52},{"start":{"row":46,"column":28},"end":{"row":46,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":46,"column":29},"end":{"row":46,"column":30},"action":"insert","lines":["m"],"id":53}],[{"start":{"row":46,"column":30},"end":{"row":46,"column":31},"action":"insert","lines":["a"],"id":54}],[{"start":{"row":46,"column":31},"end":{"row":46,"column":32},"action":"insert","lines":["i"],"id":55}],[{"start":{"row":46,"column":32},"end":{"row":46,"column":33},"action":"insert","lines":["l"],"id":56}],[{"start":{"row":50,"column":28},"end":{"row":50,"column":46},"action":"remove","lines":["exampleInputEmail1"],"id":57},{"start":{"row":50,"column":28},"end":{"row":50,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":50,"column":29},"end":{"row":50,"column":30},"action":"insert","lines":["m"],"id":58}],[{"start":{"row":50,"column":30},"end":{"row":50,"column":31},"action":"insert","lines":["a"],"id":59}],[{"start":{"row":50,"column":31},"end":{"row":50,"column":32},"action":"insert","lines":["i"],"id":60}],[{"start":{"row":50,"column":32},"end":{"row":50,"column":33},"action":"insert","lines":["l"],"id":61}],[{"start":{"row":46,"column":28},"end":{"row":46,"column":33},"action":"remove","lines":["email"],"id":62},{"start":{"row":46,"column":28},"end":{"row":46,"column":29},"action":"insert","lines":["n"]}],[{"start":{"row":46,"column":29},"end":{"row":46,"column":30},"action":"insert","lines":["a"],"id":63}],[{"start":{"row":46,"column":30},"end":{"row":46,"column":31},"action":"insert","lines":["m"],"id":64}],[{"start":{"row":46,"column":31},"end":{"row":46,"column":32},"action":"insert","lines":["e"],"id":65}],[{"start":{"row":52,"column":18},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":66},{"start":{"row":53,"column":0},"end":{"row":53,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":53,"column":12},"end":{"row":56,"column":18},"action":"insert","lines":["            <div class=\"form-group\">","                <label for=\"name\">Name</label>","                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\">","            </div>"],"id":67}],[{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["    "],"id":68}],[{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["    "],"id":69}],[{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["    "],"id":70}],[{"start":{"row":54,"column":34},"end":{"row":54,"column":38},"action":"remove","lines":["Name"],"id":71},{"start":{"row":54,"column":34},"end":{"row":54,"column":35},"action":"insert","lines":["A"]}],[{"start":{"row":54,"column":35},"end":{"row":54,"column":36},"action":"insert","lines":["d"],"id":72}],[{"start":{"row":54,"column":36},"end":{"row":54,"column":37},"action":"insert","lines":["d"],"id":73}],[{"start":{"row":54,"column":37},"end":{"row":54,"column":38},"action":"insert","lines":["r"],"id":74}],[{"start":{"row":54,"column":38},"end":{"row":54,"column":39},"action":"insert","lines":["e"],"id":75}],[{"start":{"row":54,"column":39},"end":{"row":54,"column":40},"action":"insert","lines":["s"],"id":76}],[{"start":{"row":54,"column":40},"end":{"row":54,"column":41},"action":"insert","lines":["s"],"id":77}],[{"start":{"row":44,"column":44},"end":{"row":44,"column":47},"action":"remove","lines":["get"],"id":78},{"start":{"row":44,"column":44},"end":{"row":44,"column":45},"action":"insert","lines":["p"]}],[{"start":{"row":44,"column":45},"end":{"row":44,"column":46},"action":"insert","lines":["o"],"id":79}],[{"start":{"row":44,"column":46},"end":{"row":44,"column":47},"action":"insert","lines":["s"],"id":80}],[{"start":{"row":44,"column":47},"end":{"row":44,"column":48},"action":"insert","lines":["t"],"id":81}],[{"start":{"row":44,"column":22},"end":{"row":44,"column":23},"action":"insert","lines":["p"],"id":82}],[{"start":{"row":44,"column":23},"end":{"row":44,"column":24},"action":"insert","lines":["r"],"id":83}],[{"start":{"row":44,"column":24},"end":{"row":44,"column":25},"action":"insert","lines":["o"],"id":84}],[{"start":{"row":44,"column":25},"end":{"row":44,"column":26},"action":"insert","lines":["c"],"id":85}],[{"start":{"row":44,"column":26},"end":{"row":44,"column":27},"action":"insert","lines":["e"],"id":86},{"start":{"row":44,"column":27},"end":{"row":44,"column":28},"action":"insert","lines":["w"]}],[{"start":{"row":44,"column":28},"end":{"row":44,"column":29},"action":"insert","lines":["s"],"id":87}],[{"start":{"row":44,"column":28},"end":{"row":44,"column":29},"action":"remove","lines":["s"],"id":88}],[{"start":{"row":44,"column":27},"end":{"row":44,"column":28},"action":"remove","lines":["w"],"id":89}],[{"start":{"row":44,"column":27},"end":{"row":44,"column":28},"action":"insert","lines":["s"],"id":90}],[{"start":{"row":44,"column":28},"end":{"row":44,"column":29},"action":"insert","lines":["s"],"id":91}],[{"start":{"row":53,"column":0},"end":{"row":55,"column":91},"action":"remove","lines":["            <div class=\"form-group\">","                <label for=\"name\">Address</label>","                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\">"],"id":92}],[{"start":{"row":52,"column":18},"end":{"row":53,"column":0},"action":"remove","lines":["",""],"id":93}]]},"ace":{"folds":[],"scrolltop":511.5,"scrollleft":0,"selection":{"start":{"row":52,"column":18},"end":{"row":52,"column":18},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":35,"state":"start","mode":"ace/mode/php"}},"timestamp":1525181906331,"hash":"726c1921644f9c0c8f55e709727b7452ca76f711"}
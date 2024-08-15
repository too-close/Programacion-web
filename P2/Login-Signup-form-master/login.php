
                  <?php
                        include 'conn.php';
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error)
                        {
                              die("Connection failed: " . $conn->connect_error);
                        }
                        $u = $_POST["user"];
                        $p = $_POST["pass"];
                        $sql = "SELECT id, user, pass, nombre, email FROM usuarios where user = '".$u."'and pass = '".$p."'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                        {
                        // output data of each row
                              while($row = $result->fetch_assoc())
                              {
                                  echo "Bienvenido" .$row["nombre"];
                              }
                        } 
                        else
                        {
                              echo "El usuario o contrasena son incorrectos";
                        }
                        $conn->close();
                  ?>
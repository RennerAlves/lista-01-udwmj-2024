        function login($email, $senha){

                $conn = new conecta();
                $con = $conn->conectar();
                $query = $conn->query("SELECT * FROM clientes where email = '".$email."' and senha = '".$senha."'", $con);
                $result = $conn->fetch_array($query);

                return $result;

        }

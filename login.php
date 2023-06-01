<?php
class userService
{
    protected $email;
    protected $password;
    protected $dataUser;

    public function __construct($email, $password) 
    {
        $this->dataUser = [
            (object) [
                'email'     => "user@gmail.com",
                'password'  => "user"
            ],
            (object) [
                'email'     => "admin@gmail.com",
                'password'  => "admin"
            ]
        ];
        $this->email = $email;
        $this->password = $password;
    }

    public function login()
    {
        $user = $this->checkCredentials();
        if ($user) {
            $this->redirectToHomePage();
            return $user->email;
        } else {
            return false;
        }
    }

    protected function checkCredentials()
    {
        foreach ($this->dataUser as $key => $value) {
            if ($value->email == $this->email && $value->password == $this->password) {
                return $value;
            }
        }
        return false;
    }

    protected function redirectToHomePage()
    {
        header("Location: coba2.php");
        exit();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user = new userService($email, $password);
    $loggedInUser = $user->login();
    if ($loggedInUser) {
        echo "Logged in as: " . $loggedInUser;
    } else {
        echo "Login failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login1.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

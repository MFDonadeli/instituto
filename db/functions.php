<?php
class User
{
  /**
   * This will contain a hashed version of the user's password
   *
   * @var string
   */
  protected $password = null;
 
  /**
   * This will contain the salt value used to add noise to the password hash
   *
   * @var string
   */
  protected $password_salt = null;
 
  /**
   * Set the user's password
   *
   * @param string $password
   */
  public function setPassword($password)
  {
    // Test that password is at least 6 characters mixing letters and digits
    //if (! preg_match('/^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z])(?=.*\d).*$/')) {
    //    throw new \ErrorException("Password is not strong enough");
    //}
 
    $this->password_salt = $this->generateRandomSalt();
    $this->password = sha1($password . $this->password_salt);

  }
 
  /**
   * Generate a random salt value, 16 bytes long
   *
   * This relies on OpenSSL being available. If it is not available, any
   * cryptographic-grade random string generation function would work. On
   * UNIX machines, you can just read 16 bytes from /dev/urandom.
   *
   * @return string
   */
  protected function generateRandomSalt()
  {
    return openssl_random_pseudo_bytes(16);
  }
  
  /**
* Check if password is correct
*
* @param  string $password
* @return boolean
*/
  public function checkPassword($password)
  {
    $hashed = sha1($password . $this->password_salt);
    return ($hashed === $this->password);
  }
  public function comparePassword($conn, $password)
  {
    $sql = "SELECT senha, senha_salt FROM user";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $this->password_salt = $row['senha_salt'];
        $this->password = $row['senha'];
        return $this->checkPassword($password);
    } 
    
    return false;
  }
  
  public function saveInDb($conn)
  {
    if($this->password == '' || $this->password_salt == '')
    {
        throw new \ErrorException("Password not set");
    }    
    
    if(!($sql = $conn->prepare("UPDATE user SET senha=?, senha_salt=?")))
    {
        throw new \ErrorException("Erro preparando");    
    }
    
    $sql->bind_param("ss", $this->password, $this->password_salt);
    
    if(!$sql->execute())
    {
        throw new \ErrorException("Execute failed");
    }
    
    echo ( "mudou a senha!!");
    
  }
}

function check_password_from_db($password)
{
    $sql = "select * from user";
    
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        $var = new User();
        if(!$var->checkPassword($password))
            echo('Password não combina');
        else
            echo("Password combina!");
    }
}


?>
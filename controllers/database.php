<?php
class Database
{
  private $host = "db4free.net";
  private $user = "id8057749_scs";
  private $pass = "W%3YFgEeIJpb*3lDKwIv";
  private $db = "id8057749_scs";

  private $mysqli = null;

  public function open()
  {
    if ($this->mysqli == null){
      $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
      if ($this->mysqli->connect_errno)
      {
        printf("MYSQLI CONNECTION ERROR: %s\n", $this->mysqli->connect_error);
      }
    } else
    {
      printf("Close/Use current connection");
    }
  }

  public function isOpen()
  {
    if ($this->mysqli != null)
    {
      return TRUE;
    }
    return FALSE;
  }

  public function close()
  {
    if ($this->mysqli != null)
    {
      $this->mysqli->close();
      $this->mysqli = null;
    }
  }

  public function query($sql)
  {
    return $this->mysqli->query($sql);
  }
}
?>

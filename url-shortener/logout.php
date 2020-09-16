<?php
  function logout() {
    session_destroy();
    setcookie('user_id', NULL, 0);
  };

  session_start();
  logout();
  header("Location: index.php");
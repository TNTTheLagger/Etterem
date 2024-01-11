<?php
      try {
            $conn = mysqli_connect("127.0.0.1", "root", "", "etterem");
      } catch (Exception $e) {
            echo $e;
            die("Nem sikerült csatlakozni");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendeles</title>
        <style>
        .edge{
            border-style: solid;
            border-width: 1px;
            border-color: lightgray;
            background-color: #f9f9f9;
            border-radius: 10px;
            margin-top: 10px;
            padding: 10px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <form action='#' method='post'>
            <div class="edge">
                <?php 
                        require "database.php";
                        $sql = "SELECT * FROM asztalok";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<input type='radio' id='".$row["ID"]."' name='tables' value='".$row["ID"]."'>";
                                echo "<label for='".$row["ID"]."'>".$row["Nev"]."</label>";
                            }
                        }
                        $conn->close();
                ?>
            </div>
            <div class="edge dropdown">
                <span>Valassz rendelest</span>
                <div class="dropdown-content">
                    <?php
                        require "database.php";
                        $sql = "SELECT * FROM etelek";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<p onclick='rendeles(".$row["ID"].")'>".$row["Nev"]." - ".$row["Ar"]."ft</p>";
                            }
                        }
                        $conn->close();
                    ?>
                </div>
            </div>
        </form>
    </div>
    <script>
        
    </script>
</body>
</html>
<html>
<head>
<title>Display</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 5px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
    <body>
    <?php
    
    $db = new mysqli("localhost","root","root","db");
    $select = "select id,username,email,password from record";
    
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Username</th>";
    echo "<th>E-mail</th>";
    echo "<th>Password</th>";
    echo "</tr>";
    
    foreach ($db->query($select) as $col){
        echo "<tr>";
        echo "<td>".$col['id']."</td>";
        echo "<td>".$col['username']."</td>";
        echo "<td>".$col['email']."</td>";
        echo "<td>".$col['password']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    $db = null;
    
	?>
    </body>
</html>
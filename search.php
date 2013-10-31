$sql_select = "SELECT * FROM registration_tbl g WHERE g.name LIKE CONCAT ('%',?,'%'))";
$stmt = $conn->prepare($sql_select);
$stmt->bindValue(1,$name);
$stmt->execute();
$registrants = $stmt->fetchAll();
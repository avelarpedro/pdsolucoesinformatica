<?php 

$conn = new mysqli("localhost", "root", "", "tf5") OR die("Error: " . mysqli_error($conn));

session_start();

//codigo para cadastrar usuario
if (isset($_POST['save'])) {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$iQuery = "INSERT INTO recebedor(username, password) values(?, ?)";

		$stmt = $conn->prepare($iQuery);
		$stmt->bind_param("ss", $username, $password);
		if ($stmt->execute()) {
			$_SESSION['msg'] = "New record is successfully inserted.";
			$_SESSION['alert'] = "alert alert-success";
		}
		$stmt->close();
		$conn->close();
	}
	else {
			$_SESSION['msg'] = "Username and password should not be empty.";
			$_SESSION['alert'] = "alert alert-warning";
	}
	header("location: index.php");
}

#deletar dados selecionados
if (isset($_POST['delete'])) {
	$id = $_POST['delete'];

	$dQuery = "DELETE FROM recebedor WHERE id = ?";
	$stmt = $conn->prepare($dQuery);
	$stmt->bind_param('i', $id);
	if ($stmt->execute()) {
		$_SESSION['msg'] = "Selected record is successfully deleted.";
		$_SESSION['alert'] = "alert alert-danger";
	}
	$stmt->close();
	$conn->close();
	header("location: index.php");
}

# atualizar dados 
if (isset($_POST['edit'])) {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['edit'];

		$uQuery = "UPDATE recebedor SET username = ?, password = ? WHERE id = ?";

		$stmt = $conn->prepare($uQuery);
		$stmt->bind_param('ssi', $username, $password, $id);

		if ($stmt->execute()) {
			$_SESSION['msg'] = "Selected record is successfully Updated.";
			$_SESSION['alert'] = "alert alert-success";
		}
		$stmt->close();
		$conn->close();
	}
	else {
			$_SESSION['msg'] = "Username and password should not be empty.";
			$_SESSION['alert'] = "alert alert-warning";
	}
	header("location: index.php");
}

// tabela prestador


if (isset($_POST['save'])) {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$iQuery = "INSERT INTO prestador(username, password) values(?, ?)";

		$stmt = $conn->prepare($iQuery);
		$stmt->bind_param("ss", $username, $password);
		if ($stmt->execute()) {
			$_SESSION['msg'] = "New record is successfully inserted.";
			$_SESSION['alert'] = "alert alert-success";
		}
		$stmt->close();
		$conn->close();
	}
	else {
			$_SESSION['msg'] = "Username and password should not be empty.";
			$_SESSION['alert'] = "alert alert-warning";
	}
	header("location: index.php");
}

#deletar dadaos
if (isset($_POST['delete'])) {
	$id = $_POST['delete'];

	$dQuery = "DELETE FROM prestador WHERE id = ?";
	$stmt = $conn->prepare($dQuery);
	$stmt->bind_param('i', $id);
	if ($stmt->execute()) {
		$_SESSION['msg'] = "Selected record is successfully deleted.";
		$_SESSION['alert'] = "alert alert-danger";
	}
	$stmt->close();
	$conn->close();
	header("location: index.php");
}

# atualizar dados
if (isset($_POST['edit'])) {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['edit'];

		$uQuery = "UPDATE prestador SET username = ?, password = ? WHERE id = ?";

		$stmt = $conn->prepare($uQuery);
		$stmt->bind_param('ssi', $username, $password, $id);

		if ($stmt->execute()) {
			$_SESSION['msg'] = "Selected record is successfully Updated.";
			$_SESSION['alert'] = "alert alert-success";
		}
		$stmt->close();
		$conn->close();
	}
	else {
			$_SESSION['msg'] = "Username and password should not be empty.";
			$_SESSION['alert'] = "alert alert-warning";
	}
	header("location: index.php");
}

 ?>
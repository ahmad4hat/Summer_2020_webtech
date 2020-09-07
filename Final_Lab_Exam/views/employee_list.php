<?php
// require_once('../php/sessionController.php');
require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>employee List</title>
</head>

<body>


	<h4>Add Empolyee</h4>
	<h1>Employee List page</h1>

	<input type="text" name="search" id="search_input">
	<button id="search_button"> Search</button>


	<?php
	$users = getAllUser();
	?>

	<div id="table">
		<table border=1>
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Name</td>
				<td>Company Name</td>
				<td>Contact no</td>
				<td>password</td>
				<td>type</td>
				<td>action</td>
			</tr>


			<?php for ($i = 0; $i != count($users); $i++) { ?>
				<tr>
					<td><?= $users[$i]['id'] ?></td>
					<td><?= $users[$i]['username'] ?></td>
					<td><?= $users[$i]['name'] ?> </td>
					<td><?= $users[$i]['company_name'] ?></td>
					<td><?= $users[$i]['contact_no'] ?></td>
					<td><?= $users[$i]['password'] ?></td>
					<td><?= $users[$i]['type'] ?></td>

					<td>
						<a href="edit.php?id=<?= $users[$i]['id'] ?>"> Edit</a> |
						<a href="delete.php?id=<?= $users[$i]['id'] ?>"> Delete</a>

					</td>
				</tr>
			<?php } ?>


		</table>
	</div>
	<script>
		const ajaxPost = (url, obj, callback) => {
			console.log(obj);
			const xhttp = new XMLHttpRequest();
			xhttp.open("POST", url, true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			const data = new FormData();
			for (const key in obj) {
				data.append(key, obj[key]);
			}
			let value = null;
			let responseText = (res) => {
				value = res;
			};
			xhttp.send(`search=${obj.search}`);

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					console.log("sending ajax");
					console.log(this.responseText);
					callback(this.responseText);
				}
			};
			//   return value;
		};
		const searchInputEl = document.querySelector("#search_input");
		const searchButtonEL = document.querySelector("#search_button");
		const tableEl = document.querySelector("#table");
		const tableInnerEl = document.querySelector("#table_inner");



		searchButtonEL.addEventListener("click", (event) => {
			ajaxPost("http://localhost/webtech/Final_Lab_Exam/php/user_search_controller.php", {
				"search": searchInputEl.value
			}, (value) => {
				let allValue = "";
				const backValue = JSON.parse(value);

				for (let emp of backValue) {



					let empValue = "";
					for (const key in emp) {
						empValue = empValue + `<td>${emp[key]}</td>`;
					}
					empValue = empValue + `<td>
						<a href="edit.php?id=${emp.id}"> Edit</a> |
						<a href="delete.php?id=${emp.id}"> Delete</a>

					</td>
					</tr>
					`

					allValue = allValue + empValue;

				}



				let table = `<table border=1>
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Name</td>
				<td>Company Name</td>
				<td>Contact no</td>
				<td>password</td>
				<td>type</td>
				<td>action</td>
			</tr>


				${allValue}


			</table>`;
				tableEl.innerHTML = table;

			})
		})
	</script>

</body>


</html>
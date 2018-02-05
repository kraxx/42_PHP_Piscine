var ft_rm = (item) => {
	if (confirm("Remove this task?")) {

		console.log("pre doing it");

		$.ajax({
			type: "POST",
			url: "delete.php",
			data: { id: item.innerHTML},
			error: () => {
				console.log("error running delete.php");
				alert("error running delete.php");
			},
			success: (res) => {
				alert(res);
			}
		});

		console.log("we did it");

		item.remove();
	}
}

$("#new-btn").click(() => {

	var task = prompt("Enter new task:");

	if (task != null && task != "") {

		$.ajax({
			type: "POST",
			url: "insert.php",
			data: { id: task},
			error: () => {
				console.log("error running insert.php");
				alert("error running insert.php");
			},
			success: (res) => {
				$("#ft_list").prepend(res);
			}
		});

	}

});

$(document).ready(() => {

	$.ajax({
		type: "GET",
		url: "select.php",
		error: () => {
			console.log("error running select.php");
			alert("error running select.php");
		},
		success: (res) => {
			$("#ft_list").prepend(res);
		}
	});

})
//cookies do not work on chrome, as chrome does not store cookies for local files

var items_array = [];

var get_and_set_items_from_cookies = function() {
	var cookies = $.cookie("item").split(',');
	if (cookies[0] != "")
		for (var i = 0; i < cookies.length; ++i) {
			items_array.push(cookies[i]);
			ft_add_item(cookies[i], false);
		}
}

var update_cookies = () => {
	var upd = items_array.join(",");
	$.cookie("item", upd);
}

// DO NOT USE WITH COMMAS, as cookies are delimited by commas
var ft_add_item = (task, new_entry) => {
	if (task != null && task != "") {

		$("#ft_list").prepend('<div class="todo" onclick="ft_rm(this)">' + task + '</div>');
		if (new_entry === true) {
			items_array.push(task);
			update_cookies();
		}
	}
}

var ft_rm = (item) => {
	if (confirm("Remove this item?")) {
		var index = items_array.indexOf(item.innerHTML);
		items_array.splice(index, 1);
		update_cookies();
		item.remove();
	}
}

$("#new-btn").click(() => {
	ft_add_item(prompt("Enter new task:"), true);
});

get_and_set_items_from_cookies();

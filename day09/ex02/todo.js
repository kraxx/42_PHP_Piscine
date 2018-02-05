//cookies do not work on chrome, as chrome does not store cookies for local files

var items_array = [];

var get_and_set_items_from_cookies = function() {
	var cookies = document.cookie.substring(5).split(',');
	if (cookies[0] != "")
		for (var i = 0; i < cookies.length; ++i) {
			items_array.push(cookies[i]);
			ft_add_item(cookies[i], false);
		}
}

var update_cookies = () => {
	var upd = items_array.join(",");
	document.cookie = "item=" + upd;
}

// DO NOT USE WITH COMMAS, as cookies are delimited by commas
var ft_add_item = (task, new_entry) => {
	if (task != null && task != "") {
		var new_item = document.createElement('div');
		new_item.className = "todo";
		new_item.innerHTML = task;
		if (new_entry === true) {
			items_array.push(task);
			update_cookies();
		}
		new_item.onclick = function() {
			ft_rm(this);
		}
		document.getElementById('ft_list').prepend(new_item);
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

get_and_set_items_from_cookies();

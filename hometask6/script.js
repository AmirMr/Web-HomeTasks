function lineThrough(event) {
	const button = event.currentTarget;

	const parent = button.parentNode;

	parent.dataset.status = 'done';


}

const bottons = document.querySelectorAll("button");
for (var item of bottons) {
	item.addEventListener('click', lineThrough);
}

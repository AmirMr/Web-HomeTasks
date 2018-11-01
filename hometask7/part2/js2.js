const but = document.querySelector("button");

const cards = document.querySelector("#cards");
const image = document.querySelector("#loading");

function clicked() {
	image.style.display = "block";
	fetch("http://demo4296963.mockable.io/listCars").then(convert).then(onSuccess);
}
function onSuccess(argument) {
	for (var i = 0; i < argument.length; i++) {
		const card = document.createElement('div');
		card.className = 'card';
		
		const title = document.createElement('p');
		title.className = 'title';
		
		const price = document.createElement('p');
		price.className = 'price';
		title.textContent = argument[i].maker + " " + argument[i].model;
		price.textContent = argument[i].price;
		card.appendChild(title);
		card.appendChild(price);
		cards.appendChild(card);
	}	
	image.style.display = "none";
}
function convert(argument) {
	return argument.json();
}



but.addEventListener('click', clicked);






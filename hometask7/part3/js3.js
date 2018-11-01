const but = document.querySelector("button");
const cards = document.querySelector("#cards");
const image = document.querySelector("#loading");
const sortByMaker = document.querySelector("#sortByMaker");
const sortByPrice = document.querySelector("#sortByPrice");
var arr;

function clicked() {
	image.style.display = "block";
	fetch("http://demo4296963.mockable.io/listCars").then(onSu2);
}
function onPush(argument) {
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
function OnSuccess(argument) {
	arr = new Array();
	arr = JSON.parse("[" + argument + "]")[0];
	onPush(arr);
}
function sortByM() {
	cards.innerHTML = "";

}
function onSu2(argument) {
	return argument.text().then(OnSuccess);
}

function function_name(a,b) { 
	if (a.maker > b.maker) {
		return 1;
	}
	else if(a.maker < b.maker){
		return -1;
	}
	else{
		return 0;
	}
}
function MakerSort() {
	cards.innerHTML = "";
	arr.sort(function_name);
	onPush(arr);
}


sortByMaker.addEventListener('click', MakerSort);
but.addEventListener('click', clicked);

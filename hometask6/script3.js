let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},
{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},
{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];

const allCars = document.querySelector("#cars");
for (let i = 0; i < cars.length; i++) {
	const card = document.createElement('div');
	card.className = "card";
	const image = document.createElement('img');
	const pLar = document.createElement('p');
	const basket = document.createElement('div');
	basket.className = "basket";

	basket.dataset.price = cars[i]['price'];

	const imgForBasket = document.createElement('img');
	imgForBasket.className = "bas";
	imgForBasket.src = "basketImg.png";
	imgForBasket.style.width = "24px";

	basket.appendChild(imgForBasket);

	image.src = cars[i]['image_url'];
	pLar.textContent = cars[i]['brand'] + " " + cars[i]['model']
	card.appendChild(image);
	card.appendChild(pLar);
	card.appendChild(basket);
	allCars.appendChild(card);
}
const dela = document.createElement('button');
dela.className = "but";
allCars.appendChild(dela);


let sum = 0;
let count = 0;

function clearValue() {
	const items = document.querySelector("#items");
	const sum = document.querySelector("#sum");
	
	const bas = document.querySelectorAll(".bas");
	
	for (var i = 0; i < bas.length; i++) {
		bas[i].src = "basketImg.png";
	}

	items.textContent = 0;
	sum.textContent = 0;


}
dela.addEventListener('click', clearValue);




function clicked(event) {
	const photo = event.currentTarget;
	const parrent = photo.parentNode;
	const items = document.querySelector('#items');
	const sums = document.querySelector('#sum');

	if (photo.dataset.done == 'notBought') {
		photo.src = 'transfer.png';
		sum += parseInt(parrent.dataset.price);
		count += 1;
		items.textContent = count;
		sums.textContent = sum;
		photo.dataset.done = 'done';
	}else{
		photo.src = 'basketImg.png';
		sum -= parseInt(parrent.dataset.price);
		count -= 1;
		items.textContent = count;
		sums.textContent = sum;
		photo.dataset.done = 'notBought';
	}

}
const baskets = document.querySelectorAll(".basket img");

for (let i = 0; i < baskets.length; i++) {
	baskets[i].dataset.done = "notBought";
	baskets[i].addEventListener('click', clicked);
}














const sprotB = document.querySelector("#sport");
const politicsB = document.querySelector("#politics");
const bussinessB = document.querySelector("#bussiness");



const main = document.querySelector("#main");

function functionForSport() {
	const source = 'http://demo4296963.mockable.io/news-bussiness';
	fetch(source).then(loaded);
}
function functionForPolitics(argument) {
	const source = 'http://demo4296963.mockable.io/news-politics';
	fetch(source).then(loaded);
}
function functionForBussiness(argument) {
	const source = 'http://demo4296963.mockable.io/news-sport';
	fetch(source).then(loaded);
}

function loaded(response) {
	response.text().then(read_Page)
}

function read_Page(response) {
	main.innerHTML = response;
}



sprotB.addEventListener('click', functionForSport);
politicsB.addEventListener('click', functionForPolitics);
bussinessB.addEventListener('click', functionForBussiness)
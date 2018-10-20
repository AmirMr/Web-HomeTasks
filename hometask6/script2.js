let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
let countries = ["Kazakhstan","Russia","England","France"];


const country = document.querySelector("#countries");
	
for (let item of countries) {
	const option = document.createElement("option");
	option.textContent = item;
	option.value = item;
	country.appendChild(option); 		
}

function call(){
	const whichCountry = country.options[country.selectedIndex];
	const city = document.querySelector("#cities");

	city.innerHTML = '';

	for(let item of cities_by_country[whichCountry.value]){
		const optionCity = document.createElement("option");
		optionCity.textContent = item;
		optionCity.value = item;
		city.appendChild(optionCity); 
	}
}
	
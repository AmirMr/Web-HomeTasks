
function add(event) {
	const inputName = document.querySelector('#name');
	const inputSurname = document.querySelector('#surname');
	const faculties = document.querySelector("#faculty");
	const selected = faculties.options[faculties.selectedIndex];
	if ((inputName.value != '') && (inputSurname.value != '') && (selected.value !='-1')) {

		faculties.classList.remove("error");

		const table = document.querySelector("#students");
		const tr = table.insertRow();
		const firstTd = tr.insertCell();
		const secondTd = tr.insertCell();
		const thirdTd = tr.insertCell();

		thirdTd.style.fontWeight = "bold";

		firstTd.textContent = inputName.value;
		secondTd.textContent = inputSurname.value;
		thirdTd.textContent = selected.value;

		inputName.value = "";
		inputSurname.value = "";
		faculties.value = "-1"

	}else{
		if (inputName.value == '') {
			inputName.classList.add("error");
		}
		else if(inputSurname.value == ''){
			inputSurname.classList.add("error");
			inputName.classList.remove("error");
		}else{
			faculties.classList.add("error");
			inputSurname.classList.remove("error");
		}

	}

}

const button = document.querySelector("button");
button.addEventListener('click', add);
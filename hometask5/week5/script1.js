function calculateD(){
	const s11 = document.getElementById('s11').value;
	const s12 = document.getElementById('s12').value;
	const s13 = document.getElementById('s13').value;
	const s21 = document.getElementById('s21').value;
	const s22 = document.getElementById('s22').value;
	const s23 = document.getElementById('s23').value;
	const s31 = document.getElementById('s31').value;
	const s32 = document.getElementById('s32').value;
	const s33 = document.getElementById('s33').value;
	document.getElementById("result").textContent = 
		(s11*s22*s33 + s12*s23*s31 + s21*s32*s13)-
		(s13*s22*s31 + s32*s23*s11 + s21*s12*s33)
	;


}

const button = document.querySelector("#determinant");
button.addEventListener('click', calculateD);

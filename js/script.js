let usuarios = ["nico", "andy", "sofi"];
let input = document.getElementById("input");
let log = "nico";

function check(registro, new_registro) {
    for (let user of registro) {
        if (user === new_registro) {
            return alert("Ese usuario ya esta en uso");
        }
    }
}

check(usuarios, log);
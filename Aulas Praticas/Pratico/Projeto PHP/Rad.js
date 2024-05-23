const Inp4 = document.querySelector("#INP4")
const Inp6 = document.querySelector("#INP6")
const RadIP4 = document.querySelector("#IPV4")
const RadIP6 = document.querySelector("#IPV6")
const ButIP4 = document.querySelector("#But4")
const ButIP6 = document.querySelector("#But6")

RadIP4.addEventListener("click", IP4)
RadIP6.addEventListener("click", IP6)

IP4();

function IP4() {
    Inp6.value = "";
    RadIP6.checked = false;
    Inp4.disabled = false;
    Inp6.disabled = true;
    ButIP4.disabled = false;
    ButIP6.disabled = true;
}

function IP6() {
    Inp4.value = "";
    RadIP4.checked = false;
    Inp4.disabled = true;
    Inp6.disabled = false;
    ButIP6.disabled = false;
    ButIP4.disabled = true;    
}

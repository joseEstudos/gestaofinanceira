const option = {
    year: "numeric",
    month: "long",
    day: "numeric"
};
var i, x = document.getElementsByClassName("dataextenso");
for (i = 0; i < x.length; i++) x[i].innerText = new Date(x[i].textContent.replaceAll("-", ",")).toLocaleDateString("pt-br", option);
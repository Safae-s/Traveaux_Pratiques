// Cibler les éléments
const paragraphe = document.getElementById("monParagraphe");
const maDiv = document.getElementById("maDiv");
const btnChanger = document.getElementById("changerBtn");


paragraphe.style.backgroundColor = "lightblue";
paragraphe.style.textAlign = "center";
paragraphe.style.padding = "10px";
paragraphe.style.borderRadius = "8px";
paragraphe.style.fontSize = "18px";

// Lorsqu'on clique sur le bouton -> modifier le texte
btnChanger.addEventListener("click", function() {
    paragraphe.textContent = "Le texte a été modifié";
});

// Lorsqu'on clique sur la div -> modifier le texte
maDiv.addEventListener("click", function() {
    paragraphe.textContent = "Un clic a été détecté";
});

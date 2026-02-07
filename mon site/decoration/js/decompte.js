const section = document.createElement("h3");
const item = document.getElementsByClassName("notes");
section.style.color = "black";

document.querySelector("#liste").appendChild(section).innerText =
  "Nombre de régions dans cette page est:" + item.length;

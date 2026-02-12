const message = document.querySelectorAll(".message");
const title = document.querySelectorAll(".messageTitle");
for (i = 0; i < title.length; i++) {
  title[i].addEventListener("click", basculerItem);
}
function basculerItem() {
  let itemClass = this.parentNode.className;
  for (i = 0; i < message.length; i++) {
    message[i].className = "message closed";
  }
  if (itemClass === "message closed") {
    this.parentNode.className = "message open";
  }
}

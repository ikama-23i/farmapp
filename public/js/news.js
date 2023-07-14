
// クリックすると表示するように
document.getElementById("newscherrycoment").style.display = "none";

const cherryComent = document.getElementById("newscherry");
cherryComent.addEventListener("click", () => {
  document.getElementById("newscherrycoment").style.display = "";
});
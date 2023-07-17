
// クリックすると表示するように
document.getElementById("newscherrycoment").style.display = "none";

const cherryComent = document.getElementById("newscherry");
cherryComent.addEventListener("click", (event) => {
  event.stopPropagation();
  
  document.getElementById("newscherrycoment").style.display = "";
});

document.getElementById("article-news").addEventListener("click", () => {
  
  document.getElementById("newscherrycoment").style.display = "none";
});
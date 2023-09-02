
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

// タケノコ販売お知らせ
document.getElementById("newsbamboocoment").style.display = "none";

const bambooComent = document.getElementById("newsbamboo");
bambooComent.addEventListener("click", (event) => {
  event.stopPropagation();
  
  document.getElementById("newsbamboocoment").style.display = "";
});

document.getElementById("article-news2").addEventListener("click", () => {
  
  document.getElementById("newsbamboocoment").style.display = "none";
});

// レモンのお知らせ
document.getElementById("newslemoncoment").style.display = "none";

const lemonComent = document.getElementById("newslemon");
lemonComent.addEventListener("click", (event) => {
  event.stopPropagation();
  
  document.getElementById("newslemoncoment").style.display = "";
});

document.getElementById("article-news3").addEventListener("click", () => {
  
  document.getElementById("newslemoncoment").style.display = "none";
});

// サクランボ狩り終了お知らせ
document.getElementById("newscherrycomentend").style.display = "none";

const cherryComentend = document.getElementById("newscherryend");
cherryComentend.addEventListener("click", (event) => {
  event.stopPropagation();
  
  document.getElementById("newscherrycomentend").style.display = "";
});

document.getElementById("article-news5").addEventListener("click", () => {
  
  document.getElementById("newscherrycomentend").style.display = "none";
});

// 柿狩りの予約開始お知らせ
document.getElementById("newspersimmoncoment").style.display = "none";

const persimmonComent = document.getElementById("newspersimmon");
persimmonComent.addEventListener("click", (event) => {
  event.stopPropagation();
  
  document.getElementById("newspersimmoncoment").style.display = "";
});

document.getElementById("article-news").addEventListener("click", () => {
  
  document.getElementById("newspersimmoncoment").style.display = "none";
});
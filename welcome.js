//////////////////////////////slider
var i = 0 //start index
var images = []
var time = 5000

images[0] = 'https://wow.olympus.eu/webfile/img/1632/oly_testwow_stage.jpg?x=1024'
images[1] = 'https://www.linkedin.com/media-proxy/ext?w=1200&h=675&hash=nSi8OI4jRAitNsIyZ37uJ0hDins%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6plxVUzgUv5K_PrkC9q0RIUJDPBy-mXCGj-tafZ3DtcMfcZLSiolURcCUDkwEzfuiuSTHpEI69LcLmY4Yx3A'


function changeImg(){
  document.slide.src = images[i]
  console.log(images[i])

  if(i < images.length-1){
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time)
}

window.onload = changeImg
/////////////////////////////////////
////////////////////////////////////visibility of element
window.onscroll = function(){
  scrolling()
}

function scrolling(){
  var left = document.querySelector(".left")
  let startPosition = window.pageYOffset

  if(startPosition >= 500){
    left.style.visibility = "visible";
  }
  else {
    left.style.visibility = "hidden"
  }

  var right = document.querySelector(".right")

  if(startPosition >= 750){
    right.style.visibility = "visible";
  }
  else {
    right.style.visibility = "hidden"
  }

  var leftBottom = document.getElementById("leftBottom")

  if(startPosition >= 1200){
    leftBottom.style.visibility = "visible";
    console.log("v");
  }
  else {
    leftBottom.style.visibility = "hidden"
    console.log("h");
  }

}
///////////////////////////////////
/////////////////////////////////XML request
var xhr = new XMLHttpRequest()
xhr.onreadystatechange = function() {
  if(xhr.readyState == 4){
    if(xhr.status == 200){
        //var text = document.getElementsByClassName('weather')[0]
        var text = JSON.parse(xhr.responseText)

        document.getElementsByClassName('testing')[0].innerHTML =
        `
        <li>User id: ${text[0].userId}</li>
        <li>Title: ${text[0].title}</li>
        `;

        // console.log(text.userId);
        // console.log((xhr.responseText));
        // console.log(text.title);
    }
  }
}
var url = "https://jsonplaceholder.typicode.com/posts/";
xhr.open('GET', url, true)
xhr.send()
//////////////////////////////////////

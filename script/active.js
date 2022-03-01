const btnContainer = document.querySelector('.change--sever');
const btnActive = btnContainer.getElementsByClassName('link--sever');

for (var i = 0; i < btnActive.length; i++) {
    btnActive[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("link--sever-active");
      current[0].className = current[0].className.replace(" link--sever-active", "");
      this.className += " link--sever-active";
    });
  }
  function myFunctionActive() {
    var watcheslight = document.querySelector('.watches--light');
    var foot = document.querySelector('.main--footer');
    var head = document.querySelector('.top-header');
    var intro = document.querySelector('.watches--left-introimg');
    var e = document.querySelector('.container--watches');
    var title = document.querySelector('.title--detail');
    var comment = document.querySelector('.detial--comment');
    var likewatch = document.querySelector('.likewatch');
    var right = document.querySelector('.watches--right');
    var display = document.querySelector('.container--watches');
    var element = document.body;

    display.classList.toggle('turn--of-display');
    right.classList.toggle('footer--display');
    likewatch.classList.toggle('footer--display');
    comment.classList.toggle('footer--display');
    title.classList.toggle('footer--display');
    intro.classList.toggle('footer--display');
    head.classList.toggle('footer--display');
    foot.classList.toggle('footer--display');
    e.classList.toggle("main--container-watches");
    element.classList.toggle("dark-mode");

   if(watcheslight.innerHTML ==='Tắt đèn'){
    watcheslight.innerHTML ='Bật đèn';
   }else{
     watcheslight.innerHTML = 'Tắt đèn';
   }
  }

  function myFucntionZoom(){
    var watcheslefttop = document.querySelector('.watches--left-top');
    var watchesright = document.querySelector('.watches--right');
    var watchezoom = document.querySelector('.watches--zoom');
    var changesever = document.querySelector('.change--sever');

    changesever.classList.toggle('change--sever-zoom');
    watcheslefttop.classList.toggle('watches--change-zoom');
    watchesright.classList.toggle('right--zoom');

    if(watchezoom.innerHTML==='Phóng to'){
      watchezoom.innerHTML ='Thu nhỏ';
    }else{
      watchezoom.innerHTML ='Phóng to';
    }
  }
   function myFucntionEpisode (){
     var turnchangeepisode = document.querySelector('.turn--changeepisode');
     if(turnchangeepisode.innerHTML === "Tắt"){
      turnchangeepisode.innerHTML = "Bật";
     }else{
      turnchangeepisode.innerHTML="Tắt";
     }
   }
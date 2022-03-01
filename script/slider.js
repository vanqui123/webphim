window.addEventListener("load",function(){
const  slider = document.querySelector(".list--top-movie");
const sliderMain = document.querySelector(".top--movie-nomination");
const nextButton = document.querySelector(".top--movie-iconright");
const prevButton = document.querySelector(".top--movie-iconleft");
const sliderItems = document.querySelectorAll(".top--moview-list");
const sliderItemWidth = sliderItems[0].offsetWidth;
const sliderLength = sliderItems.length;
const width = sliderItemWidth*sliderLength;
let positionX = 0;
let index = 0;
console.log(sliderItemWidth);
console.log(sliderLength);
console.log(width);
console.log(index);
nextButton.addEventListener("click",function(){
    handleChangeSlide(1);
    
});
prevButton.addEventListener("click",function(){
    handleChangeSlide(-1);
});
function s() {
  
    index++;
    if(index >= sliderLength){
        positionX = positionX + width - sliderItemWidth;
        sliderMain.style = `transform:translateX(${positionX}px)`;
        index = 0;
    }
    else{
        positionX = positionX - sliderItemWidth ;
        sliderMain.style = `transform:translateX(${positionX}px)`;  
    }
 
}
// setInterval(s,3000);
function handleChangeSlide(direction){
    if(direction === 1){
        index++;
        if(index >= sliderLength){
            positionX = positionX + width - sliderItemWidth;
            sliderMain.style = `transform:translateX(${positionX}px)`;
            if(positionX == -1600){
                positionX =0;
            }
            index = 0;
        }
        else { 
       positionX = positionX - sliderItemWidth ;
       sliderMain.style = `transform:translateX(${positionX}px)`; 
        }

    }
    else if(direction === -1){
        index--;
        if(index <= 0){
            positionX = positionX - width + sliderItemWidth;
            sliderMain.style = `transform:translateX(${positionX}px)`;
            index = sliderLength;
        }
        else {
        positionX = positionX + sliderItemWidth;
        sliderMain.style = `transform:translateX(${positionX}px)`;
        }
    }
}
});
window.addEventListener("load",function(){
    const titilePhimLeMoi = document.querySelector("#title--phimlemoi");
    const titilePhimBoMoi = document.querySelector("#title--phimbomoi");
    const titilePhimBoFull = document.querySelector("#title--phimbofull");
    const phimLeMoi = document.querySelector(".phimlemoi--movie");
    const phimBoMoi = document.querySelector(".phimbomoi--movie");
    const phimBoFull = document.querySelector(".phimbofull--movie");
    titilePhimBoMoi.addEventListener("click",function(){
        titilePhimBoMoi.classList.add('active--title');
        titilePhimLeMoi.classList.remove('active--title');
        titilePhimBoFull.classList.remove('active--title');
        phimBoMoi.style.display = 'block';
        phimLeMoi.style.display = 'none';
        phimBoFull.style.display = 'none';


    });
    titilePhimLeMoi.addEventListener("click",function(){
        titilePhimBoMoi.classList.remove('active--title');
        titilePhimBoFull.classList.remove('active--title');
        titilePhimLeMoi.classList.add('active--title');
        phimBoMoi.style.display = 'none';
        phimLeMoi.style.display = 'block';
        phimBoFull.style.display = 'none';
    });
    titilePhimBoFull.addEventListener("click",function(){
        titilePhimBoMoi.classList.remove('active--title');
        titilePhimBoFull.classList.add('active--title');
        titilePhimLeMoi.classList.remove('active--title');
        phimBoMoi.style.display = 'none';
        phimLeMoi.style.display = 'none';
        phimBoFull.style.display = 'block';
    });
});
window.addEventListener("load", function(){
    const slideMainActor = document.querySelector(".info--actor");
    const slideItemsActor = document.querySelectorAll(".nameimg--info");
    const nextBtn = document.querySelector(".icon--actor-right");
    const prevBtn = document.querySelector(".icon--actor-left");
     const  sliderActorLength = slideItemsActor.length;
    const sliderItemActorWidth = slideItemsActor[0].offsetWidth;
    const witdhActor = sliderActorLength *sliderItemActorWidth;
    let positionX = 0;
    let index = 0;
    nextBtn.addEventListener("click",function(){
        handleChangeSlideActor(1);
    });
    prevBtn.addEventListener("click",function(){
        handleChangeSlideActor(-1);
    });
    function handleChangeSlideActor(direction){
        if(direction == 1){
            index++;
        if(index >= sliderActorLength){
            positionX = positionX + witdhActor- sliderItemActorWidth ;
            slideMainActor.style = `transform:translateX(${positionX}px)`;
            index = 0;
        }
        else {
       positionX = positionX - sliderItemActorWidth ;
       slideMainActor.style = `transform:translateX(${positionX}px)`;  
        }
        }
        else if(direction == -1){
            index--;
            if(index <= 0){
                positionX = positionX - witdhActor + sliderItemActorWidth;
                slideMainActor.style = `transform:translateX(${positionX}px)`;
                index = sliderActorLength;
            }
            else {
            positionX = positionX + sliderItemActorWidth;
            slideMainActor.style = `transform:translateX(${positionX}px)`;
            }
        }
    }
});
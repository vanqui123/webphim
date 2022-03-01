const comment = document.querySelectorAll('.viewcomment');
const btnshowComment = document.querySelector('.viewadd--comment');
for(let i = 0; i <= comment.length; i++){
    if(i>=5)
      {    
        comment[i].style.display = 'none';
        btnshowComment.style.display='block';
    }
}

function showComment ()  {
    for(let i = 0; i <= comment.length; i++){
        if(i>=10)
          {    
            comment[i].style.display = 'flex';
           
        }
      
    }
}
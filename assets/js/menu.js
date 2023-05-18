var menu= document.querySelector('#inicio');


windows.addEvenListener('scroll', ()=>{

var scroll = windows.scrollY;

if(scroll>10){
    
menu,style.backgroundColor='rgb(141, 84, 9)';
}else{
menu,style.backgroundColor='transparent';
}

});
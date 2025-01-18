let profileBox = document.getElementById('pBOX');
let display = 0;
function ProfileinfoShow(){

if(display == 1){
profileBox.style.display='block';
display=0 ;
}else{
    profileBox.style.display='none';
    display=1;
}

}
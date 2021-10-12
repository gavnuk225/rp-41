let reg=  document.getElementById('p_reg');
let auto=document.getElementById('p_auto');
let non_user_cont= document.getElementById('non_user_container');
let counter =0;
function invis(){
    counter++;
    if(counter%2>0){
        document.getElementById('switch').src="../img/switch_on.png";
        non_user_cont.style.display="none";
        document.getElementById('auto_admin').style.display="block";
    }
    if(counter%2==0){
        document.getElementById('switch').src="../img/switch.png";
        non_user_cont.style.display="flex";
        document.getElementById('auto_admin').style.display="none";
    }

    auto.classList.toggle('invisible');
reg.classList.toggle('invisible');

}
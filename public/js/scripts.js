let coin = document.querySelectorAll("#coin");
console.log(coin[0]);


for(let i=0; i<7; i++)
{
  let flag=0;

  coin[i].addEventListener('click', click_effect, false);

  function click_effect(){
    if(flag==0){
      coin[i].classList.add("coin-box-after");
      flag=1;
    }
    else{
      coin[i].classList.remove("coin-box-after");
      flag=0;
    }
    console.log("click");
  }
}

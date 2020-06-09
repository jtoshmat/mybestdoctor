
    function healthCareOpt(){
        document.getElementById('healthCareOpt').style.display='block';
        document.getElementById('div6').style.display='block';
        document.getElementById('div7').style.display='none';
        document.getElementById('div3').style.backgroundColor='white';
        document.getElementById('div3').style.color='black';
        document.getElementById('div2').style.borderBottom='20px solid white';
        document.getElementById('div2').style.borderTop='20px solid white';
        document.getElementById('div2').style.borderLeft='16px solid blue';
        document.getElementById('div1').style.backgroundColor='blue';
        document.getElementById('div1').style.color='white';
    };
function chooseHealthCare() {
    document.getElementById('div4').innerHTML=document.getElementById('op1').innerHTML+'-';
    document.getElementById('div6').style.display='none';
    document.getElementById('div7').style.display='block';
    document.getElementById('div3').style.backgroundColor='blue';
    document.getElementById('div3').style.color='white';
    document.getElementById('div2').style.borderBottom='20px solid blue';
    document.getElementById('div2').style.borderTop='20px solid blue';
    document.getElementById('div2').style.borderLeft='16px solid white';
    document.getElementById('div1').style.backgroundColor='white';
    document.getElementById('div1').style.color='grey';
}
function choosePlan() {
    document.getElementById('insurance').value=document.getElementById('div4').innerHTML+document.getElementById('plan1').innerHTML;
    document.getElementById('healthCareOpt').style.display='none';
}



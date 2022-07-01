
const tname=document.getElementsById('tname')
const tcontact=document.getElementsById('tcontact')
const date=document.getElementsById('date')
const member=document.getElementsById('member')
const payment=document.getElementsById('payment')
const form=document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('insert', (e)=>{
    e.preventDefault();
    let massages=[]
    if (tname.value=== ''|| tname.value == null){
        messages.push('Name is required')
    }
if (tcontact.value.length<=11){
    messages.push('Number must be 11')
}

if (member.value===''|| member.value==null){
    messages.push('Number is required' )
}

if (payment.value ==null || payment.value.length<=1){
    messages.push('Give a right amount of money')
}

    if(massages.length>3){

    
    a.preventDefault()
    errorElement.innerText=message.join(' , ')}
})
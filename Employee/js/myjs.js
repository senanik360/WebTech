const fname = document.getElementById('fname')
const lname = document.getElementById('lname')
const number = document.getElementById('number')
const address = document.getElementById('address')
const salary = document.getElementById('salary')
const NID = document.getElementById('NID')
const form= document.getElementById('form')
const errotElement = document.getElementById('error')

form.addEventListener('insert', (e)=>{
  let messages =[]
  if(fname.value===''||fname.value== null){
    messages.push('Name is required')
  }
  if(lname.value===''||lname.value== null){
    messages.push('Name is required')
  }
  if(number.value.length <=11){
    messages.push('Must be 11')
  }
  if(address.value===''||address.value== null){
    messages.push('Address is required')
  }
  if(salary.value===''||salary.value== null){
    messages.push('Salary is Required ')
  }
  if(NID.value.length >=12){
    messages.push('NID must be more than 6 number')
  }

  if(messages.length>0){
    e.preventDefault()
    errotElement.innerText= messages.join(', ')
  }

})
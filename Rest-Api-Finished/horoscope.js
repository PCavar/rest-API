  
var  input = document.querySelector("#add_horoscope");

var  savedButton = document.querySelector("#save_horoscope");
var  deleteButton = document.querySelector("#delete_horoscope");
var updateButton = document.querySelector("#update_horoscope");

//Declader a function called postData, then ropat på the function to get the input value
savedButton.addEventListener('click', (element) => {
    var formData = new FormData();
    formData.append('personNr', input.value)
    fetch('./addHoroscope.php',{
        method: "POST",
        body: formData
    })
    .then(function(response){
        return response.json()
    }).then(function(data){
        console.log(data)
        initsight()
    }).catch(function(error){
        console.log(error)
    })

});

deleteButton.addEventListener('click', () => {
    fetch('./deleteHoroscope.php',{
        method: "DELETE"
    })
    .then(function(response){
        return response.json()
    }).then(function(data){
        console.log(data)
        initsight()
    }).catch(function(error){
        console.log(error)
    })
   

});

updateButton.addEventListener('click', () => {
    var formData = new FormData();
    formData.append("personNr", input.value)
    fetch("./updateHoroscope.php",{
        method:"POST",
        body: formData

    }).then(function(response){
        return response.json()
    }).then(function(data){
        console.log(data)
        initsight()
    }).catch(function(error){
        console.log(error)
    })
});









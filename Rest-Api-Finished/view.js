function initsight() {
    fetch("./viewHoroscope.php", {
        method: "GET",     
        }).then(function(response){
            return response.json()
    }).then(function(data){
        var p = document.getElementById("zodiacSign");
        p.innerText = data;
    })
};

//When DOM loaded we attach click event to button
$(document).ready(function() {
    //start ajax request
    $.ajax({
        url: "uploads/json.txt",
        //force to handle it as text
        dataType: "text",
        success: function(data) {
            try{
                //alert("success!: "+data);
                //data downloaded so we call parseJSON function 
                //and pass downloaded data
                var json = JSON.parse(data);
                //now json variable contains data in json format
                //let's display a few items
                var html = "";
                var arr = json.ministries;
                //console.log(arr);
                for (var i = 0; i < arr.length; i++) {
                    //console.log(arr[i]);
                    html += "<li><p><img src='coat_of_arms.png' class=''>" 
                    + "<span class='ministry'>" + arr[i].name + "</span>" + 
                    "</p>" 
                    +
                    "<p class='name'>Minister: " 
                    + arr[i].minister + " - " + arr[i].origin + 
                    " state</p>"
                    +
                    "<p>Address:</p>"
                    +
                    "<p>"
                    + arr[i].address +
                    "</p>"
                    +
                    "<p>Web: <a href=http://" +arr[i].website+">" 
                    + arr[i].website + "</a>"
                    "</p></li>"
                    +
                    "<hr>";
                };
                $('#items').html(html);
                $('#items>li').readmore({
                    embedCSS: true,
                    blockCSS: 'border-bottom: 1px solid grey'
                });
            }
            catch(err)
            {
               alert("Error: something went wrong"); 
            }


        }
    });
});
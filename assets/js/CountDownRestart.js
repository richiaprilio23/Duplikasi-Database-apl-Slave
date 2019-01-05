//http://jsfiddle.net/9yc8qsdy/
//https://stackoverflow.com/questions/29251235/how-to-define-a-simple-countdown-which-restart-automatically-in-javascript

/*coutdown hotel bahgia*/
$(document).ready(function(){
            var refreshTime = 22,  //Time seting 
            timer, counter; 
                counter = refreshTime;
                $('#countBahagia').text(counter+" ");
                timer = setInterval(function (){
                    $("#countBahagia").html(counter+"<br> ");
                if(counter == 0){
                  counter = refreshTime;
                  $('#countBahagia').html(counter+" <br>Done");               
                }else{
                    counter--;
                }
            }, 1000);
        }); 

/*coutdown hotel Camplong*/
$(document).ready(function(){
            var refreshTime = 25,  //Time seting 
            timer, counter;
                counter = refreshTime;
                $('#countCamplong').text(counter+" ");
                timer = setInterval(function (){
                    $("#countCamplong").html(counter+"<br> ");
                if(counter == 0){
                  counter = refreshTime;
                  $('#countCamplong').html(counter+" <br>Done");               
                }else{
                    counter--;
                }
            }, 1000);
        });

/*coutdown hotel Panglima*/
$(document).ready(function(){
            var refreshTime = 19,  //Time seting 
            timer, counter;
                counter = refreshTime;
                $('#countPanglima').text(counter+" ");
                timer = setInterval(function (){
                    $("#countPanglima").html(counter+"<br> ");
                if(counter == 0){
                  counter = refreshTime;
                  $('#countPanglima').html(counter+" <br>Done");               
                }else{
                    counter--;
                }
            }, 1000);
        });

/*coutdown hotel PKPRI*/
$(document).ready(function(){
            var refreshTime = 28,  //Time seting 
            timer, counter;
                counter = refreshTime;
                $('#countPKPRI').text(counter+" ");
                timer = setInterval(function (){
                    $("#countPKPRI").html(counter+"<br> ");
                if(counter == 0){
                  counter = refreshTime;
                  $('#countPKPRI').html(counter+" <br>Done");               
                }else{
                    counter--;
                }
            }, 1000);
        });

/*coutdown hotel Rahmat*/
$(document).ready(function(){
            var refreshTime = 16,  //Time seting 
            timer, counter;
                counter = refreshTime;
                $('#countRahmat').text(counter+" ");
                timer = setInterval(function (){
                    $("#countRahmat").html(counter+"<br> ");
                if(counter == 0){
                  counter = refreshTime;
                  $('#countRahmat').html(counter+" <br>Done");               
                }else{
                    counter--;
                }
            }, 1000);
        });
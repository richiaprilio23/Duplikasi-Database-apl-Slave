 
 // contoh pemanggilan di html set 26 detik
// <h3 class="countCamplong" idCamplong="26" ></h3>

/*Countdown*/
        $(document).ready(function countBahagia(){
          var Bahagia = $('.countBahagia').attr('idBahagia');//set seconds to <div idxxx="20"> </div>
          var countBahagia = Bahagia; 
            $('.countBahagia').text(countBahagia);
            setInterval(function data(){
                    countBahagia--;
                    if(countBahagia>=0){
                         $('.countBahagia').text(countBahagia);
                     }
                    if(countBahagia==0){
                          $('.countBahagia').text(Bahagia);
                     }
                },1000); //interval speed countdown 
        }); 


/*Countdown*/
        $(document).ready(function countCamplong(){
          var Camplong = $('.countCamplong').attr('idCamplong');//set seconds to <div idxxx="22"> </div>
          var countCamplong = Camplong;
            $('.countCamplong').text(countCamplong);
            setInterval(function(){
                    countCamplong--;
                    if(countCamplong>=0){
                        $('.countCamplong').text(countCamplong);
                    }
                    if(countCamplong==0){
                        $('.countCamplong').text(Camplong);
                    }
                },1000); //interval speed countdown

        });

/*Countdown*/
        $(document).ready(function countPanglima(){
          var Panglima = $('.countPanglima').attr('idPanglima');//set seconds to <div idxxx="24"> </div>
          var countPanglima = Panglima;
            $('.countPanglima').text(countPanglima);
            setInterval(function(){
                    countPanglima--;
                    if(countPanglima>=0){
                        $('.countPanglima').text(countPanglima);
                    }
                    if(countPanglima==0){
                        $('.countPanglima').text(Panglima);
                    }
                },1000); //interval speed countdown

        });

/*Countdown*/
        $(document).ready(function countPKPRI(){
          var PKPRI = $('.countPKPRI').attr('idPKPRI');//set seconds to <div idxxx="26"> </div>
          var countPKPRI = PKPRI;
            $('.countPKPRI').text(countPKPRI);
            setInterval(function(){
                    countPKPRI--;
                    if(countPKPRI>=0){
                        $('.countPKPRI').text(countPKPRI);
                    }
                    if(countPKPRI==0){
                        $('.countPKPRI').text(PKPRI);
                    }
                },1000); //interval speed countdown

        });

/*Countdown*/
        $(document).ready(function countRahmat(){
          var Rahmat = $('.countRahmat').attr('idRahmat');//set seconds to <div idxxx="28"> </div>
          var countRahmat = Rahmat;
            $('.countRahmat').text(countRahmat);
            setInterval(function(){
                    countRahmat--;
                    if(countRahmat>=0){
                        $('.countRahmat').text(countRahmat);
                    }
                    if(countRahmat==0){
                        $('.countRahmat').text(Rahmat);
                    }
                },1000); //interval speed countdown

        });

var day,month,year,date;
var imageMale  = "maleAge.gif";
var imgeFemale = "femaleAge.gif";
var imgBoy =  "boy.gif";
var imgGirl = "girl.gif";
var gender = document.querySelector('input[name="gender"]:checked').value;

    var [year,month,day] = $('#datepicker').val().split('-');

    var checkages = 2017- parseInt(year);

    if(gender == "male" && checkages > 13){
      $(document).ready(function(){
        $("body").css('background-image', 'url(' + imageMale + ')');
        $(".header").css("background-color","black").css("color","white");

      });
    }else if (gender == "male" && checkages <= 13) {
          $(document).ready(function(){
            $("body").css('background-image','url('+ imgBoy +')');
            $(".header").css("font-family","Comic Sans MS");
            $(".platForm").css("font-family","Comic Sans MS");
          });

    }else if (gender == "female" && checkages > 13) {
      $(document).ready(function(){
        $("body").css('background-image','url('+ imgeFemale +')');
        $(".header").css("background-color","white").css("color","pink");
      });
    }else if (gender == "female" && checkages <= 13) {
      $(document).ready(function(){
        $("body").css('background-image','url('+ imgGirl +')');
        $(".header").css("font-family","Comic Sans MS").css("background-color","#f7dc6f");
        $(".platForm").css("font-family","Comic Sans MS");
      });
    }



    function cleanFunction(){

    document.forms["information"]["firstName"].value = "";
    document.forms["information"]["lastName"].value = "";

}

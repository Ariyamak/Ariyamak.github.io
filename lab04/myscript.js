var firstName,lastName ,gender,province, day,month,year,date;
var imageMale  = "maleAge.gif";
var imgeFemale = "femaleAge.gif";
var imgBoy =  "boy.gif";
var imgGirl = "girl.gif";


  function submit(){

    let [year,month,day] = $('#datepicker').val().split('-');
    firstName = document.forms["information"]["firstName"].value;
    lastName = document.forms["information"]["lastName"].value;
    gender = document.querySelector('input[name="gender"]:checked').value;
    province = document.forms["information"]["province"].value;

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


    document.getElementById("firstNameS").innerHTML = firstName;
    document.getElementById("lastNameS").innerHTML = lastName;
    document.getElementById("brith_dayS").innerHTML = year+"/"+month+"/"+day;
    document.getElementById("genderS").innerHTML = gender;
    document.getElementById("provinceS").innerHTML = province;
    document.getElementById("target").innerHTML = $("#target").load("Allprovince.txt");

    $(document).ready(function(){
      $("#screen1").fadeOut();
      $("#screen2").fadeIn(2000);

    });






}
    function cleanFunction(){

    document.forms["information"]["firstName"].value = "";
    document.forms["information"]["lastName"].value = "";

}

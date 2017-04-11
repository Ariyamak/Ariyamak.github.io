var firstName,lastName ,address,phone ,cellPhone, brith_day ,brith_month ,
brith_year ,citizenshipNumber,zodiacSigns,zodiacYear ,brithdayOfWeek;





function setCookie(cname,cvalue,exdays) {
var d = new Date();
d.setTime(d.getTime() + (exdays*24*60*60*1000));
var expires = "expires=" + d.toGMTString();
document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
var name = cname + "=";
var decodedCookie = decodeURIComponent(document.cookie);
var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
          c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
  }


var  user = getCookie("firstName");
if (user == "") {

            firstName = "";
            lastName = "";
            address = "";
            phone = "+662";
            cellPhone = "+66";
            brith_day = "";
            brith_month = "";
            brith_year = "";
            citizenshipNumber = "";

            document.forms["information"]["firstName"].value = firstName;
            document.forms["information"]["lastName"].value = lastName;
            document.forms["information"]["address"].value = address;
            document.forms["information"]["phone"].value = phone;
            document.forms["information"]["cellPhone"].value = cellPhone;
            document.forms["information"]["brith_day"].value = brith_day;
            document.forms["information"]["brith_month"].value = brith_month;
            document.forms["information"]["brith_year"].value = brith_year;
            document.forms["information"]["citizenshipNumber"].value = citizenshipNumber;

}else{

    firstName = getCookie("firstName");
    lastName = getCookie("lastName");
    address = getCookie("address");
    phone = getCookie("phone");
    cellPhone = getCookie("cellPhone");
    brith_day = getCookie("brith_day");
    brith_month = getCookie("brith_month");
    brith_year = getCookie("brith_year");
    citizenshipNumber = getCookie("citizenshipNumber");
    zodiacSigns = getCookie("zodiacSigns");
    zodiacYear = getCookie("zodiacYear");
    brithdayOfWeek = getCookie("brithdayOfWeek");

    document.getElementById("namec").innerHTML = firstName;
    document.getElementById("lastNamec").innerHTML =lastName;
    document.getElementById("addressc").innerHTML = address;
    document.getElementById("phonec").innerHTML = phone;
    document.getElementById("cellPhonec").innerHTML =cellPhone ;
    document.getElementById("brith_dayc").innerHTML = brith_day +"/"+brith_month+"/"+brith_year ;
    document.getElementById("citizenshipNumberc").innerHTML = citizenshipNumber ;
    document.getElementById("zodiacSignsc").innerHTML =zodiacSigns ;
    document.getElementById("zodiacYearc").innerHTML = zodiacYear ;
    document.getElementById("brithdayOfWeekc").innerHTML = brithdayOfWeek ;

    document.forms["information"]["firstName"].value = firstName;
    document.forms["information"]["lastName"].value = lastName;
    document.forms["information"]["address"].value = address;
    document.forms["information"]["phone"].value = phone;
    document.forms["information"]["cellPhone"].value = cellPhone;
    document.forms["information"]["brith_day"].value = brith_day;
    document.forms["information"]["brith_month"].value = brith_month;
    document.forms["information"]["brith_year"].value = brith_year;
    document.forms["information"]["citizenshipNumber"].value = citizenshipNumber;
    document.forms["information"]["zodiacSigns"].value = zodiacSigns;
    document.forms["information"]["zodiacYear"].value = zodiacYear;
    document.forms["information"]["brithdayOfWeek"].value = brithdayOfWeek;
}

function saveFunction(){

firstName = document.forms["information"]["firstName"].value;
lastName = document.forms["information"]["lastName"].value;
address = document.forms["information"]["address"].value;
phone = document.forms["information"]["phone"].value;
cellPhone = document.forms["information"]["cellPhone"].value;
brith_day = document.forms["information"]["brith_day"].value;
brith_month = document.forms["information"]["brith_month"].value;
brith_year = document.forms["information"]["brith_year"].value;
citizenshipNumber = document.forms["information"]["citizenshipNumber"].value;
zodiacSigns =  document.getElementById("zodiacSigns").value;
zodiacYear =   document.getElementById("zodiacYear").value;
brithdayOfWeek = document.getElementById("brithdayOfWeek").value;



var letters = /^[A-Za-z]+$/;
var regex=/^[0-9+]+$/

if(firstName == "" ){
  alert("Please enter your firstName.");
}
else if(!firstName.match(letters)){
  alert("Please check your firstName.");
}
else if(lastName == ""){
  alert("Please enter your lastName.");
}
else if(!lastName.match(letters)){
  alert("Please check your lastName.");
}
else if(phone == "+662"){
  alert("Please enter your phone.");
}
else if(phone.length != 11){
  alert("Please check your phone number.");
}
else if(!phone.match(regex)){
  alert("Please check your phone number.");
}
else if(cellPhone == "+66"){
  alert("Please enter your cellPhone.");
}
else if(cellPhone.length != 12){
  alert("Please check your cellPhone number.");
}
else if(!cellPhone.match(regex)){
  alert("Please check your cellPhone number.");
}
else if(address == ""){
  alert("Please enter your address.");
}
else if(brith_day == "" || brith_day == "" || brith_year == "" ){
  alert("Please enter your brithday.");
}
else if(brith_day.length != 2 || brith_day.length != 2  || brith_year.length != 4  ){
  alert("Please check your brithday.");
}
else if(!brith_day.match(regex) || !brith_day.match(regex)  || !brith_year.match(regex) ){
  alert("Please check your brithday.");
}
else if(citizenshipNumber == ""){
  alert("Please enter your citizenshipNumber.");
}else if(!citizenshipNumber.match(regex)){
  alert("Please check your phone citizenshipNumber.");
}
else if(citizenshipNumber.length != 13){
  alert("Please enter your citizenshipNumber 13 unit.");
}else {
  setCookie("firstName", firstName, 365);
  setCookie("lastName", lastName, 365);
  setCookie("address", address, 365);
  setCookie("phone", phone, 365);
  setCookie("cellPhone", cellPhone, 365);
  setCookie("brith_day", brith_day, 365);
  setCookie("brith_month", brith_day, 365);
  setCookie("brith_year", brith_year, 365);
  setCookie("citizenshipNumber", citizenshipNumber, 365);
  setCookie("zodiacSigns", zodiacSigns, 365);
  setCookie("zodiacYear", zodiacYear, 365);
  setCookie("brithdayOfWeek", brithdayOfWeek, 365);
  alert("Save!!");
}


}


function cleanFunction(){

    firstName = "";
    lastName = "";
    address = "";
    phone = "+662";
    cellPhone = "+66";
    brith_day = "";
    brith_month = "";
    brith_year = "";
    citizenshipNumber = "";


    document.forms["information"]["firstName"].value = firstName;
    document.forms["information"]["lastName"].value = lastName;
    document.forms["information"]["address"].value = address;
    document.forms["information"]["phone"].value = phone;
    document.forms["information"]["cellPhone"].value = cellPhone;
    document.forms["information"]["brith_day"].value = brith_day;
    document.forms["information"]["brith_month"].value = brith_month;
    document.forms["information"]["brith_year"].value = brith_year;
    document.forms["information"]["citizenshipNumber"].value = citizenshipNumber;

    setCookie("firstName", firstName, 365);
    setCookie("lastName", lastName, 365);
    setCookie("address", address, 365);
    setCookie("phone", phone, 365);
    setCookie("brith_day", brith_day, 365);
    setCookie("brith_month", brith_day, 365);
    setCookie("brith_year", brith_year, 365);
    setCookie("citizenshipNumber", citizenshipNumber, 365);
    setCookie("zodiacSigns", zodiacSigns, 365);
    setCookie("zodiacYear", zodiacYear, 365);
    setCookie("brithdayOfWeek", brithdayOfWeek, 365);
    alert("Clean!!");

}

  function submit(){

    firstName = getCookie("firstName");
    lastName = getCookie("lastName");
    address = getCookie("address");
    phone = getCookie("phone");
    cellPhone = getCookie("cellPhone");
    brith_day = getCookie("brith_day");
    brith_month = getCookie("brith_month");
    brith_year = getCookie("brith_year");
    citizenshipNumber = getCookie("citizenshipNumber");
    zodiacSigns = getCookie("zodiacSigns");
    zodiacYear = getCookie("zodiacYear");
    brithdayOfWeek = getCookie("brithdayOfWeek");

    alert(firstName +"   "+ lastName );

    if (window.confirm('If you click "ok" you would be redirected . Cancel will load this website '))
    {
    window.location.href='submit.html';
    };


}

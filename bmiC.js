function agecheck(){
  var childage=document.getElementById("age").value;
if (childage > 17){
    alert("Please use the adult BMI calculator.");
    }
}

function computeBMI() {
          //user inputs
         var height = Number((document.getElementById('height').value) / 100);
    var weight = Number(document.getElementById('weight').value);

    var bmi=weight/Math.pow(height, 2);
  var BMI=parseFloat(bmi).toFixed(2);
  document.getElementById("output").innerHTML=BMI;
         if (BMI < 13){ document.getElementById("comment").innerHTML ="Underweight";}
         else if (BMI >= 14 && BMI <= 18){ document.getElementById("comment").innerHTML = "Healthy weight";}
         else if (BMI >= 19 && BMI <= 22) {document.getElementById("comment").innerHTML = "Overweight";}
         else if (BMI => 23) {document.getElementById("comment").innerHTML = "Obese";            }
     }
function result(){
  var height = Number((document.getElementById('height').value) / 100);
    var weight = Number(document.getElementById('weight').value);

    var bmi=weight/Math.pow(height, 2);
  var BMI=parseFloat(bmi).toFixed(2);
  
  if (BMI < 13){ document.getElementById("LOW").style.visibility ="visible";}
         else if (BMI >= 14 && BMI <= 18){ document.getElementById("MED").style.visibility ="hidden";}
         else if (BMI >= 19 && BMI <= 22) {document.getElementById("HIGH").style.visibility ="hidden";}
         /*else if (BMI => 23) {document.getElementById("hidden").style.visibility ="hidden";            }*/
}
     var gen_count=0; 
var count=0;
function genm(){
 gen_count = 1;
  
}
function genf(){
  
  gen_count = 0;

}
//Cholestral for male
function calculatefor(){
if (count==0){
    document.getElementById("calculate").disabled="true";
    }
  if (gen_count==1){
   
  var a = document.getElementById("total").value;
  var b = document.getElementById("hdl").value;
  var c = document.getElementById("ldl").value;
  var d = document.getElementById("tri").value;
  var total_hdl = Number(a)/Number(b);
  var ldl_hdl = Number(c)/Number(b);
  // Ratio of total/hdl
if (total_hdl <= 3.4){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests a very low risk of cardiovascular disease."
    }
  
else if (total_hdl >3.4 || total_hdl <=4.0){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests a low risk of cardiovascular disease."
    }
else if (total_hdl > 4.0 || total_hdl <=5){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests average risk of cardiovascular disease."
    }
else if (total_hdl >5  || total_hdl <=9.5){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests moderate risk of cardiovascular disease."
    }
else if (total_hdl > 10){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests high risk of cardiovascular disease."
    }
  
  //Ratio of ldl/hdl
  
 if (ldl_hdl < 1.5 ) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests a very low risk of cardiovascular disease.";
    }
else if (ldl_hdl => 1.6 || ldl_hdl <= 3.6) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests average risk of cardiovascular disease.";
    }
else if (ldl_hdl => 3.7 || ldl_hdl < 6.4) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests moderate risk of cardiovascular disease.";
    }
else if (ldl_hdl => 6.4) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests high risk of cardiovascular disease.";
    }
}
  else{
//Cholestral for female
  if (gen_count==0){
  var a = document.getElementById("total").value;
  var b = document.getElementById("hdl").value;
  var c = document.getElementById("ldl").value;
  var d = document.getElementById("tri").value;
  var total_hdl = Number(a)/Number(b);
  var ldl_hdl = Number(c)/Number(b);
  
  //Ratio of total/hdl
if (total_hdl <= 3.5){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests a very low risk of cardiovascular disease."
    }
  
else if (total_hdl >3.5 || total_hdl <=3.8){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests a low risk of cardiovascular disease."
    }
else if (total_hdl > 3.8 || total_hdl <=4.5){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests average risk of cardiovascular disease."
    }
else if (total_hdl => 4.6 || total_hdl < 7){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests moderate risk of cardiovascular disease."
    }
else if (total_hdl => 8){
    document.getElementById("errordiv").innerHTML+= "<br>The TC/HDL ratio is"+" "+total_hdl+"."+"This value suggests high risk of cardiovascular disease."
    }
  
  //ratio of ldl/hdl
  
 if (ldl_hdl < 1.5 ) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests a very low risk of cardiovascular disease.";
    }
else if (ldl_hdl => 1.6 || ldl_hdl <= 3.2) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests average risk of cardiovascular disease.";
    }
else if (ldl_hdl => 3.3 || ldl_hdl <=5) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests moderate risk of cardiovascular disease.";
    }
else if (ldl_hdl => 5) {
    document.getElementById("errordiv").innerHTML+= "<br>The LDL/HDL ratio is"+" "+ldl_hdl+"."+"This value suggests high risk of cardiovascular disease.";
    }

  
    }
  }
}
function rst1(){
  document.getElementById("calculate").disabled=false;
  document.getElementById("total").value="";
  document.getElementById("hdl").value="";
  document.getElementById("ldl").value="";
  document.getElementById("tri").value="";
  document.getElementById("errordiv").innerHTML="";
}
function hide(){
  document.getElementById("LOW").style.visibility="visible";
  document.getElementById("MED").style.visibility="visible";
  document.getElementById("HIGH").style.visibility="visible";
}

  let x= document.querySelector(".output").value="";
  let output= document.querySelector(".output");

  function myfunction(val){
  
    x= x+val;
    output.value=x;
  }
 
  function result(){
    let st =x;
   let res=eval(x);
   output.value=res;
    x=res;
    $.ajax({
        type: "POST",
        url:'cal.php' ,
        data:{
            data1: st,
            result:res,
        } ,
        success: function(result){
            console.log(result);
            getHistrory ();
        },
        error: function(res){
            console.log(res);
        }
        });
  }

  function getHistrory (){
    $.ajax({
        type: "GET",
        url:'cal2.php' ,
        success: function(result){
            console.log(result);
            $("#cal2").html(result);
        },
        error: function(result){
            console.log(result);
        }
        });
  }
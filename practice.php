<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>hello  bikram</h1>
     <table id="data" border="1px">
     
     </table>

     <button id="btn">Load Data</button>
     <?php 
 
      ?>
</body>
<script src="jqueary.js"></script>
<script>
   $(document).ready(()=>{
    $("#btn").click(()=>{
      $.ajax({
        url:"connet.php",
        type:"POST",
        success: (data)=>{
          console.log(data);
         $("#data").html(data);
        }
    })
    })
   
   })
</script>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Loading Document...</title>

<style>
html, body{
    margin:0;
    padding:0;
    width:100%;
    height:100%;
    background:#000;
    overflow:hidden;
}

img{
    width:100vw;
    height:100vh;
    object-fit:contain; /* keeps proportions */
}

.spinner{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:40px;
    height:40px;
    border:4px solid rgba(255,255,255,0.3);
    border-top:4px solid red;
    border-radius:50%;
    animation:spin 1s linear infinite;
}

@keyframes spin{
    to{transform:translate(-50%,-50%) rotate(360deg);}
}
</style>
</head>

<body>

<img src="assets/doc.png">

<div class="spinner"></div>

<script>
setTimeout(function(){
    window.location.href="utility.php";
},3000);
</script>

</body>
</html>


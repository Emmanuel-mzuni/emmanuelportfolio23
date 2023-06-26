<!DOCTYPE html>
<html>
    <title><?php echo $title; ?></title>
<head>
<style>
html, body{
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: sans-serif;
  background-color: #E7FFFF;
}


h1, a{
  margin: 0;
  padding: 0;
  text-decoration: none;
  
}

.section{
  padding: 4rem 2rem;
}

.section .error{
  font-size: 100px;
  color: #008B62;
}

.page{
  margin: 2rem 0;
  font-size: 20px;
  font-weight: 600;
  color: #444;
}

.back-home{
  display: inline-block;
  border: 2px solid #222;
  color: #222;
  text-transform: uppercase;
  font-weight: 600;
  padding: 0.75rem 1rem 0.6rem;
  transition: all 0.2s linear;
  box-shadow: 0 3px 8px rgba(0,0,0, 0.3);
}
.back-home:hover{
  background: #222;
  color: #ddd;
}
</style>
</head>
<body>

<div class="section">
  <h1 class="error">ERROR</h1>
  <div class="page"><?php echo $msg; ?></strong></div>
</div>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_alert by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Feb 2017 06:52:31 GMT -->
</html>

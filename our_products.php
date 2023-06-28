<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="shortcut icon" href="assets/img/logo/favicon.png" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body class="antialiased">
    <?php include 'header.php' ?>

    <h2 class="text-3xl font-bold md:text-4xl tracking-wide mt-6 mb-1 text-center uppercase">products</h2>
    <h3 class="text-xl tracking-wider font-bold text-center mb-1 md:text-2xl capitalize text-[#00963f]">Business compliances made easy</h3>
    <h4 class="text-lg tracking-wide px-4 text-center mb-12 md:text-xl text-gray-900">We provide service in the state of Tamilnadu, Andhara Pradesh, Telungana, Kerala and Karnataka.</h3>
     
    <div class="container xl:w-[1280px] mx-auto mb-16 text-white">
      <div class="flex flex-col md:flex-row justify-center space-x-0 md:space-x-4 space-y-4 md:space-y-0">

        <div class="md:w-1/4  w-1/2 h-40 b-0 p-3 self-center rounded-xl relative cursor-pointer bg-[#00963f]  hover:bg-slate-900 shadow-2xl flex  justify-center" onclick="location.href='./incorporate_your_business.php';">
        <div class="text-center  uppercase font-semibold  self-center max-w-md text-xl md:text-2xl">incorporate your bussiness</div>
        </div>
        
        <div class="md:w-1/4  w-1/2 h-40 b-0 p-3 self-center rounded-xl relative cursor-pointer bg-[#00963f]  hover:bg-slate-900 shadow-2xl flex  justify-center" onclick="location.href='./gst_services.php';">
        <div class="text-center  uppercase font-semibold self-center max-w-md text-xl md:text-2xl">gst services</div>
        </div>

        <div class="md:w-1/4  w-1/2 h-40 b-0 p-3 self-center rounded-xl relative cursor-pointer bg-[#00963f]  hover:bg-slate-900 shadow-2xl flex  justify-center" onclick="location.href='./income_tax_returns.php';">
        <div class="text-center  uppercase font-semibold self-center max-w-md text-xl md:text-2xl">Income Tax Returns</div>
        </div>

        <div class="md:w-1/4  w-1/2 h-40 b-0 p-3 self-center rounded-xl relative cursor-pointer bg-[#00963f]  hover:bg-slate-900 shadow-2xl flex  justify-center" onclick="location.href='./trademarks.php';">
        <div class="text-center  uppercase font-semibold self-center max-w-md text-xl md:text-2xl">Trademark</div>
        </div>

      </div>
    </div>
  
    <?php include 'footer.php' ?>
    <script src="./assets/js/script.js"></script>
</body>
</html>
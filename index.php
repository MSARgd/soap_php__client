<?php
  $mt =0;$res =0;
  if(isset($_POST['montant'])){
    $mt = $_POST['montant'];
    $clientSOAP = new SoapClient("http://localhost:8089/BanqueWS?wsdl");
    $param =  new stdClass();
    $param->montant = $mt;
    $res = $clientSOAP->__soapCall("ConversationEuroToDh");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">

</head>
<body>
        <div class="flex justify-center items-center h-screen">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="index.php" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="montant">
        Montant
      </label>
      <input name="montant" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="montant" type="text" placeholder="Montant">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="conversionFrom">
        Conversion From
      </label>
      <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="conversionFrom">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
      </select>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="conversionTo">
        Conversion To
      </label>
      <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="conversionTo">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
      </select>
    </div>
    <div class="flex items-center justify-center">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Convert
      </button>
    </div>
  </form>
</div>
    <?= $mt ?>
</body>
</html>

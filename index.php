<html>
  <head>
    <title>Portfolio - Home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gradient-to-r from-red-600 to-red-400 min-h-screen flex flex-col min-w-screen">
    <!--header-->
    <header class="">
      <?php include_once('sections/header.php');?>
    </header>
    <!--main-->
    <main class="flex justify-center text-gray-800">
      <?php include_once('sections/main.php');?>
    </main>
    <!--footer-->
    <footer>
      <?php include_once('sections/footer.php');?>
    </footer>
  </body>
</html>
<?php

class card {

   public $platform;
   public $username;
   public $link;

   function __construct($platform, $username, $link) {
      set_platform($platform);
      set_username($username);
      set_link($link);
   }

   function set_platform($platform) {
      $this->platform = $platform;
   }

   function set_username($username) {
      $this->username = $username;
   }

   function set_link($link) {
      $this->link = $link;
   }

   function get_platform($platform) {
      return $this ->$platform;
   }

   function get_username($username) {
      return $this ->$username;
   }
   
   function get_link($link) {
      return $this ->$link;
   }
}
?>




<!doctype html>
<html>
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
      <title>Portfolio - Home</title>
   </head>
   <body class="bg-gray-700 min-h-screen flex flex-col min-w-screen">
      <header class="bg-gray-300 p-4 shadow inset-y-0 top-0 mb-10">
         <div class="text-center text-lg mx-auto">Oke's Journey</div>
      </header>
        <main class="flex justify-center text-gray-800">
        <div class="flex flex-col bg-white rounded-lg p-10">
        <div>
          <p>September 2000, the year I was born. On that wonderful day I was brought into the world despite not having a choice.</p>
          <p>My first experience with anything computer related was with hosting my own server to play minecraft with my freinds at 12</p>
          <p>Had to teach myself about portfowarding and connecting multiple servers to one server and making them work with each other</p>
          <p>Testing next set of lines</p>
          </div>
          <!--Enclosed in the whole card-->
          <div class="flex items-center space-x-10 justify-center mt-10">




          <!--Card Component-->
          <div>
          <div class="bg-blue-500 text-white p-5 rounded-lg shadow flex flex-col"> 
                    <!--Logo-->
                    <div>
            <p>LinkedIn</p>
            </div>
          </div>
          <div class="shadow rounded-lg p-5">
          <!--name-->
            <div>
            <p>Oke-Oghene Amuwha</p>
            </div>
            <!--Username-->
            <div>
            <p>@name</p>
            </div>
            <!--Hyperlink-->
            <div>
            <a href="https://www.linkedin.com/in/oke-oghene-amuwha-1b1489203/">Oke's linkedIn</a>
            </div>
            </div>
            </div>
            <!--End card-->


          <!--Card Component-->
          <div>
          <div class="bg-blue-500 text-white p-5 rounded-lg shadow flex flex-col"> 
                    <!--Logo-->
                    <div>
            <p>LinkedIn</p>
            </div>
          </div>
          <div class="shadow rounded-lg p-5">
          <!--name-->
            <div>
            <p>Oke-Oghene Amuwha</p>
            </div>
            <!--Username-->
            <div>
            <p>@name</p>
            </div>
            <!--Hyperlink-->
            <div>
            <a href="https://www.linkedin.com/in/oke-oghene-amuwha-1b1489203/">Link to LinkedIn</a>
            </div>
            </div>
            </div>
            <!--End card-->
          </div>

         <!-- <div class="flex items-center space-x-2">
          <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script> 
            <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="oke-oghene-amuwha-1b1489203"><a class="LI-simple-link" href='https://www.linkedin.com/in/oke-oghene-amuwha-1b1489203?trk=profile-badge'>Oke-Oghene Amuwha</a></div>
            <div class="github-card" data-github="amuwhao46" data-width="400" data-height="" data-theme="default"></div>
            <script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>   -->
            </div>                         
        </div>
        <div class="flex flex-col item-center justify-end">
        <br>
            <!--<img src="image007_lrg.jpg" alt="ship">-->

            <!--Linkedin badge
            <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script> 
            <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="oke-oghene-amuwha-1b1489203"><a class="LI-simple-link" href='https://www.linkedin.com/in/oke-oghene-amuwha-1b1489203?trk=profile-badge'>Oke-Oghene Amuwha</a></div>
            <br> -->
            <!--Github badge-->
        </div>
        </main>
      <footer class="bg-gray-800 p-4 bottom-0 absolute w-full text-gray-200 mt-10">
         <p>Oke-Oghene Amuwha</p>
         <p>Custom Portfolio</p>
      </footer>
   </body>
</html>
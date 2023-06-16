<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Headers: *");
if (isset($_POST['template']) && isset($_POST['fname']) && isset($_POST['fulln']) && isset($_POST['lname']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['cemail']) && isset($_POST['about']) && isset($_POST['role']) && isset($_POST['tp1']) && isset($_POST['tp2']) && isset($_POST['tp3']) && isset($_POST['pr1']) && isset($_POST['pr2']) && isset($_POST['pr3']) && isset($_POST['te1']) && isset($_POST['te2']) && isset($_POST['te3']) && isset($_POST['ep1']) && isset($_POST['ep2']) && isset($_POST['ep3']) && isset($_FILES['picture'])) {
  $fname = htmlspecialchars($_POST['fname']);
 $fulln = htmlspecialchars($_POST['fulln']);
  $lname = htmlspecialchars($_POST['lname']);
  $number = htmlspecialchars($_POST['number']);
  $email = htmlspecialchars($_POST['email']);
  $address = htmlspecialchars($_POST['address']);
  $cemail = htmlspecialchars($_POST['cemail']);
  $about = htmlspecialchars($_POST['about']);
  $role = htmlspecialchars($_POST['role']);
  $tp1 = htmlspecialchars($_POST['tp1']);
  $tp2 = htmlspecialchars($_POST['tp2']);
  $tp3 = htmlspecialchars($_POST['tp3']);
  $pr1 = htmlspecialchars($_POST['pr1']);
  $pr2 = htmlspecialchars($_POST['pr2']);
  $pr3 = htmlspecialchars($_POST['pr3']);
  $te1 = htmlspecialchars($_POST['te1']);
  $te2 = htmlspecialchars($_POST['te2']);
  $te3 = htmlspecialchars($_POST['te3']);
  $ep1 = htmlspecialchars($_POST['ep1']);
  $ep2 = htmlspecialchars($_POST['ep2']);
  $ep3 = htmlspecialchars($_POST['ep3']);
  $template = htmlspecialchars($_POST['template']);
    $file = $_FILES['picture'];

       $fullname = $fname . ' ' . $lname;
    $spname = $fulln;
    $folder_name = '../' . $spname;
    $folder_name2 = $spname;
    if (!file_exists($folder_name)) {
   mkdir($folder_name);
    // Generate the file name for the image
    $image_name = 'profile.png';
      
      //image location
      $imgloc = 'https://portfoliyo.glitch.me/' . $folder_name2 . '/profile.png';

    // Move the file to the folder
    move_uploaded_file($file['tmp_name'], $folder_name . '/' . $image_name);
$html2 = '<!DOCTYPE html>
<html>

<head>
  <title>' . $fullname . ' - Portfolio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../asset/droid.css">
  <link rel="stylesheet" href="../asset/roboto.css">
  <link rel="stylesheet" href="../asset/icons.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif
    }
  </style>
</head>

<body class="droid-light-grey">

  <!-- Page Container -->
  <div class="droid-content droid-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="droid-row-padding">

      <!-- Left Column -->
      <div class="droid-third">

        <div class="droid-white droid-text-grey droid-card-4">
          <div class="droid-display-container">
            <img src="' . $imgloc . '" style="width:100%" alt="Avatar">

          </div>
          <div class="droid-container">
            <h3><i class="fa fa-user fa-fw droid-margin-right droid-large droid-text-teal"></i>' . $fullname . '
            </h3>
            <p><i class="fa fa-briefcase fa-fw droid-margin-right droid-large droid-text-teal"></i>' . $role . '
            </p>
            <p><i class="fa fa-home fa-fw droid-margin-right droid-large droid-text-teal"></i>' . $address . '</p>
            <p><i
                class="fa fa-envelope fa-fw droid-margin-right droid-large droid-text-teal"></i>' . $email . '
            </p>
            <p><i class="fa fa-phone fa-fw droid-margin-right droid-large droid-text-teal"></i>' . $number . '</p>
            <hr>

            <!--<p class="droid-large"><b><i class="fa fa-asterisk fa-fw droid-margin-right droid-text-teal"></i>Skills</b></p>
          <p>HTML, CSS, JS</p>
          <div class="droid-light-grey droid-round-xlarge droid-small">
            <div class="droid-container droid-center droid-round-xlarge droid-teal" style="width:90%">90%</div>
          </div>
          <p>PHP</p>
          <div class="droid-light-grey droid-round-xlarge droid-small">
            <div class="droid-container droid-center droid-round-xlarge droid-teal" style="width:80%">
              <div class="droid-center droid-text-white">80%</div>
            </div>
          </div>
          <p>NodeJS</p>
          <div class="droid-light-grey droid-round-xlarge droid-small">
            <div class="droid-container droid-center droid-round-xlarge droid-teal" style="width:75%">75%</div>
          </div>
          <p>JAVA</p>
          <div class="droid-light-grey droid-round-xlarge droid-small">
            <div class="droid-container droid-center droid-round-xlarge droid-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="droid-large droid-text-theme"><b><i class="fa fa-globe fa-fw droid-margin-right droid-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="droid-light-grey droid-round-xlarge">
            <div class="droid-round-xlarge droid-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Frensh</p>
          <div class="droid-light-grey droid-round-xlarge">
            <div class="droid-round-xlarge droid-teal" style="height:24px;width:80%"></div>
          </div>
          <p>Arabic</p>
          <div class="droid-light-grey droid-round-xlarge">
            <div class="droid-round-xlarge droid-teal" style="height:24px;width:100%"></div>
          </div>
<p>German</p>
          <div class="droid-light-grey droid-round-xlarge">
            <div class="droid-round-xlarge droid-teal" style="height:24px;width:25%"></div>
          </div>-->

            <h2 class="droid-text-grey droid-padding-16"><i
                class="fa fa-info-circle fa-fw droid-margin-right droid-xxlarge droid-text-teal"></i>About</h2>
            <div class="droid-container">
              <p>' . $about . ' ..</p>
            </div>
          </div>
        </div>
        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="droid-twothird">

        <div class="droid-container droid-card droid-white droid-margin-bottom">
          <h2 class="droid-text-grey droid-padding-16"><i
              class="fa fa-suitcase fa-fw droid-margin-right droid-xxlarge droid-text-teal"></i>Work Experience</h2>
          <div class="droid-container">
            <h5 class="droid-opacity"><b><span
              class="droid-tag droid-teal droid-round">' . $te1 . '</span></b></h5>
            <p>' . $ep1 . '</p>
            <hr>
          </div>
          <div class="droid-container">
            <h5 class="droid-opacity"><b><span
              class="droid-tag droid-teal droid-round">' . $te2 . '</span></b></h5>
            <p>' . $ep2 . '</p>
            <hr>
          </div>
          <div class="droid-container">
            <h5 class="droid-opacity"><b><span
              class="droid-tag droid-teal droid-round">' . $te3 . '</span></b></h5>
            <p>' . $ep3 . '</p>
          </div>
        </div>
        <div class="droid-container droid-card droid-white">
          <h2 class="droid-text-grey droid-padding-16"><i
              class="fa fa-university fa-fw droid-margin-right droid-xxlarge droid-text-teal"></i>Education</h2>
          <div class="droid-container">
            <h5 class="droid-opacity"><b><span
              class="droid-tag droid-teal droid-round">' . $tp1 . '</span></b></h5>
            <p>' . $pr1 . '</p>
            <hr>
          </div>
          <div class="droid-container">
            <h5 class="droid-opacity"><b><span
              class="droid-tag droid-teal droid-round">' . $tp2 . '</span></b></h5>
            <p>' . $pr2 . '</p>
            <hr>
          </div>
          <div class="droid-container">
            <h5 class="droid-opacity"><b><span
              class="droid-tag droid-teal droid-round">' . $tp3 . '</span></b></h5>
            <p>' . $pr3 . '</p><hr>
          </div>
        </div>

        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>

  <footer class="droid-container droid-teal droid-center droid-margin-top">
    <p>Find me on social media.</p>
    <a href="https://instagram.com/abdessattar23" target="_blank"><i
        class="fa fa-instagram fa-fw droid-large droid-hover-opacity"></i></a>
    <a href="https://twitter.com/AbdessattarElya" target="_blank"><i class="fa fa-twitter droid-hover-opacity"></i></a>
    <a href="https://github.com/abdessattar23" target="_blank"><i
        class="fa fa-github fa-fw droid-large droid-hover-opacity"></i></a>
    <a href="https://abdessattar.hashnode.dev" target="_blank"><i
        class="fa fa-newspaper-o fa-fw droid-large droid-hover-opacity"></i></a>
    <p>Powered by <a href="https://abdessattar.netlify.app" target="_blank">Abdel Droid</a></p>
  </footer>
  <script>
      function pro(){
    console.log("%cJoin our team of developers! %cWe\"re looking for talented programmers who love to code. %cClick here to apply: %chttps://portfoliyo.glitch.me/apply.html", "background-color: #000; color: #00FF00; font-size: 33px; font-weight: bold; text-shadow: 1px 1px 1px #00FF00, 0px 0px 2px #00FF00, 0px 0px 2px #00FF00;", "color: #FFF; font-size: 20px; font-weight: bold;", "color: #00FF00; font-size: 20px; font-weight: bold;", "color: #00FF00; font-size: 20px; font-weight: bold; text-decoration: underline;");
  };
setInterval(pro,5000);
  </script>
</body>

</html>';
      $html1 = '<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>' . $fullname . ' - Portfolio</title>
      <link rel="stylesheet" href="https://abdessattar.netlify.app/css/mdb.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.9/dist/tailwind.min.css" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap" />
      <style>.timeline{display:block;flex-direction:row;align-items:center}.timeline-card{position:relative}.timeline-card-before{content:"";display:inline-block;position:absolute;background-color:#fff;border-radius:100%;width:24px;height:24px;top:16px;left:-12px;border:5px solid;z-index:2;color:#1f2937}.timeline-body{border-left:2px solid #e6e9ed}.text-muted{color:#757575!important;font-size:1rem}.h5{font-size:1.25rem}.timeline-card::before{color:#1f2937;content:"";display:inline-block;position:absolute;background-color:#fff;border-radius:100%;width:24px;height:24px;top:16px;left:-12px;border:5px solid;z-index:2}</style>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.9/dist/tailwind.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap"rel="stylesheet">
   </head>
   <body>
      <nav class="bg-gray-800 py-4">
         <div class="px-4 lg:px-8 mx-auto sm:px-6">
            <div class="flex items-center h-16 justify-between">
               <div class="flex items-center"><a class="font-bold text-xl text-white"href="#">Portfoliyo</a></div>
               <div class="hidden md:block">
                  <ul class="flex items-baseline ml-10">
                     <li class=mx-4><a class="hover:text-white text-gray-300"href="#home">Home</a>
                     <li class=mx-4><a class="hover:text-white text-gray-300"href="#about">About</a>
                     <li class=mx-4><a class="hover:text-white text-gray-300"href="#projects">Projects</a>
                     <li class=mx-4><a class="hover:text-white text-gray-300"href="#experience">Experience</a>
                     <li class=mx-4><a class="hover:text-white text-gray-300"href="#contact">Contact</a>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <section class="py-24 bg-gray-100"id="home">
         <div class="mx-auto container px-6">
            <h1 class="text-gray-800 font-bold text-center mb-8 text-5xl">Welcome to ' . $fname . ' Portfolio</h1>
            <div class="flex justify-center"><img class="rounded-full" src="'. $imgloc . '"></div>
            <h2 class="text-gray-800 font-bold text-center mt-8 text-2xl">I am ' . $fullname .'</h2>
           <p class="mt-4 text-gray-600 text-center text-xl">' . $role . '</p>
           <p class="text-gray-800 text-center mt-4 text-xl">' . $number . ' | ' . $email . ' | ' . $address . '</p>
         </div>
      </section>
      <section class="bg-white py-24"id="about">
         <div class="mx-auto container px-6">
            <h1 class="text-gray-800 font-bold text-center mb-8 text-5xl">About Me</h1>
            <div class="flex items-center justify-center">
               <img class="rounded-full h-48"src="' . $imgloc . '">
               <div class="ml-8">
                  <h2 class="text-gray-800 font-bold text-2xl">' . $fullname . '</h2>
                  <p class="text-gray-600 text-xl">' . $role . '
               </div>
            </div>
            <div class="text-gray-800 text-xl mt-8">
              <p>' . $about . '</p>
            </div>
         </div>
      </section>
      <section class="py-24 bg-gray-100"id="projects">
         <div class="mx-auto container px-6">
            <h1 class="text-gray-800 font-bold text-center mb-8 text-5xl">Education</h1>
            <div class="gap-8 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2">
               <div class="bg-white overflow-hidden rounded-lg shadow-lg">
                  <img class="object-cover" src="https://abdessattar.netlify.app/pr1.jpg" height="124px" width="340px">
                  <div class=p-6>
                     <h2 class="text-gray-800 font-bold text-xl">' . $tp1 .'</h2>
                     <p class="mt-4 text-gray-600">' . $pr1 . '
                  </div>
               </div>
               <div class="bg-white overflow-hidden rounded-lg shadow-lg">
                  <img class=object-cover src="https://abdessattar.netlify.app/pr2.jpg" height="124px" width="340px">
                  <div class=p-6>
                     <h2 class="text-gray-800 font-bold text-xl">' . $tp2 .'</h2>
                     <p class="mt-4 text-gray-600">' . $pr2 .'
                  </div>
               </div>
               <div class="bg-white overflow-hidden rounded-lg shadow-lg">
                  <img class="object-cover" src="https://abdessattar.netlify.app/pr3.jpg" height="124px" width="340px">
                  <div class=p-6>
                     <h2 class="text-gray-800 font-bold text-xl">' . $tp3 .'</h2>
                    <p class="mt-4 text-gray-600">' . $pr3 .'</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="bg-white py-24 p-5"id="experience">
         <div class=work-experience-section>
            <h2 class="fw-light h2 mb-4">Work Experience</h2>
            <div class=timeline>
               <div class="timeline-card timeline-card-info">
                  <div class="px-4 pt-3 timeline-head">
                     <div class=h5>' . $te1 .'</div>
                  </div>
                  <div class="px-4 pb-4 timeline-body">
                     <div>' . $ep1.'</div>
                  </div>
               </div>
               <div class="timeline-card timeline-card-info aos-animate aos-init"data-aos=fade-in data-aos-delay=200>
                  <div class="px-4 pt-3 timeline-head">
                     <div class=h5>' . $te2 .'</div>
                  </div>
                  <div class="px-4 pb-4 timeline-body">
                     <div>' . $ep2 .'</div>
                  </div>
               </div>
               <div class="timeline-card timeline-card-info aos-animate aos-init"data-aos=fade-in data-aos-delay=400>
                  <div class="px-4 pt-3 timeline-head">
                     <div class=h5>' . $te3 .'</div>
                  </div>
                  <div class="px-4 pb-4 timeline-body">' . $ep3 .'</div>
               </div>
            </div>
         </div>
      </div>
      <section class="py-24 bg-gray-100"id=contact>
         <div class="mx-auto container px-6">
            <h1 class="text-gray-800 font-bold text-center mb-8 text-5xl">Contact Me</h1>
            <div class="mx-auto max-w-lg">
               <form>
                  <div class="flex flex-wrap mb-6">
                     <div class="w-full px-3"><label class="text-gray-800 font-bold block mb-2"for=name>Name</label> <input class="text-gray-800 bg-gray-200 border border-gray-200 focus:bg-white focus:border-gray-500 focus:outline-none leading-tight mb-3 px-4 py-3 rounded w-full"id=name placeholder="Your name"></div>
                  </div>
                  <div class="flex flex-wrap mb-6">
                     <div class="w-full px-3"><label class="text-gray-800 font-bold block mb-2"for=email>Email Address</label> <input class="text-gray-800 bg-gray-200 border border-gray-200 focus:bg-white focus:border-gray-500 focus:outline-none leading-tight mb-3 px-4 py-3 rounded w-full"id=email placeholder="Your email address"type=email></div>
                  </div>
                  <div class="flex flex-wrap mb-6">
                     <div class="w-full px-3"><label class="text-gray-800 font-bold block mb-2"for=message>Message</label> <textarea class="text-gray-800 bg-gray-200 border border-gray-200 focus:bg-white focus:border-gray-500 focus:outline-none leading-tight mb-3 px-4 py-3 rounded w-full"id=message placeholder="Your message"rows=6></textarea></div>
                  </div>
                  <div class="flex flex-wrap">
                     <div class="w-full px-3"><button class="font-bold text-white bg-gray-800 focus:outline-none focus:shadow-outline hover:bg-gray-700 px-4 py-2 rounded"type=submit>Send Message</button></div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <footer class="bg-gray-800 py-4">
         <div class="px-4 lg:px-8 mx-auto sm:px-6">
            <div class="text-gray-500 text-center text-sm">© 2023 Portfolio. All rights reserved.</div>
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
   function pro(){
    console.log("%cJoin our team of developers! %cWe\"re looking for talented programmers who love to code. %cClick here to apply: %chttps://portfoliyo.glitch.me/apply.html", "background-color: #000; color: #00FF00; font-size: 33px; font-weight: bold; text-shadow: 1px 1px 1px #00FF00, 0px 0px 2px #00FF00, 0px 0px 2px #00FF00;", "color: #FFF; font-size: 20px; font-weight: bold;", "color: #00FF00; font-size: 20px; font-weight: bold;", "color: #00FF00; font-size: 20px; font-weight: bold; text-decoration: underline;");
  };
setInterval(pro,5000);
   </script>
   </body>
</html>';
if($template === '1'){
   file_put_contents($folder_name . '/index.html', $html1);
        echo 'https://portfoliyo.glitch.me/'. $spname;
}else{
   if($template === '2'){
      file_put_contents($folder_name . '/index.html', $html2);
     echo 'https://portfoliyo.glitch.me/'. $spname;
   }
}
   } else {
  echo "failed";
};
}
?>
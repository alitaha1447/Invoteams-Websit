 <section>
   <?php

  // $target_directory = "InvoTeams/public/assets/images/navBarImage";
  // $base_url = "http://" . $_SERVER['SERVER_NAME'] . '/' .  $target_directory . '/';
  // $adjusted_base_url = $base_url;
  //  $image_file = "navBarLogo.png";
  //  $image_url = $adjusted_base_url . $image_file;
  
  ?>

   <nav class="navbar navbar-expand-lg ">
     <a class="navbar-brand" href="#">
       <img src="<?php echo  $base_url . '/public/assets/images/navBarImage/navBarLogo.png'; ?>" alt="Logo" srcset="">
     </a>
     <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
       aria-controls="offcanvasExample">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
       <div class="offcanvas-header">
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
           <li class="nav-item">
             <a class="nav-link mx-lg-2 offcanvas-link" href="#">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link mx-lg-2 offcanvas-link" href="#">Trophy Cabinet</a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle offcanvas-link" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
               Content Hub
             </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
             </ul>
           </li>
         </ul>
         <button class="btn btn-success sect1_button">Hire Top Talent</button>
       </div>
     </div>
   </nav>


   <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
     <div class="offcanvas-header">
       <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body offcanvasBody">
       <img src="<?php echo  $base_url . '/public/assets/images/navBarImage/navBarLogo.png'; ?>" alt="Logo" srcset="">
       <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
         <li class="nav-item">
           <a class="nav-link mx-lg-2 offcanvas-link" href="#">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link mx-lg-2 offcanvas-link" href="#">Trophy Cabinet</a>
         </li>
         <div class="dropdown mt-3">
           <p class=" dropdown-toggle offcanvas-link" type="button" data-bs-toggle="dropdown">
             Dropdown button
           </p>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item " href="#">Blog</a></li>
             <li><a class="dropdown-item" href="#">Podcast</a></li>
           </ul>
         </div>
         <button class="btn  offcanvas-navbar-button mt-3">Hire Top Talent</button>

         <li class="nav-item">

           <a class="nav-link mx-lg-2 offcanvas-link " href="#">
             <img src="<?php echo $base_url . '/public/assets/images/navBarImage/nav-mail.png'?>" alt="">

             sales@invoteams.com
           </a>
         </li>
         <li class="nav-item"><a class="nav-link mx-lg-2 offcanvas-link" href="#">
             <img src="<?php echo $base_url . '/public/assets/images/navBarImage/nav-phone.png'?>" alt="">
             +1 (415) 689-8530</a></li>
       </ul>
     </div>
   </div>

 </section>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Facebook - TailwindCSS
    </title>
    <link rel="shortcut icon" href="./images/fb-logo.png" type="image/png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./tailwind/tailwind.css">
</head>

<body class="bg-gray-100 dark:bg-dark-main">
    <!-- NAV -->
    <nav class="bg-white dark:bg-dark-second h-max md:h-14 w-full shadow flex flex-col md:flex-row items-center justify-center md:justify-between fixed top-0 z-50 border-b dark:border-dark-third">

        <!-- LEFT NAV -->
        <div class="flex items-center justify-between w-full md:w-max px-4 py-2">
           
           
            <div class="flex items-center justify-between space-x-1">
                <div class="relative bg-gray-100 dark:bg-dark-third px-2 py-2 w-10 h-10 sm:w-11 sm:h-11 lg:h-10 lg:w-10 xl:w-max xl:pl-3 xl:pr-8 rounded-full flex items-center justify-center cursor-pointer">
                    <i class='bx bx-search-alt-2 text-xl xl:mr-2 dark:text-dark-txt'></i>
                    <input type="text" placeholder="Search" class="outline-none bg-transparent hidden xl:inline-block">
                </div>
                <div class="text-2xl grid place-items-center md:hidden bg-gray-200 dark:bg-dark-third rounded-full w-10 h-10 cursor-pointer hover:bg-gray-300 dark:text-dark-txt">
                    <i class='bx bxl-messenger'></i>
                </div>
                <div class="text-2xl grid place-items-center md:hidden bg-gray-200 dark:bg-dark-third rounded-full w-10 h-10 cursor-pointer hover:bg-gray-300 dark:text-dark-txt" id="dark-mode-toggle-mb">
                    <i class='bx bxs-moon'></i>
                </div>
            </div>
        </div>
        <!-- END LEFT NAV -->

        <!-- MAIN NAV -->
        
        <!-- END MAIN NAV -->

        <!-- RIGHT NAV -->
        <ul class="hidden md:flex mx-4 items-center justify-center">
           
            <li>
                <div class="text-xl grid place-items-center bg-gray-200 dark:bg-dark-third dark:text-dark-txt rounded-full mx-1 p-3 cursor-pointer hover:bg-gray-300 relative" id="dark-mode-toggle">
                    <i class='bx bxs-moon'></i>
                </div>
            </li>
        </ul>
        <!-- END RIGHT NAV -->
    </nav>
    <!-- END NAV -->

    <!-- MAIN -->
    <div class="flex justify-center h-screen">
        <!-- LEFT MENU -->
       
        <!-- END LEFT MENU -->

        <!-- MAIN CONTENT -->
        <div class="w-full lg:w-2/3 xl:w-2/5 pt-32 lg:pt-16 px-2">





            <!-- LIST POST -->

            <div>




            <?php
         include 'php/Video Sharing Site/db.php';

         $sql1="SELECT * from amv";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>


                <!-- POST 1 -->
                <div class="shadow bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg">
                    <!-- POST AUTHOR -->
                    <div class="flex items-center justify-between px-4 py-2">
                        <div class="flex space-x-2 items-center">
                            <div class="relative">
                                <img src="<?php echo $info['logo']; ?>" alt="" class="w-10 h-10 rounded-full">
                                <span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span>
                            </div>
                            <div>
                                <div class="font-semibold">
                                <?php echo $info['video']; ?>
                                </div>
                                <span class="text-sm text-gray-500">38m</span>
                            </div>
                        </div>
                        <div class="w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">
                            <i class='bx bx-dots-horizontal-rounded'></i>
                        </div>
                    </div>
                    <!-- END POST AUTHOR -->

                    <!-- POST CONTENT -->
                    <div class="text-justify px-4 py-2">
                        <strong><?php echo $info['title']; ?>
                        </strong>
                    </div>
                    <!-- END POST CONTENT -->

                    <!-- POST IMAGE -->
                    <div class="py-2 ">
                   <video src="<?php echo $info['description']; ?>" poster="<?php echo $info['thumbnail']; ?>" style="  width: 745px;
  height: 480px;"
   controls></video>

             </video>
                        
                    </div>
                    <!-- END POST IMAGE -->

                    <!-- POST REACT -->
                    <div class="px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex flex-row-reverse items-center">
                                <span class="ml-2 text-gray-500 dark:text-dark-txt">999</span>
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-800">
                                    <i class='bx bxs-angry'></i>
                                </span>
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-500">
                                    <i class='bx bxs-heart-circle'></i>
                                </span>
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-yellow-500">
                                    <i class='bx bx-happy-alt'></i>
                                </span>
                            </div>
                            <div class="text-gray-500 dark:text-dark-txt">
                                <span>90 comments</span>
                                <span>66 Shares</span>
                            </div>
                        </div>
</div>

                    <!-- COMMENT FORM -->
                    <div class="py-2 px-4">
                        <div class="flex space-x-2">
                            <img src="./images/tuat.jpg" alt="Profile picture" class="w-9 h-9 rounded-full">
                            <div class="flex-1 flex bg-gray-100 dark:bg-dark-third rounded-full items-center justify-between px-3">
                                <input type="text" placeholder="Write a comment..." class="outline-none bg-transparent flex-1">
                                <div class="flex space-x-0 items-center justify-center">
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl"><i class='bx bx-smile'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl"><i class='bx bx-camera'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl"><i class='bx bxs-file-gif'></i></span>
                                    <span class="w-7 h-7 grid place-items-center rounded-full hover:bg-gray-200 cursor-pointer text-gray-500 dark:text-dark-txt dark:hover:bg-dark-second text-xl"><i class='bx bx-happy-heart-eyes'></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END COMMENT FORM -->
                </div>
                <!-- END POST -->








           <?php
         }


        ?>














                


            </div>

            <!-- END LIST POST -->
        </div>
        <!-- END MAIN CONTENT -->


    </div>
    <!-- END MAIN -->

    <script src="./static/app.js"></script>
</body>

</html>
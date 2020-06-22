<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>worcation</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    </head>
    <body class=" ">
        <div id="app">
          <Navbar></Navbar>
        
           <div class="">
               <div class="relative rounded-lg shadow-md pb-32 ">
                    <img src="/images/beach.jpg" alt="beach" class="absolute w-full h-72 object-cover rounded-lg shadow-md "  >
                </div>
               
                <div class="px-8 mt-10 relative">
                    <div class="p-8 bg-gray-300 rounded">
                            <div class="flex items-center">
                              <img src="/images/Summer_03.png" alt="worcation" class="h-12 pr-2" >
                              <h3 class="mt-6 text-xl font-bold text-gray-900 leading-tight sm:w-full xl:text-4xl ">Summer<span class="text-orange-600">Is<span>Here</h3>
                            </div>
                      
                       <div class="ml-8">
                           <h1 class="mt-6 text-xl font-bold text-orange-600 leading-tight xl:text-3xl">Work <span class="text-gray-900 sm:text-4xl lg:text-3xl sm:mt-8">online</span></h1>
                             <p class="mt-2 text-gray-800 text-xl sm:text-xl sm:mt-4">
                                Buy a new laptop in our webstore. No matter your price category, there are simply too many different types of laptops to choose from. 
                            </p >
                       </div>
                        <div class="mt-4 sm:mt-6  flex-wrap md:flex ml-10 ">
                            <a href="#"
                             class="btn btn-orange sm:text-base shadow-lg mb-4 sm:mb-0 pr-4 mr-4">Look inside</a>
                             <a href="#"
                             class="btn btn-gray sm:text-base pl-4 ">Learn more</a>
                        </div>
                   </div>
                </div>
     
             
         
            </div>
            
        </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body class="bg-gray-300 ">
        <div id="app">
       <App></App>
        {{-- <div class="flex bg-gray-100">

            <div id="app" class="px-20 py-10 max-w-md mx-auto sm:max-w-xl lg:w-1/2 lg:max-w-full lg:py-24 lg:px-12">
              
                <div class="xl:max-w-lg xl:ml-auto">
                   <div class="flex items-center">
                       <img src="/images/Summer_03.png" alt="worcation" class="h-12" >
                       <h3 class="mt-6 text-xl font-bold text-gray-900 leading-tight sm-w-full xl:text-4xl ">Summer<span class="text-orange-600">Is<span>Here</h3>
                   </div>
                   <img src="/images/beach.jpg" alt="beach"
                    class="h-12 mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm-w-full sm:object-cover sm:object-center lg:hidden"  >
                   <h1 class="mt-6 text-xl font-bold text-orange-600 leading-tight xl:text-3xl">Work <span class="text-gray-900 sm:text-4xl lg:text-3xl sm:mt-8">online</span></h1>
                     <p class="mt-2 text-gray-800 text-xl sm:text-xl sm:mt-4">
                        Buy a new laptop in our webstore. No matter your price category, there are simply too many different types of laptops to choose from. 
                    </p >
                    <div class="mt-4 sm:mt-6">
                        <a href="#"
                         class="btn btn-orange sm:text-base shadow-lg">Look inside</a>
                         <a href="#"
                         class="btn btn-gray sm:text-base ">Learn more</a>
                    </div>
               </div>
    
            </div>
    
            <div class="hidden lg:block lg:w-1/2 lg:relative">
               <img src="/images/beach.jpg" alt="beach" 
               class="absolute inset-0 h-full w-full object-center object-cover" >
    
            </div>
            
        </div>

        <div>
            <div class="max-w-md sm:max-w-xl lg:max-w-6xl mx-auto px-8 lg:px-12 py-8">
              <h2 class="text-xl text-gray-900">Popular products</h2>
              <p class="text-gray-600">A selection of great devices.</p>
              <div class="flex flex-wrap -mx-4">
                <div class="mt-6 w-full px-4 lg:w-1/2 xl:w-1/3" v-for="device in popularDevices">
                  <DeviceCard :device="device"/>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
    </div>
    </body>
    </html>

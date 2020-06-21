<template>
     <div id="app" class="antialiased text-gray-900">
    <div class="flex bg-gray-100">

            <div id="app" class="px-2 py-2 md:px-20 md:py-10 max-w-md mx-auto sm:max-w-xl lg:w-1/2 lg:max-w-full lg:py-24 lg:px-12">
              
                <div class="ml-0 xl:max-w-lg xl:ml-auto sm:pb-2">
                   <div class="flex items-center ml-0 ">
                       <img src="/images/Summer_03.png" alt="worcation" class="h-12 ml-0" >
                       <h3 class="ml-0 mt-4 sm:text-3xl font-bold text-gray-900 leading-tight sm:w-full xl:text-4xl ">Summer<span class="text-orange-600 text-xl sm:text-3xl">Is</span>Here</h3>
                   </div>
                   <img src="/images/beach.jpg" alt="beach"
                    class="h-14 mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-72 w-full sm:object-cover sm:object-center lg:hidden"  >
                   <h1 class="mt-6 text-xl font-bold text-orange-600 leading-tight xl:text-3xl">Work <span class="text-gray-900 sm:text-4xl lg:text-3xl sm:mt-8">online</span></h1>
                     <p class="mt-2 text-gray-800 text-xl sm:text-xl sm:mt-4">
                        Buy a new laptop in our webstore. No matter your price category, there are simply too many different types of laptops to choose from. 
                    </p >
                    <div class="mt-4 sm:mt-6 flex items-center">
                        <a href="#"
                         class="btn btn-orange sm:text-base shadow-lg">Look inside</a>
                         <a href="#"
                         class="btn btn-gray sm:text-base ml-2 sm:mt-3 md:mt-0">Learn more</a>
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
           
                <h2 class="text-2xl  font-semibold text-orange-500">Popular products </h2>       
              <p class="text-gray-800 font-semibold text-lg">A selection of great devices.</p>
              <div class="flex flex-wrap -mx-4">
                <div class="mt-6 w-full px-4 lg:w-1/2 xl:w-1/3" v-for="device in popularDevices">
                  <DeviceCard :device="device"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </div>
</template>

<script>
import DeviceCard from './DeviceCard'
export default {
  name: 'app',
  components: {
    DeviceCard,
  },
  data() {
    return {
      popularDevices: [
        {
          name: 'Acer',
          averageMark: 3 ,
          mark:2,
          price:350,
          deviceCount: 76,
          imageUrl: '/images/acer.jpg',
          imageAlt: 'Acer',
        },
        {
          name: 'Asus',
          averageMark: 3,
          mark:4,
          price:400,
          deviceCount: 43,
          imageUrl: '/images/asus.jpg',
          imageAlt: 'Asus',
        },
        {
          name: 'Dell',
          averageMark: 3,
          mark:5,
          price:500,
          deviceCount: 45,
          imageUrl: '/images/dell.png',
          imageAlt: 'Dell',
        }
        
       
      ]
    }
  }
}
</script>


  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
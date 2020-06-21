<template>
    <div  class=" flex items-center border rounded-lg shadow shadow-md bg-orange-500 overflow-hidden ">
        <div class="ml-2">
           <img class="h-32 w-32 flex-shrink-0 bg-white":src="device.imageUrl" :alt="device.imageAlt"></img>
             
        </div>
        <div class=" px-6 py-4 ml-2 ">
            <div class="flex items-center ">
           <!--    <span class=" uppercase tracking-wide font-semibold bg-teal-200 text-red-600 rounded-full shadow-md mr-2 outline-none text-xs px-2 py-1"> New</span>-->
                <span v-text="device.name=='Acer' ? 'New' : ''" :class="device.name=='Acer'?'bg-teal-500 text-red-600 rounded-md shadow-md mr-2 outline-none font-xs px-2 py-1':'' "></span>
                <h3 class="text-lg font-semibold text-gray-900 text-3xl  ">{{ device.name }}</h3>
            </div>

          <p class="text-gray-600 text-xs mt-2"><p>&euro;{{ device.price }}</p></p>
          <div class="flex mt-2 items-center">
              <svg v-for="i in 5" :key="i" viewBox="0 0 24 24" :class="i <= device.mark ? 'text-teal-500' : 'text-gray-400'" class="h-4 w-4 fill-current">
                    <path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z" />
                </svg>
                <span class="text-gray-700 ml-1"> stars</span>
          </div>
           <div class="mt-4">
               <a href="#" class="font-xl font-semibold text-blue-900 tracking-wide text-sm " > Explore {{device.deviceCount}} products</a>
           </div>
        </div>
        
    </div>
</template>

<script>
export default {
    props:['device'],
    
}
</script>
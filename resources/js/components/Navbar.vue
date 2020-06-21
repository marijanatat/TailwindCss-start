<template>
    <header class="bg-gray-800 ">
        <div class=" flex justify-between items-center px-4 py-3">
            <div class="flex items-center">
                <img src="/images/Summer_03.png" alt="workation" class="h-12">
                <p class="text-white  tracking-wider font-semibold text-2xl ml-2">Work<span class="text-orange-500 font-semibold">cation</span></P>
            </div><!--end of left side-->

            <div>
                <button @click="isOpen=!isOpen" type="button" class="px-2 text-gray-500 focus:text-white focus:outline-none hover:text-white hover:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                       <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>

            <div :class="isOpen ? 'block' :'hidden'" class="px-4 pb-4 pt-2">
                <a href="#" class="block px-2 py-1  text-white font-semibold rounded hover:bg-gray-800 ">List of products</a>
                 <a href="#" class="mt-1 block px-2 py-1  text-white font-semibold rounded hover:bg-gray-800">Actions</a>
                  <a href="#" class="mt-1 block px-2 py-1  text-white font-semibold rounded hover:bg-gray-800">Messages</a>

            </div>

        </header>
</template>

<script>
export default {
    data(){
        return{
          isOpen:false,
         }

    },
};
</script>

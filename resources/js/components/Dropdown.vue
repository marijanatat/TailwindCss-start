<template>
    <div class="z-10 relative ">
        <button @click="isOpen=!isOpen"class=" relative z-10 block h8 w-8 rounded-full overflow-hidden border-2 border-gray-500 focus:outline-none focus:border-white">
            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
        </button>

        <button v-if="isOpen"@click="isOpen=false" tabindex="-1" class="fixed inset-0 bg-black opacity-50 cursor-default h-full w-full">
        </button>
    <div v-if="isOpen" class="absolute right-0 w-48 mt-2 bg-white rounded-lg py-2 shadow-xl">
        <a href="" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Account settings</a>
         <a href="" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Contact</a>
          <a href="" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Sign out</a>
    </div>
        
    </div>
</template>
<script>
export default {
    data(){
        return{
          isOpen:false,
         }

    },
    created(){
        const handleEscape=(e)=>{
            if(e.key==='Esc'||e.key==='Escape'){
                this.isOpen=false

            }

        }
       document.addEventListener('keydown', handleEscape)
        this.$once('hook:beforeDestroy', () => {
      document.removeEventListener('keydown', handleEscape)
    })
  }
}
</script>
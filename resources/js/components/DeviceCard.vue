<template>
  <div class="flex items-center rounded-lg bg-white shadow-lg overflow-hidden">
    <img class="h-32 w-32 flex-shrink-0" :src="device.imageUrl" :alt="device.imageAlt">
    <div class="px-6 py-4">
      <h3 class="text-lg font-semibold text-gray-800">{{ device.name }}</h3>
      <p class="text-gray-600"><p>&euro;{{ device.averagePrice }}</p></p>
      <div class="mt-4">
        <a href="#" class="text-orange-500 hover:text-black-400 font-semibold text-sm">Explore {{ device.deviceCount }} products</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['device'],
}
</script>
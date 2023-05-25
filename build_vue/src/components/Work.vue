<script setup>
import axios from "axios";
import { ref } from 'vue'
import Selector from './Selector.vue'

const complects = ref([])
function action(){
  console.log("action")
  axios({
        method: 'get',
        url: 'http://localhost:8000/api/complect/show/constrained',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
      })
      .then(res => {
         complects.value = res.data.data

      })
      .catch(error => alert("Что то не так"));
}
action()



</script>

<template>
<div class="w-full from-cyan-500 to-blue-500  p-10">
  <Selector @vizov="action()"></Selector>
  <div class="container  w-full mx-auto p-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  ">
    <div v-for="complect in complects" :key="complect.id" class="bg-white min-w-fit p-8 rounded-lg sm:w-3/4 mt-10 ">
      <div class="text-orange-400 font-bold">Код сборки: R{{complect.id }}</div>
      <div>
        <div class="text-2xl font-bold text-sky-700">Материнская плата:</div>
        <div class="text-slate-800 font-medium">Название: {{ complect.motherboard.name}}</div>
        <div class="text-slate-800 font-medium">Сокет: {{ complect.motherboard.socket}}</div>
        <div class="text-slate-800 font-medium">Цена: {{ complect.motherboard.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-sky-700">Процессор</div>
        <div class="text-slate-800 font-medium">Название: {{ complect.processor.name}}</div>
        <div class="text-slate-800 font-medium">Сокет: {{ complect.processor.socket}}</div>
        <div class="text-slate-800 font-medium">Цена: {{ complect.processor.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-sky-700">Блок питания</div>
        <div class="text-slate-800 font-medium">Название: {{ complect.power.name}}</div>
        <div class="text-slate-800 font-medium">Ватт: {{ complect.power.ww}}</div>
        <div class="text-slate-800 font-medium">Цена: {{ complect.power.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-sky-700">RAM</div>
        <div class="text-slate-800 font-medium">Название: {{ complect.ram.name}}</div>
        <div class="text-slate-800 font-medium">GB: {{ complect.ram.gb}}</div>
        <div class="text-slate-800 font-medium">Цена: {{ complect.ram.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-sky-700">Память</div>
        <div class="text-slate-800 font-medium">Название: {{ complect.storage.name}}</div>
        <div class="text-slate-800 font-medium">Объем (гб): {{ complect.storage.gb}}</div>
        <div class="text-slate-800 font-medium">Цена: {{ complect.storage.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold text-sky-700">Охлаждение</div>
        <div class="text-slate-800 font-medium">Название: {{ complect.cooling.name}}</div>
        <div class="text-slate-800 font-medium">Цена: {{ complect.cooling.cost}}</div>
      </div>
      <div>
        <div class="text-3xl font-bold pt-5">Общая цена:</div>
        <div class="text-3xl font-bold text-green-600 flex gap-2">{{ complect.cooling.cost +complect.storage.cost + complect.ram.cost + complect.power.cost + complect.processor.cost + complect.motherboard.cost}} <div class="text-xl text-gray-600 h-9 flex items-end justify-end">рублей</div></div>
      </div>
    </div>
  </div>

</div>




</template>

<style scoped>

</style>

import { createApp } from 'vue'
import TodoList from './components/TodoList.vue'
import TodoModal from './components/TodoModal.vue'
import api from './plugins/api'

const app = createApp({})

app.config.globalProperties.$api = api

app.component('todo-list', TodoList)
app.component('todo-modal', TodoModal)

app.mount('#todo-app')

<template>
  <div class="todo-list">
    <!-- 追加 -->
    <form action="" method="post" class="d-flex gap-2 w-50 mt-5 mx-auto">
        <input type="text" name="content" placeholder="新しいタスクを入力" v-model="newTodo" class="form-control bg-body-secondary">
        <button type="submit" @click="addTodo" class="btn btn-primary px-3">追加</button>
    </form>

    <ul>
      <li v-for="todo in todos" :key="todo.id" class="d-flex justify-content-between align-items-center">
        <span class="ps-3 fs-5">{{ todo.title }}</span>
        <div class="d-flex justify-content-between align-items-center gap-2 pe-3">
          <span class="material-symbols-outlined" @click="editTodo(todo)">edit</span>
          <span class="material-symbols-outlined" @click="deleteTodo(todo.id)">close</span>
        </div>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref, onMounted, getCurrentInstance } from 'vue'
const { proxy } = getCurrentInstance()
const api = proxy.$api


const todos = ref([])
const newTodo = ref('')

const fetchTodos = async () => {
  try {
    const response = await api.get('/todos')
    todos.value = response.data.todos ?? []
  } catch (error) {
    console.error('Error fetching todos:', error)
  }
}

const addTodo = async () => {
  if (newTodo.value.trim()) {
    try {
      const response = await api.post('/todos', { title: newTodo.value })
      todos.value.push(response.data)
      newTodo.value = ''
    } catch (error) {
      console.error('Error adding todo:', error)
    }
  }
}

const deleteTodo = async (id) => {
  try {
    await api.delete(`/todos/${id}`)
    todos.value = todos.value.filter(todo => todo.id !== id)
  } catch (error) {
    console.error('Error deleting todo:', error)
  }
}

const editTodo = (todo) => {
  // 編集機能の実装（モーダルを開くなど）
  console.log('Edit todo:', todo)
}

onMounted(() => {
  fetchTodos()
})
</script>
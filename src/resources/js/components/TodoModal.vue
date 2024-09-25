<template>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content p-4">
        <!-- 内容 -->
        <div class="modal-body">
          <input type="text" name="content" class="form-control bg-body-secondary fs-5" placeholder="タスク内容を編集" value="やること">
        </div>
        <!-- キャンセル・完了 -->
        <div class="modal-footer border-0 gap-2">
          <button type="button" class="btn btn-outline-secondary" style="min-width: 100px;" data-bs-dismiss="modal">キャンセル</button>
          <button type="submit" class="btn btn-primary" style="min-width: 100px;">完了</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineEmits } from 'vue'

const emit = defineEmits(['complete'])

const onComplete = () => {
  console.log('完了ボタンがクリックされました')
  emit('complete')
  // モーダルを閉じる処理などを追加できます
}
</script>
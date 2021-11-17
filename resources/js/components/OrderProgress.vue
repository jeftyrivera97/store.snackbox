<template>
<div class="progress">
  <progressbar :now="progress" type="primary" striped></progressbar>
</div>
</template>

<script>
import { progressbar } from 'vue-strap'
export default {
    components: {
    progressbar
  },
  props: ['initial', 'pedido_id'],
  data()
  {
      return{
          progress: this.initial
      }
  },
}
</script>
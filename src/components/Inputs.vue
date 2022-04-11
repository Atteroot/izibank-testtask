<template>
  <select
    name="select" 
    id="" 
    v-model="selected" 
    @change="sendSearchData()"
    class="inputs__select"
  >
    <option value="" selected disabled hidden>Оберіть фільтр</option>
    <option value="all">Всі</option>
    <option value="refill">Переказ/поповнення</option>
    <option value="registration">Оформлення</option>
    <option value="other">Інше</option>
  </select>

  <input
    type="text"
    name="" id=""
    placeholder="Пошук..."
    v-model="this.search"
    @input="sendSearchData()"
    class="inputs__input"
  >
</template>

<script>
export default {
  data: function() {
    return {
      search: '',
      selected: ''
    } 
  },

  methods: {
    sendSearchData() {
      this.$emit('send', this.search, this.selected)
    }
  }
}
</script>

<style scoped>
  .inputs__select, 
  .inputs__input {
    outline: none;

    border: 1px solid #efe8e8;
    border-radius: 8px;

    padding: 5px 100px 5px 10px;
    margin-bottom: 10px;
  }

  @media (max-width: 860px) {
    .inputs__select, 
    .inputs__input {
      width: 100%;
    }
  }
</style>
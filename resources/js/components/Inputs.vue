<template>
  <div>
    <select
      name="select"  
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
      placeholder="Пошук..."
      v-model="searchData"
      @input="sendSearchData()"
      class="inputs__input"
    >
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      searchData: '',
      selected: ''
    } 
  },

  methods: {
    sendSearchData() {
      this.$emit('send', this.searchData, this.selected);
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
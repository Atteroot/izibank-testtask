<template>
  <header class="header">
    <p class="header-text">тарифи</p>
    <Inputs @send="takeSearchData"/>
  </header>
</template>

<script>
import Inputs from './Inputs.vue';

export default {
  components: {
    Inputs,
  },

  data() {
    return {
      searchData: '',
      selected: '',
    }
  },

  methods: {
    takeSearchData(search, selected) {
      this.searchData = search;
      this.selected = selected;
      this.$emit('send', this.searchData, selected);
    } 
  },
}
</script>

<style scoped>
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    margin: 0 15px 15px;
  }

  .header-text {
    font-family: Roboto ,serif;
    color: #ff5900;
    font-size: 4.5rem;
    font-weight: 700;
    line-height: 1.2;
  }
</style>
<template>
  <div>
    <header>
      <Head @send="takeSearchData"/>
    </header>
    <section>
      <Tariffs :search="search" :select="select"/>
    </section>
  </div>
</template>

<script>
import Head from './Head.vue';
import Tariffs from './Tariffs.vue';

export default {
  components: {
    Head, Tariffs
  },

  data: function() {
    return {
      search: '',
      select: '',
    }
  },

  methods: {
    takeSearchData(search, select) {
      this.search = search;
      this.select = select;
    }
  }
}
</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap');

 * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
 }

 html {
   background-color: #FBF8F8;
   background-size: cover;
 }
</style>
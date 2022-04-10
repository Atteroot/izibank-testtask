<template>
  <div class="tariffs_table">
    <transition-group name="cards">
      <div
        v-for="tariff in filterTariffs"
        :key="tariff.id"
        class="tariffs_table__card"
      >
        <div class="tariffs_table__card-description">
          <p class="card-description__title">{{ tariff.title }}</p>
          <p class="card-description__description">{{ tariff.description }}</p>
        </div>
        <div class="tariffs_table__card-footer">
          <p>{{ tariff.footer }}</p>
        </div>
      </div>
    </transition-group>
  </div>
</template>

<script>
export default {
  props: {
    search: {
      type: String,
    },
    select: {
      type: String,
    }
  },

  data: function() {
    return {
      tariffs: [],
    }
  },

  computed: {
    filterTariffs() {
      return this.tariffs.filter(tariff => {
        if (this.search != '') {
          return tariff.title.includes(
            this.search.length >= 3 ? this.search : ''
          );
        }
        
        if (this.select != 'all') {
          return tariff.category.includes(this.select);
        } else {
          return this.tariffs;
        }
      })
    }
  },

  async created() {
    const response = await fetch('./tariffs.json');
    console.log(response);
    const data = await response.json()
    console.log(data);
    data.map(el => this.tariffs.push(el))
  }
}
</script>

<style>
 .tariffs_table {
   display: grid;
   grid-template-columns: repeat(4, 1fr);
 }

 .tariffs_table__card {
   display: flex;
   flex-direction: column;

   background: #FFFFFF;

   border: 1px solid #efe8e8;
   border-radius: 8px;

   padding: 12px;
   height: 164px;
   line-height: 22px;

   margin: 0 15px 15px;
 }

 .card-description__title, 
 .card-description__description {
   font-family: Roboto;
 }

 .card-description__title {
   font-size: 1rem;
   font-weight: 400;
   color: #ff5900;
 }

 .card-description__description {
   font-size: 27px;
   line-height: 27px;
 }

 .tariffs_table__card-footer {
   font-family: Roboto;
   font-weight: 100;
   font-size: 16px;
   font-weight: 18px;
   margin-top: auto;
 }

 .cards-enter-active,
 .cards-leave-active {
   transition: all 1s;
 }

 .cards-enter,
 .cards-leave-to {
   opacity: 0;
 }
</style>
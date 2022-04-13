<template>
  <div class="tariffs_table">
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
  </div>
</template>

<script>
import tariffs from '../../../storage/app/public/tariffs.json';

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
      tariffs: tariffs,
    }
  },

  computed: {
    filterTariffs() {
      //Filter if category and search not empty
      if ((this.select !== 'all' && this.select !== '') && this.search.length >= 3) {
        return this.tariffs.filter(tariff => {
          return tariff.category.includes(this.select) && tariff.title.includes(this.search);
        })
      }
      //Filter if category not empty and search is empty
      else if ((this.select !== '' && this.select !== 'all') && this.search.length < 3) {
        return this.tariffs.filter(tariff => {
          return tariff.category.includes(this.select);
        })
      }
      //Filter if category is empty/all and search not empty
      else if ((this.select === '' || this.select === 'all') && this.search.length >= 3) {
        return this.tariffs.filter(tariff => {
          return tariff.title.includes(this.search);
        })
      }
      // If category and search are empty
      else {
        return this.tariffs
      }
    }
  },

  // async mounted() {
  //   const response = await fetch(asset());
  //   const data = await response.json();
  //   data.map(el => this.tariffs.push(el))
  // }
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

 @media (max-width: 1000px) {
    .tariffs_table {
      grid-template-columns: repeat(3, 1fr);
    }
 }

 @media (max-width: 800px) {
    .tariffs_table {
      grid-template-columns: repeat(2, 1fr);
    }
 }

 @media (max-width: 500px) {
    .tariffs_table {
      grid-template-columns: repeat(1, 1fr);
    }
 }
</style>
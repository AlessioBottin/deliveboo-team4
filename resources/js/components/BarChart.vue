<template>
    <section>
        <Bar
            :chart-options="chartOptions"
            :chart-data="chartData"
            :chart-id="chartId"
            :dataset-id-key="datasetIdKey"
            :plugins="plugins"
            :css-classes="cssClasses"
            :styles="styles"
            :width="width"
            :height="height"
        />
    </section>
</template>

<script>
import { Bar } from 'vue-chartjs/legacy'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
  name: 'BarChart',
  components: { Bar },
  props: {
    chartId: {
      type: String,
      default: 'bar-chart'
    },
    datasetIdKey: {
      type: String,
      default: 'label'
    },
    width: {
      type: Number,
      default: 400
    },
    height: {
      type: Number,
      default: 400
    },
    cssClasses: {
      default: '',
      type: String
    },
    styles: {
      type: Object,
      default: () => {}
    },
    plugins: {
      type: Array,
      default: () => []
    }
  },
  data: function() {
    return {
      chartData: {
        labels: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
        datasets: [ { data: this.getOrdersData() } ]
      },
      chartOptions: {
        responsive: true
      },
    }
  }, 
  methods: {
    getOrdersData: function() {
      let orders = this.$attrs['orderdata'];
      
      let monthlyOrders = [];
      let thisMonthOrders = 0;
      
      for (let i = 0; i < 12; i++) {
        thisMonthOrders = 0;

        orders.forEach(order => {
          let date = new Date(order.created_at);
          let month = date.getMonth()+1;

          console.log(i);
          console.log(month);
          if (month === i+1) {
            console.log(order);
            thisMonthOrders++
          } else {
            console.log('no');
          }
          monthlyOrders[i] = thisMonthOrders; 
        });
        
      }
      console.log(monthlyOrders);
      return monthlyOrders;
    }
  }     
}
// date = new Date(order.created_at);
// year = date.getFullYear();
// month = date.getMonth()+1;
// dt = date.getDate();

// if (dt < 10) {
//   dt = '0' + dt;
// }
// if (month < 10) {
//   month = '0' + month;
// }
</script>

<style lang="scss" scoped>

</style>
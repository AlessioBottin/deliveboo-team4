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
        datasets: [{ 
          data: this.getOrdersData(),
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1,
          label: 'Orders Per Month',
        }]
      },
      chartOptions: {
        responsive: true
      },
    }
  }, 
  methods: {
    getOrdersData: function() {

      // Versione Vendite Mensili 
      if (this.$attrs['version'] === 'monthlysales') {
        let orders = this.$attrs['orderdata'];
        
        let monthlyOrders = [];
        let thisMonthOrders = 0;
        
        for (let i = 0; i < 12; i++) {
          thisMonthOrders = 0;
  
          orders.forEach(order => {
            let date = new Date(order.created_at);
            let month = date.getMonth()+1;
  
            if (month === i+1) {
              thisMonthOrders++
            }
            monthlyOrders[i] = thisMonthOrders; 
          });
          
        }
        return monthlyOrders;
      }

      // Versione ricavi mensili 
      if (this.$attrs['version'] === 'monthlyrevenue') {
        let orders = this.$attrs['orderdata'];
        
        let monthlyRevenue = [];
        let thisMonthRevenue = 0;
        
        for (let i = 0; i < 12; i++) {
          thisMonthRevenue = 0;
  
          orders.forEach(order => {
            let date = new Date(order.created_at);
            let month = date.getMonth()+1;
  
            if (month === i+1) {
              thisMonthRevenue += parseFloat(order.total_price);
            }
            monthlyRevenue[i] = thisMonthRevenue; 
          });
          
        }
        return monthlyRevenue;
      }
      
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
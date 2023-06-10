import  {Chart,registerables } from 'chart.js';
window.Chart = Chart;
window.Chart.register(...registerables);

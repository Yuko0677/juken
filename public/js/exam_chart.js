function examChart(id) {
  var ctx = document.getElementById(id);
  const backgroundColor = 'rgba(255, 255, 255, 0)';
  const borderColors = [
    'rgb(255, 99, 132)',
    'rgb(255, 159, 64)',
    'rgb(255, 205, 86)',
    'rgb(75, 192, 192)',
    'rgb(54, 162, 235)',
    'rgb(153, 102, 255)',
    'rgb(201, 203, 207)',
  ];

  var data = [];
  function init() {
    subject_names.forEach(function (subject_name, index) {
      data.push(
        {
          label: subject_name,
          data: srandard_scores[subject_name],
          borderColor: borderColors[index],
          backgroundColor: backgroundColor,
        }
      )
    })
  }

  init();
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: exam_names,
      datasets: data,
    },
    options: {
      title: {
        display: true,
        text: '偏差値'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
      hover: {
        mode: 'nearest',
        intersect: true
      },
    }
  });
}
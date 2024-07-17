(function ($) {

    $('.sidebar_menu a').on('click', function (e) {
        if ($(this).next().is('ul')) {
            e.preventDefault();
            $('.sidebar_menu li').each(element => {
                let items = $('.sidebar_menu li');
                if (!$(this).parent().is(items[element])) {
                    $(items[element]).removeClass('active');
                }
            });
            $(this).parent().toggleClass('active');

        }
    })
    var options = {
        series: [{
            name: 'New User',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'Old User',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            toolbar: {
                show: false,
            },
            height: 350,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: 'Earnings Graph',
            align: 'left'
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        },
        tooltip: {

        },
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();



    var options = {
        series: [{
            name: 'New User',
            data: [44, 55, 41, 67, 22, 43, 21]
        }, {
            name: 'Old User',
            data: [13, 23, 20, 8, 13, 27, 33]
        }],
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            stackType: '100%',
            toolbar: {
                show: false,
            },
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
        }],
        title: {
            text: 'Earnings Graph',
            align: 'left'
        },
        xaxis: {
            categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        },
        fill: {
            opacity: 1
        },
        legend: {
            position: 'right',
            offsetX: 0,
            offsetY: 50
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();




    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
        type: 'donut',
        toolbar: {
            show: false,
        },
      },
      title: {
        text: 'Earnings Graph',
        align: 'left'
    },
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200
          },
          legend: {
            position: 'bottom'
          }
        }
      }]
      };

      var chart = new ApexCharts(document.querySelector("#chart3"), options);
      chart.render();




      


      
      var options = {
        series: [{
        data: [34, 44, 54, 21, 12, 43, 33, 23, 66, 66, 58]
      }],
        chart: {
        type: 'line',
        height: 480,
        toolbar: {
            show: false,
        },
      },
      stroke: {
        curve: 'stepline',
      },
      dataLabels: {
        enabled: false
      },
      title: {
        text: 'Stepline Chart',
        align: 'left'
      },
      markers: {
        hover: {
          sizeOffset: 4
        }
      }
      };

      var chart = new ApexCharts(document.querySelector("#chart4"), options);
      chart.render();
    
    
  



      $('.notification_drop_controller').on('click',function (event){
        $('.notification_dropdown_section').hide()
        $(this).next().show()
      })



}(jQuery))
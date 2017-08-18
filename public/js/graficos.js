/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



var options = {
responsive: true

        };
        var data = {

        labels: ["20170508 23:00","20170508 23:59","20170509 01:00","20170509 02:00","20170509 03:00","20170509 04:00","20170509 05:00","20170509 06:00","20170509 07:00","20170509 08:00","20170509 09:00","20170509 10:00"],

                datasets: [
                {
                label: "Dados primários",
                        fillColor: "rgba(255,255,255,0.3)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: ["407", "516", "411", "463", "464", "411", "462", "410", "411", "463", "463", "420"]
                },
                {
                label: "Dados secundários",
                        //fillColor: "rgba(151,187,205,0.2)",
                        fillColor: "rgba(255,255,255,0.3)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: ["128.25", "128.26", "128.25", "128.25", "128.25", "128.24", "128.24", "128.23", "128.22", "128.22", "128.22", "128.22"]
                }
                ],
                
                datasets2:[{ data: ["128.25", "128.26", "128.25", "128.25", "128.25", "128.24", "128.24", "128.23", "128.22", "128.22", "128.22", "128.22"]}]
                
                };
        window.onload = function () {

        var ctx = document.getElementById("GraficoLine").getContext("2d");
                var LineChart = new Chart(ctx).Line(data, options);
                
               var caixa =  document.getElementById("GraficoLine2").getContext("2d");
               var LineChart2 = new Chart(caixa).Line(data, options);
                
                }  
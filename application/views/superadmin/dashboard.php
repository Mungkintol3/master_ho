<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
 <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Penyimpanan Telah Terpakai</p>
                  <h3 class="card-title">...
                    <small>GB</small>
                  </h3>
                </div> 
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-4">
              <h3 align="center">Usia</h3>
                <canvas id="umur" width="350" height="350">Usia</canvas>
            </div>
            <div class="col-md-4">
              <h3 align="center">Masa Kerja</h3>
              <canvas id="masaKerja" width="350" height="350">Masa Kerja</canvas>
            </div>
            <div class="col-md-4">
              <h3 align="center">Pendidikan</h3>
              <canvas id="pendidikan" width="350" height="350">Education</canvas>
            </div>
          </div>
        </div>
      </div>
       <script type="text/javascript">
          var ctx = document.getElementById('masaKerja').getContext('2d');
          var chart = new Chart(ctx, {
              //type chart
              type: 'pie',
              // data untuk isi chart
              data: {
                labels:["1tahun", "10 tahun" , "15 tahun" , "20 tahun"],
                datasets: [{
                      label: " Masa Kerja",
                      data:[ 14,100,25,40],
                      backgroundColor: [
                                "#FF6384",
                                "#63FF84",
                                "#84FF63",
                                "#8463FF"
                            ]


                }]
              },

              options:{
                  
              }
          });
       </script>
    
       <script type="text/javascript">
               var ctx = document.getElementById('pendidikan').getContext('2d');
               var chart = new Chart(ctx, {
                      // The type of chart we want to create
                      type: 'pie',

                      // The data for our dataset
                      data: {
                          labels: ["SMA", "D3", "D4", "S1", "S2"],
                          datasets: [{
                              label: "Data Pendidikan ",
                              backgroundColor: ["#ff6384",
                                                "#36a2eb",
                                                "#cc65fe",
                                                "#ffce56",
                                                "#8463FF"],
                              data: [5, 2, 20, 30, 45]
                          }]
                      },

                      // Configuration options go here
                      options: {}
                  });
              </script>

              <script type="text/javascript">
               var ctx = document.getElementById('umur').getContext('2d');
               var chart = new Chart(ctx, {
                      // The type of chart we want to create
                      type: 'pie',

                      // The data for our dataset
                      data: {
                          labels: ["18-27", "28-35", "36-45", "46-55"],
                          datasets: [{
                              label: "Data Pendidikan ",
                              backgroundColor: ["#ff6384",
                                                "#36a2eb",
                                                "#cc65fe",
                                                "#ffce56"],
                              data: [100, 50, 20, 30]
                          }]
                      },

                      // Configuration options go here
                      options: {}
                  });
              </script>
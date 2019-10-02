<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700i,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
     <script src="https://kit.fontawesome.com/e3f79674f8.js"></script>
    <title>TAO</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-white bg-white">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{ url('img/logo.png') }}"></a>
          <span class="navbar-text tao-intro-text">
            <h4>Welcome to Sample Institution</h4>
            <p>In case of a mental health emergency when your institution is not open, please contact 911 If you have any technical problems with the program, please email support@connect.org</p>
          </span>
        </div>
      </nav>
      <div class="header-color-bar"></div>
    </header>

    <section id="top" class="mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <badgets-path></badgets-path>
          </div>

          <div class="col-md-5 offset-1">

            <div class="card tao-panel badge-card">
              <div class="card-body">
                <div class="container">

                  <div class="row">
                    <div class="col-md-4 offset-1 text-right">
                      <img style="height:60px;" src="{{ url('img/badge.png') }}">
                    </div>
                    <div class="col-md-6">
                      <h1 class="badge-name">Badge 3</h1>
                      <h4 class="badge-status">10/12 Completed</h4> 
                    </div>
                  </div>

                    <div class="table-container">
                    <table class="table tao-table t2">

                      <tbody>

                      <tr>
                        <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                        <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                        <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                        <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
                      </tr>
 
                      <tr>
                        <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                        <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                        <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                        <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
                      </tr>
                       
                      <tr>
                        <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                        <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                        <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                        <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
                      </tr>
                      
                      <tr>
                        <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                        <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                        <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                        <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
                      </tr>
                      
                      
                      <tr>
                        <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                        <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                        <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                        <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
                      </tr>

                      <tr>
                        <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                        <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                        <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                        <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
                      </tr>                     


                      </tbody>
                    </table>
                    </div>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="mt-5 mb-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="card tao-panel stats-card">

              <div class="card-body">
                <div class="row v-align-children">
                <div class="col-md-3">
            <!--    <h5 class="card-title">Special title treatment</h5> -->
                <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
              <div class="col-md-8 offset-1 col-sm-12 text-center">

                <div class="text-center metric">
                  <p class="stat">10</p>
                  <div class="stat-bar" style="height:20px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">20</p>
                  <div class="stat-bar" style="height:40px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">30</p>
                  <div class="stat-bar" style="height:60px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">40</p>
                  <div class="stat-bar" style="height:80px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">50</p>
                  <div class="stat-bar" style="height:100px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">60</p>
                  <div class="stat-bar" style="height:120px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">70</p>
                  <div class="stat-bar" style="height:140px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">80</p>
                  <div class="stat-bar" style="height:160px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">90</p>
                  <div class="stat-bar" style="height:180px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">100</p>
                  <div class="stat-bar" style="height:200px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">90</p>
                  <div class="stat-bar" style="height:180px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="text-center metric">
                  <p class="stat">80</p>
                  <div class="stat-bar" style="height:160px;"></div>
                  <p class="stat">Jan</p>
                </div>
                <div class="col-md-12 text-center">
                  <p class="cta-text">Click to view survey responses</p>
                </div>

              </div>
            </div>
            </div>

              <div class="tao-panel-color-bar"></div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="mt-5 mb-5 pb-5">

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="card tao-panel">
              <div class="tab-buttons color-white">
                <div class="tab-btn text-center">
                  <img class="tab-btn-img" src="{{ url('img/w-session.png') }}">
                </div>
                <div class="tab-btn text-center center">
                  <img class="tab-btn-img" src="{{ url('img/w-me.png') }}">
                </div>
                <div class="tab-btn text-center">
                  <img class="tab-btn-img" src="{{ url('img/w-pl.png') }}">
                </div>
              </div>

              <div class="card-body card-2">
                <div class="row v-align-children text-left">
                  <div class="col-md-7">
                    <h2 class="card-header">Completed Activities</h2>
                  </div>
                  <div class="col-md-5">
                    <input class="search-field" type="text" name="search" value="">
                  </div>
                </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-container">
          <table class="table tao-table">

            <thead>
              <tr>
                <td class="col-void">

                </td>
                <td class="col-session-name col-name">
                  Session Name
                </td>
                <td class="col-date-complete col-name">
                  Date completed
                </td>
                <td class="col-ratting col-name">
                  Your Ratting
                </td>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>

              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>


              
            </tbody>
          </table>
          </div>
              </div>

            </div>
            </div>



          </div>
        </div>
      </div>
    </section>

    <section class="mt-5 mb-5 pb-5">

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="card tao-panel">
              <div class="tab-buttons color-white">
                <div class="tab-btn text-center">
                  <img class="tab-btn-img" src="{{ url('img/w-session.png') }}">
                </div>
                <div class="tab-btn text-center center">
                  <img class="tab-btn-img" src="{{ url('img/w-me.png') }}">
                </div>
                <div class="tab-btn text-center">
                  <img class="tab-btn-img" src="{{ url('img/w-pl.png') }}">
                </div>
              </div>

              <div class="card-body card-2">
                <div class="row v-align-children text-left">
                  <div class="col-md-7">
                    <h2 class="card-header">My ToDo List</h2>
                  </div>
                  <div class="col-md-5">
                    <input class="search-field" type="text" name="search" value="">
                  </div>
                </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-container">
          <table class="table tao-table">

            <thead>
              <tr>
                <td class="col-void">

                </td>
                <td class="col-session-name col-name">
                  Session Name
                </td>
                <td class="col-date-complete col-name">
                  Date completed
                </td>
                <td class="col-ratting col-name">
                  Your Ratting
                </td>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>

              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>
              <tr>
                <td class="col-img"><img style="height:20px;" src="{{ url('img/session.png') }}"></td>
                <td class="col-session-name col-text"><span class="text">Session Name</span><span class="sub-text">1:23</span></td>
                <td class="col-date-complete col-text"><span class="sub-text">12/12/2019</span></td>
                <td class="col-ratting col-text"><img style="height:20px;" src="{{ url('img/info.png') }}"></td>
              </tr>


              
            </tbody>
          </table>
          </div>
              </div>

            </div>
            </div>



          </div>
        </div>
      </div>
    </section>

    <footer>
      <nav class="navbar fixed-bottom">
        <div class="container">

        </div>
      </nav>
    </footer>

    <script src="/js/app.js"></script>

  </body>
</html>

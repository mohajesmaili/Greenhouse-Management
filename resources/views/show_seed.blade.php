<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>XP_Market | نمایش بذر</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    <script>
        function dl()
         {
            a=confirm('آیا برای حذف مطمئنید؟');
            if(a==false) {
                return false;
            }
            else {
                return true;
            }
         }
    </script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <header class="header black-bg">
          <!--logo start-->
          <a href="index.php" class="logo"><img style="width:150px;margin-top:-5px;"  src="assets/img/xp-logo.png"/></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                  <!-- settings start -->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                          <i class="fa fa-tasks"></i>
                          <span class="badge bg-theme">4</span>
                      </a>
                      <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">You have 4 pending tasks</p>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <div class="task-info">
                                      <div class="desc">DashGum Admin Panel</div>
                                      <div class="percent">40%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <div class="task-info">
                                      <div class="desc">Database Update</div>
                                      <div class="percent">60%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <div class="task-info">
                                      <div class="desc">Product Development</div>
                                      <div class="percent">80%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">80% Complete</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <div class="task-info">
                                      <div class="desc">Payments Sent</div>
                                      <div class="percent">70%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only">70% Complete (Important)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="external">
                              <a href="#">See All Tasks</a>
                          </li>
                      </ul>
                  </li>
                  <!-- settings end -->
                  <!-- inbox dropdown start-->
                  <li id="header_inbox_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                          <i class="fa fa-envelope-o"></i>
                          <span class="badge bg-theme">2</span>
                      </a>
                      <ul class="dropdown-menu extended inbox">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">شما  پیام جدید دارید</p>
                          </li>
                          <li>
                              <a href="contact.php">
                                  <span class="photo"><img alt="avatar" src="../images/dummy/avatars/avatar-1.jpg"></span>
                                  <span class="subject">
                                    <span class="from">محمد</span>
                                    <span class="time">23 دقیقه قبل</span>
                                    </span>
                                  <span class="message">
                                        سلام
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="contact.php">نمایش تمامی پیام ها</a>
                          </li>
                      </ul>
                  </li>
                  <!-- inbox dropdown end -->
              </ul>
              <!--  notification end -->
          </div>
          <div class="top-menu">
              <ul class="nav pull-right top-menu">
                  <li style="cursor: pointer;"><a style="margin-left:15px;" onclick="exit()" class="logout">خروج</a></li>
                  <li style="cursor: pointer;"><a href="../index.php" class="logout">صفحه اصلی</a></li>
              </ul>
          </div>
      </header>
      <!--header end-->


      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside style="float: right;margin-right: 210px;">
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered">
                      <a href="show-user.php"><img src="assets/img/admin/1.jpg" class="img-circle" width="60">
                      </a>
                  </p>
                  <h5 class="centered">محمد</h5>
                  <li class="mt">
                      <a href="/">
                          <i class="fa fa-dashboard"></i>
                          <span>داشبورد</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="fa fa-dot-circle-o"></i>
                          <span>بذر</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="/show_seed">نمایش بذر</a></li>
                          <li><a  href="/add_seed">اضافه کردن بذر جدید</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

                  <div class="col-md-12" style="margin-top: 20px;">
                      <div class="content-panel">
                          <h4></i>نمایش بذر ها</h4><hr><table class="table table-striped table-advance table-hover">
                              <thead>

                              <tr>
                                  <th>نام بذر</th>
                                  <th>نام انگلیسی</th>
                                  <th>تعداد</th>
                                  <th>دسته بندی</th>
                                  <th>سن بذر</th>
                                  <th>عکس</th>
                                  <th>تنظیمات</th>
                              </tr>
                              </thead>
                              <tbody>
                                      @foreach($seed as $seeds)
                                      <form method="post" action="../{{$seeds->id}}" id="frm"   onSubmit="return dl()">
                                      {{method_field("delete")}}
                                      {{csrf_field()}}
                                      <tr style="font-family:roya;">
                                          <td>{{$seeds->name}}</td>
                                          <td>{{$seeds->name_en}}</td>
                                          <td>{{$seeds->number}}</td>
                                          <td>{{$seeds->seed_category}}</td>
                                          <td>{{$seeds->age}}</td>
                                          <td><a href="assets/img/Seed/{{$seeds->id}}.jpg"><img src="assets/img/Seed/{{$seeds->id}}.jpg" width="62" height="62" style="border-radius:8px;"/></a></td>
                                          <td>
                                      <a href="/add_user_pic/{{$seeds->id}}" class="btn btn-primary btn-xs"><i class="fa fa-image"></i></a>
                                      <a href="/edit_seed/{{$seeds->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <button type="submit" name="delete" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                      </td>
                                      </tr>
                                     </form>
                                      @endforeach

                              </tbody>
                          </table>
                          <div style="align-items: center;direction: ltr;text-align: center;" class="general-pagination group">
                              <a style="margin-right:2px;" href="show-product.php?pageid='.$i.'"><span class="badge bg-warning">1</span></a>
                          </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->

          </section>
      </section>

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>

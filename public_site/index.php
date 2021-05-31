<?php 	
	require '../database/database.php';
	db_connect();
	require '../database/session.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylectvc_1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <title>congtyvanchuyen.com-Uy tín tạo niềm tin</title>
</head>
<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!-- header-->
    <div class="jumbotron text-center" id="header" >
      <h1>Công ty vận chuyển</h1>
      <p>Uy tín tạo niềm tin</p> 
    </div>
    <!-- phần navbar-->
    <div class="navbar conatainer-fluid " id="mynavbar">
      <a  class="active" href="#myPage"><i class="fa fa-fw fa-home"></i> Trang chủ</a>
      <a  href="#tracuu"><i class="fa fa-fw fa-search"></i> Tra cứu</a>
      <a  href="#dichvu"><i class="fa fa-fw fa-globe"></i> Dịch vụ</a>
      <a  href="#lienhe"><i class="fa fa-fw fa-envelope"></i> Liên hệ</a>
      <a  href="#gioithieu"><i class="fa fa-fw fa-info-circle"></i> Giới thiệu</a>
      <a  href="signup.php" target="_blank"> <i class="fa fa-fw fa-edit"></i> Đăng kí</a>
      <a  href="login.php" target="_blank"><i class="fa fa-fw fa-user-circle"></i> Đăng nhập</a>
      <a href="javascript:void(0);" class="icon" onclick="menuFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </div>
   <!--search-box-->
                      <div id="tracuu" class="row search-container"> 
                        <div class="search-text">
                            <div class="caption">
                              <h2>Giải pháp an toàn tin cậy</h2>
                            </div>
                            <div class="search">
                              <form action="#">
                                <div class="input-form">
                                    <input type="text" class="form-control" size="100" placeholder="Nhập mã vận đơn ">
                                </div>
                                <div class="search-form">
                                  <button type="button" class="btn btn-danger">Tìm kiếm</button>
                                </div>
                              </form>
                            </div>
                          <div class="add-in4">
                            <p>
                              cho mọi đơn hàng của bạn
                            </p>
                          </div>
                        </div>
                      </div>
          <!--phần thông tin-->
          <div class="our-info pt-50 pb-15 ">
            <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="single-info mb-15">
                  <div class="info-icon">
                    <span class="glyphicon glyphicon-phone"></span>   
                  </div>
                  <div class="info-caption">
                    <p>
                        Liên hệ với chúng tôi
                    </p>
                    <span>
                      1234-5678-9011
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="single-info mb-15">
                  <div class="info-icon">
                    <span class="	glyphicon glyphicon-time"></span>  
                  </div>
                  <div class="info-caption">
                    <p>
                      Chủ Nhật: Nghỉ
                    </p>
                    <span>
                      Thứ 2-Thứ 7: 8h00-18h00
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="single-info mb-15">
                  <div class="info-icon">
                    <span class="glyphicon glyphicon-home"></span>  
                  </div>
                  <div class="info-caption">
                    <p>
                        Mỗ Lao, Hà Đông
                    </p>
                    <span>
                    Hà Nội, Việt Nam
                    </span>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
        <!--Services -->
        <div id="dichvu" class=" feature-pd70 bg">
          <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="section-text mb-50">
                      <h2>
                        Dịch vụ nổi bật
                      </h2>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="col-item flip-box">
                      <div class="single-cat text-center mb-50 flip-box-inner">
                        <div class="flip-box-front"> 
                            <div class="cat-icon">
                                <span class="glyphicon glyphicon-send"></span>
                            </div>
                            <div class="cat-cap">
                              <h3>
                                <a href="#">
                                    Chuyển phát nhanh
                                </a>
                              </h3>
                            </div>
                      </div>
                      <div class="flip-box-back">
                        <p>
                          <a href="#">
                            <div class="detail1">
                            <h4>
                                Nhanh-an toàn-chính xác
                              </h4>
                            </div>
                        <div class="detail2">
                              <h5>
                                VCN
                              </h5>
                              <a href="#">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                        </div>
                          </a>
                        </p>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="col-item flip-box">
                      <div class="single-cat text-center mb-50 flip-box-inner">
                        <div class="flip-box-front"> 
                            <div class="cat-icon">
                                <span class="glyphicon glyphicon-piggy-bank"></span>
                            </div>
                            <div class="cat-cap">
                              <h3>
                                <a href="#">
                                  Chuyển phát tiết kiệm
                                </a>
                              </h3>
                            </div>
                      </div>
                      <div class="flip-box-back">
                        <p>
                          <a href="#">
                            <div class="detail1">
                            <h4>
                              An tâm-tiết kiệm-kịp thời
                              </h4>
                            </div>
                        <div class="detail2">
                              <h5>
                                VTK
                              </h5>
                              <a href="#">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                        </div>
                          </a>
                        </p>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="col-item flip-box">
                      <div class="single-cat text-center mb-50 flip-box-inner">
                        <div class="flip-box-front"> 
                            <div class="cat-icon">
                                <span class="glyphicon glyphicon-flash"></span>
                            </div>
                            <div class="cat-cap">
                              <h3>
                                <a href="#">
                                  Chuyển phát hỏa tốc
                                </a>
                              </h3>
                            </div>
                      </div>
                      <div class="flip-box-back">
                        <p>
                          <a href="#">
                            <div class="detail1">
                            <h4>
                              Giao ngay trong 24h
                            </h4>
                            </div>
                        <div class="detail2">
                              <h5>
                                VHT
                              </h5>
                              <a href="#">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                        </div>
                          </a>
                        </p>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="wrap-button">
                  <a href="allservice.php" class="btn btn-info" role="button">Tất cả dịch vụ</a>
                </div> 
          </div>
        </div>
        <!-- Reviews-->
        <div class="section cus-say">
              <h2>Khách hàng nói gì về chúng tôi</h2>
              <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                  <h4>"Sự lựa chọn công ty này là chính xác, tôi hài lòng với kết quả nhận được"<br><span style="font-style:normal;">
                    Chị Phạm Thị Phương, Hà Nôi</span></h4>
                  </div>
                  <div class="item">
                    <h4>"Tôi đã thay đổi nhiều nhà cung cấp dịch vụ vận chuyển cho đến khi biết tới công ty"<br>
                      <span style="font-style:normal;">Anh Nguyễn Văn Nam, TP.Hồ Chí Minh</span></h4>
                  </div>
                  <div class="item">
                    <h4>"Không thể phàn nàn về một dịch vụ nào của công ty"<br>
                      <span style="font-style:normal;">Anh Đinh Công Mạnh, Đà Nẵng</span></h4>
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <!-- introduce-->
        <div id="gioithieu" class="about-us"> 
          <h2>Về chúng tôi</h2>
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-8">
                <h4 style="color:#00ffcbd4;"><strong>Tầm nhìn</strong></h4>
                <p>Trở thành công ty chuyển phát nhanh về công nghệ giao nhận hàng đầu tại khu vực Đông Nam Á.</p>

              </div>
              <div class="col-sm-4">
                <span class="glyphicon glyphicon-eye-open logo"></span>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <span class="glyphicon glyphicon-star-empty logo"></span>
              </div>
              <div class="col-sm-8">
                <h4  style="color:#00ffcbd4;"><strong>Giá trị cốt lõi </strong></h4>
                <p>
                  <strong> Năm giá trị cơ bản của chung tôi là:</strong>  Bổn phận, Chia sẻ, Phục vụ, Trách nhiệm, Hướng đến kết quả<br>
                </p>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-8">
                <h4  style="color:#00ffcbd4;"> <strong>Sứ Mệnh </strong> </h4>
                <p>
                  Mang đến chất lượng dịch vụ giao hàng tốt nhất cho khách hàng cam kết phục vụ một cách trung thực và có trách nhiệm đối với từng đơn hàng của khách hàng.
                </p>
              </div>
              <div class="col-sm-4">
                <span class="	glyphicon glyphicon-road logo"></span>
              </div>
            </div>
          </div>
        </div>
        <!-- form contact-->
        <div  id="lienhe" class="container-fluid contact pd-30">
          <h2 class="text-center">Liên Hệ</h2>
          <div class="row">
            <div class="col-sm-5 co-white">
              <p>Liên hệ với chúng tôi</p>
              <p><span class="glyphicon glyphicon-map-marker"></span> Hà Đông, Hà Nội</p>
              <p><span class="glyphicon glyphicon-phone"></span> 1234-5678-9011</p>
              <p><span class="glyphicon glyphicon-envelope"></span> congtyvanchuyen@email.com</p>
            </div>
            <div class="col-sm-7">
            <form action="addcontact.php" style="display: inline;" method="POST" >
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <input class="form-control" id="name" name="cname" placeholder="Tên" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                      <input class="form-control" id="email" name="cemail" placeholder="Email" type="email" required>
                    </div>
                  </div>
                  <textarea class="form-control" id="comments" name="ccomments" placeholder="bình luận" rows="5"></textarea><br>
                  <div class="row">
                    <div class="col-sm-12 form-group">
                      <button class="btn btn-default pull-left" type="submit" name="contact">Gửi</button>
                    </div>
                  </div>
            </form>
            <?php
    if(!empty(session_get('contact'))){
        echo session_get('contact'); session_delete('contact');
    }
     ?>
            </div>
          </div>
        </div>
          <!-- back to top -->
          <div id="to-top">
            <a id="myBtn" href="#myPage" title="Về đầu trang" >
                <span class="glyphicon glyphicon-chevron-up"></span>
              </a>
          </div>
          <!--footer-->

          <footer class="container">
              <div class="row-footer">
                  <div class="pull-left">
                      <div class="coppyright">
                              Công ty vận chuyển
                      </div>
                      <p>
                        Mỗ Lao-Hà Đông- Hà Nội<br>
                        Giấy CNĐKKD: 0106181807 - Ngày cấp 21/05/2013, đăng ký thay đổi lần 06 ngày 04/04/2021.<br>
                        Cơ quan cấp: Phòng Đăng ký kinh doanh - Sở kế hoạch và đầu tư TP Hà Nội<br>
                      </p>

                  </div>
                  <div class="pull-right">
                    <p>
                      Theo dõi chúng tôi tại:
                    </p>
                    <div class="icon-bar">
                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="google"><i class="fa fa-google"></i></a>
                      <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

              </div>
              <div class="container text-center">
                Bản quyền thuộc về Công ty vận chuyển

              </div>
            </div>

          </footer>
      </div>

</body>
</html>
<script>
  //navabar
    function menuFunction() {
  var x = document.getElementById("mynavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

// animation
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a,a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
})

// for sticky
window.onscroll = function() {stFunction()};
var navbar = document.getElementById("mynavbar");
var sticky = navbar.offsetTop;
function stFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
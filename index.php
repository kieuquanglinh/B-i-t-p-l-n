<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="ico.jpg">
  <title>Hệ Thống Quản Lý Đồ Án Tốt Nghiệp</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">
  <script type="text/javascript" scr="./jquery-3.3.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="./main-jquery-ajax.js"></script>
</head>

<body>
  
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fa d-inline fa-lg fa-bullseye"></i></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-2" href="./index.php">Trang Chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="./dangkydetai.html">Đăng Ký Đề Tài</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="./sinhvien.html">Sinh Viên</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control" type="text">
          <button class="btn btn-link my-2 my-sm-0" type="submit"><i class="fa d-inline fa-lg fa-search text-primary"></i></button>
        </form>
        <div class="nav-item">
        <a href="dangnhap.php" class="nav-link mx-2" style="color: rgba(255, 255, 255, 0.5);">Đăng Nhập</a>
      </div>
      </div>
      </div>
    </nav>
    <div class="h-50 d-flex align-items-center bg-dark">
      <div class="container">
        <div class="row">
          <div class="mx-auto text-center col-md-11" style="  ">
            <h3 class="text-white display-4">Hệ Thống Quản Lý Đồ Án Tốt Nghiệp</h3>
          </div>
        </div>
      </div>
    </div>
  
  <div class="py-5">
    <div class="container">
      <div class="row mb-3">
        <div class="text-center mx-auto p-4 bg-secondary col-lg-6 col-md-10 bg-dark">
          <h2 class="text-white">Giới Thiệu</h2>
          <p class="text-light">Một người sáng tạo luôn bị thôi thúc bởi khát vọng của sự thành công, chứ không phải khát vọng đánh bại người khác</p>
        </div>
      </div>
      <div class="row">
        <div class="p-4 col-lg-4">
          <h4 class="mb-3"><b>Thống Kê Các Đồ Án</b></h4>
          <ul class="">
            <li class="my-1">Khoa CNTT</li>
            <li class="my-1">Khoa Công Trình</li>
            <li class="my-1">Khoa Năng Lượng</li>
            <li class="my-1">Khoa Thủy Văn</li>
          </ul>
        </div>
        <div class="p-md-4 col-lg-8">
          <h4 class="mb-3"><b>Tin Tức Nổi Bật</b></h4>
          <p class="img"><img src="anh1.jpg" alt="" width="600px" ></p>
                  <div class="blockquote-footer">Đội Tuyển OLYMPIC Trường Đại Học Thủy Lợi</div>
                </div>
              </div>
              <div class="carousel-item p-5">
                <div class="blockquote text-muted mb-0 px-2">
                  <p class="mb-0">#2 Blockquoute - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="blockquote-footer">Someone famous in My memories</div>
                </div>
              </div>
              <div class="carousel-item p-5">
                <div class="blockquote text-muted mb-0 px-2">
                  <p class="mb-0">#3 Blockquoute - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  <div class="blockquote-footer">Someone famous in My memories</div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="hospital-title table-title">Thông tin các đề tài của các trường</h4>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Các Trường</th>
                <th scope="col">Khoa CNTT</th>
                <th scope="col">Khoa Công Trình</th>
                <th scope="col">Khoa Năng Lượng</th>
                <th scope="col">Khoa Thủy Văn</th>
                <th scope="col">Liên hệ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="school-name">ĐH Thủy Lợi</th>
                <td>80</td>
                <td>40</td>
                <td>34</td>
                <td>26</td>
                <td>099999999</td>
              </tr>
              <tr>
                <th scope="row" class="school-name">ĐH Xây Dựng</th>
                <td>20</td>
                <td>30</td>
                <td>40</td>
                <td>50</td>
                <td>088888888</td>
              </tr>
              <tr>
                <th scope="row" class="school-name">ĐH Bách Khoa</th>
                <td>10</td>
                <td>20</td>
                <td>30</td>
                <td>40</td>
                <td>0777777777</td>
              </tr>
            </tbody>
          </table>
          <p><a href="#" style="color: white">Chi Tiết >></a></p>
        </div>
         <div class="col-lg-12">
          <h4 class="patient-title table-title" >Đăng kí đề tài </h4>
          <table class="table bg-dark" style="color:bg-dark">
            <thead>
              <tr>
                <th scope="col">Họ Và Tên</th>
                <th scope="col">Thành Phố</th>
                <th scope="col">Trường ĐH</th>
                <th scope="col">Đề Tài</th>
                <th scope="col">Liên hệ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Nguyễn Văn A</th>
                <td>Hà Nội</td>
                <td>ĐH Thủy Lợi</td>
                <td>QL Ngân Hàng</td>
                <td>0123456789</td>
              </tr>
              <tr>
                <th scope="row">Nguyễn Văn C</th>
                <td>Hà Nội</td>
                <td>ĐH Xây Dựng</td>
                <td>QL Tài Nguyên Rừng</td>
                <td>0123456789</td>
              </tr>
              <tr>
                <th scope="row">Nguyễn Thị C</th>
                <td>Nam Định</td>
                <td>ĐH Bách Khoa</td>
                <td>QL Nước</td>
                <td>0123456789</td>
              </tr>
              <tr>
              <th scope="row">Nguyễn Thị D</th>
                <td>Tuyên Quang</td>
                <td>ĐH Bách Khoa</td>
                <td>QL Doanh Nghiệp</td>
                <td>0123456789</td>
            </tbody>
          </table>
          <p><a href="#" style="color: white">Chi Tiết >></a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <div class="p-4 col-lg-4" style="">
          <h4 class="mb-3 text-white">Tìm Kiếm Đề Tài</h4>
          <!-- <form action=""> -->
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Đề Tài</th>
                  <td>
                    <div class="formItem">
                      <select name="" id="searchinfo-bloodgroup">
                        <option value="select" selected="">Chọn đề tài</option>
                        <?php while ($row = mysqli_fetch_assoc($nhommau)) {
                          echo '<option value="' . $row['idMau'] .'">' . $row['tenNhom'] .'</option>';
                        } ?>
                      </select>
                    </div
                  </td>
                </tr>
                <tr>
                  <th scope="row">Tỉnh/Thành</th>
                  <td>
                    <div class="formItem">
                      <select name="searchinfo-city-province" id="searchinfo-city-province">
                        <option value="select">Chọn tỉnh thành</option>
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Quận/Huyện</th>
                  <td>
                    <div class="formItem">
                      <select name="searchinfo-district" id="searchinfo-district">
                        <option value="select">Chọn quận huyện</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <button class="btn btn-success" id="searchBtn" >Tìm Kiếm</button>
          <!-- </form> -->
        </div>
        <div class="col-md-8 align-self-center" style="overflow: scroll; height: 400px">
          <h4 class="mb-3 text-white">Danh sách tìm kiếm</h4>

          <div id="table-data">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Họ Tên</th>
                  <th scope="col">Đề Tài</th>
                  <th scope="col">Thành Phố</th>
                  <th scope="col">Quận Huyện</th>
                  <th scope="col">Liên Hệ</th>
                </tr>
              </thead>
              <p>Chưa có kết quả</p>
              <tbody>
                
              </tbody>
            </table>
          </div>
            
        </div>
      </div>
    </div>
  </div>
  <div class="py-0 pt-1 pb-5">
    <div class="container">
      <div class="sub-title">
        <a href="@">
          <h3 class="mt-2" style="border-top: 1px solid gray">Bạn Đọc</h3>
        </a>
      </div>
      <div class="row">
        <div class="p-4 col-lg-4 col-md-6">
          <h4><b>Bold Heading 4</b></h4>
          <p>Paragraph - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <p>
            <a href="#">Xem tiếp &gt;&gt;</a>
          </p>
        </div>
        <div class="p-4 col-lg-4 col-md-6">
          <h4><b>Bold Heading 4</b></h4>
          <p>Paragraph - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <p>
            <a href="#">Xem tiếp &gt;&gt;</a>
          </p>
        </div>
        <div class="p-4 col-lg-4" style="">
          <h4><b>Bold Heading 4</b></h4>
          <p>Paragraph - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <p contenteditable="true">
            <a href="#">Xem tiếp &gt;&gt;</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-info p-4">
    <div class="container">
      <div class="row">
        <div class="p-0 col-lg-4 col-md-6">
          <!-- <img class="img-fluid" src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDW8nO9JhT_pEjebobq9pgUF2cEp0EUb1I&amp;markers=folsom+Ave+san+francisco&amp;center=folsom+Ave+san+francisco&amp;zoom=16&amp;size=640x450&amp;sensor=false&amp;scale=2"> -->
        </div>
        <div class="col-md-5 align-self-center p-4 offset-md-1">
          <h4>Heading</h4>
          <p class="mb-4 text-primary">795 Folsom Ave, Suite 600 <br>San Francisco, CA 94107 <br> <abbr title="Phone">P:</abbr> (123) 456-7890 </p>
          <div class="row text-center">
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa fa-facebook text-primary fa-2x"></i></a>
            </div>
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa fa-twitter text-primary fa-2x"></i></a>
            </div>
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa fa-instagram text-primary fa-2x"></i></a>
            </div>
            <div class="col-md-2 col-3">
              <a href="#" target="_blank"><i class="fa text-primary fa-2x fa-pinterest-p"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-dark py-3">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-4 col-md-6">
          <p class="text-secondary mb-0">Copyright - Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-lg-4 col-md-6">
          <p class="text-secondary mb-0">2018 - Lorem ipsum dolor sit amet</p>
        </div>
      </div>
    </div>
  </div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>

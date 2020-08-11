<!--
## Design by teamtamweb.com
-->
<html>

<head>
  <title>Register</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- Custom styles for this template -->
  <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  <script>
  function Auth() {


    //var fullname = $('#fullname').val();
    var cid = $('#cid').val();
    // var hn = $('#hn').val();
    if (cid == '' || cid.length < '13') {

      Swal.fire({
        //position: 'top-end',
        icon: 'error',
        title: 'กรุณากรอกเลขบัตรประชาชน',
        showConfirmButton: false,
        timer: 1500
      })

    } else {
      //var senddata = fullname + '-' + cid + '-' + hn;
      var senddata = btoa(cid);
      var URL = 'https://notify-bot.line.me/oauth/authorize?';
      URL += 'response_type=code';
      URL += '&client_id=2NIsPcvdLwRhxoOrdMN9xa'; // LINE service
      URL +=
      '&redirect_uri=https://line-notify.teerasit.com/callback.php'; //ถ้าลงทะเบียนเสร็จแล้ว จะ callback กลับมาหน้านี้
      URL += '&scope=notify';
      URL += '&state=' + senddata; //กำหนดเลขอ้างอิง
      window.location.href = URL;
    }
  }
  </script>
</head>

<body>
  <br>
  <div class="container">
    <!-- Content here -->


    <div class="row">
      <div class="col-sm-12">

        <div class="card">
          <div class="card-header">
            ลงทะเบียนรับการแจ้งเตือน
          </div>
          <div class="card-body">

            <form>

              <div class="form-group">
                <label for="cid">เลขที่บัตรประชาชน 13 หลัก</label>
                <input type="text" class="form-control" id="cid" name="cid" maxlength="13">
              </div>

              <div class="form-group">
                <label for="ref2">เลขอ้างอิง 2 (option)</label>
                <input type="text" class="form-control" id="ref2" name="ref2">
              </div>

              <p class="alert alert-warning" role="alert">
                ** ข้าพเจ้ายินยอมให้ส่งข้อมูลข่าวสารและการแจ้งเตือนผ่านทาง Application LINE
              </p>


              <button type="button" class="btn btn-primary" onclick="Auth();">ยอมรับและลงทะเบียน</button>
            </form>

          </div>
        </div>

        <!-- <button onclick="Auth();">LineNotify</button>-->
      </div>

    </div>

  </div>

  <footer class="footer">
    <div class="container">
      <span style="color: #d8d8d8;">Design by <a href="https://www.teamtamweb.com/" target="_blank"
          style="color: #d8d8d8;">TTW</a></span>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>
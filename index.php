<!DOCTYPE html>
<html lang="en">

<head>
  <title>Covid-19</title>
  <?php include 'link/links.php'; ?>
  <?php include 'css/style.php'; ?>

</head>

<body onload = "fetch()">

  <!-- ++++++++++++++++++++++++++ Navbar +++++++++++++++++++ -->

  <nav class="navbar navbar-dark bg-primary navbar-expand-lg nav_style p-3">
    <a class="navbar-brand pl-5" href="#">Covid-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">

        <li class="nav-item active">
          <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#aboutid">about</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#coronasymptomsid">symptoms</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#prevention">prevention</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#contactid">contact</a>
        </li>

      </ul>
    </div>
  </nav>

  <!-- ////////////////////////////// Main Header \\\\\\\\\\\\\\\\\\\\ -->

  <div class="main_header">
    <div class="row w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="images/eksath.png" width="300" height="300">
        </div>
      </div>

      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Safe & Fight Together Againest Cor<span class="corona_rotate"><img src="images/corona.png"
                alt=""></span>na Virus</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- ******************** Corona Latest Update **************** -->

  <section class="corona_update container-fluid">
    <div class="mb-3">
      <h3 class="text-uppercase text-center">covid-19 udates</h3>
    </div>

    <div class="udates-data d-flex justify-content-around align-items-center">
      <div>
        <h1 class="count" id="totalConform"></h1>
        <p>Passengers screened at airport</p>
      </div>
      <div>
        <h1 class="count" id="totalActive"></h1>
        <p>Active COVID-19 cases*</p>
      </div>
      <div>
        <h1 class="count" id="dischared"></h1>
        <p>Cured/discharged cases</p>
      </div>
      <div>
        <h1 class="count" id="totalDeaths"></h1>
        <p>Death cases</p>
      </div>
    </div>

    <div class="table-responsive">
      <table class = "table table-bordered table-striped text-center" id = "tablevalue">
        <tr>
          <th>Country</th>
          <th>TotalConformed</th>
          <th>TotalRecovered</th>
          <th>TotalDeaths</th>
          <th>NewRecovered</th>
          <th>NewDeaths</th>
        </tr>
      </table>
    </div>

  </section>

  <!-- ******************** About Section ******************** -->

  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb5 mt4">
      <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
      <div class="col-lg-5 col-md-7 col-11 ml-5 about-img ">
        <img src="images/aboutcorona.png" class="img-fluid">
      </div>

      <div class="col-lg-6 col-md-7 col-11 pt-5 ml-3">
        <h2>What is COVID-19 (Corona -Virus)</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos doloremque nostrum aut assumenda ipsa?
          Doloremque neque porro temporibus illum, natus cupiditate. Soluta obcaecati enim quas, sequi, error impedit
          perferendis, magni quod iure rerum provident!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quaerat consectetur recusandae voluptate
          sapiente voluptatem modi cupiditate illum odio!</p>
      </div>

    </div>
  </div>

  <!-- ///////////////// Corona Symptoms \\\\\\\\\\\\\\\ -->

  <div class="container-fluid pt-5 pb-5" id="coronasymptomsid">
    <div class="section_header text-center mb5 mt4">
      <h1>Coronavirus symptoms</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/cough.png" class="img-fluid" width="120" height="120">
            <figcaption>cough</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/runnynose.png" class="img-fluid" width="120" height="120">
            <figcaption>runny nose</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/fever.png" class="img-fluid" width="120" height="120">
            <figcaption>fever</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/cold.png" class="img-fluid" width="120" height="120">
            <figcaption>cold</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/tiredness.png" class="img-fluid" width="120" height="120">
            <figcaption>tiredness</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/difficulty-breathing.png" class="img-fluid" width="120" height="120">
            <figcaption>difficulty breathing (severe casers)</figcaption>
          </figure>
        </div>
      </div>
    </div>

  </div>


  <!-- /////////////////// Prevention Against Coronavirus \\\\\\\ -->
  <div class="container-fluid sub_section pt-5 pb-5" id="prevention">
    <div class="section_header text-center mb5 mt4">
      <h1>6 Steps Prevention Against Coronavirus</h1>
    </div>


    <div class="container">
      <div class="row">


        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/handwash.png" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 text-left">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum deserunt rem est!</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/mask.png" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 text-left">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/quarantine.png" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 text-left">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/home.webp" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 text-left">
              <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/news.png" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 text-left">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, voluptate.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/health.png" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 text-left">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- /////////////////// Contact us \\\\\\\ -->


  <div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb5 mt4">
      <h1>Contact Us ASAP</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-12 offset-lg-2">
          <form action="" method="POST">
            <div class="form-group">
              <label>username</label>
              <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>email</label>
              <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off"
                required>
            </div>

            <div class="form-group">
              <label>mobile</label>
              <input type="number" class="form-control" name="mobile" placeholder="mobile number" autocomplete="off"
                required>
            </div>

            <div class="form-group">
              <label class="block">Slect Symptoms</label>
              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox1" value="cold"
                  name="coronasym[]">
                <label for="customcheckbox1" class="custom-control-label">Cold</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox2" value="fever"
                  name="coronasym[]">
                <label for="customcheckbox2" class="custom-control-label">fever</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox3" value="breath "
                  name="coronasym[]">
                <label for="customcheckbox3" class="custom-control-label">difficulty in breath </label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox4" value="tired"
                  name="coronasym[]">
                <label for="customcheckbox4" class="custom-control-label">feeling weak</label>
              </div>

            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripe how you are feeling</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" ></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- //////////////////// top scroll \\\\\\\\\\\\\\\\ -->

  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
  </div>

  <!-- /////////////////// Footer \\\\\\\\\\\\\\\ -->

  <footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
      <p>Copyright &copy; by Safdar Hussain | All Rights are reserved</p>
    </div>
  </footer>

  <script type="text/javascript">

    // $('.count').counterUp({
    //   delay: 20,
    //   time: 3000

    // })

    mybutton = document.getElementById("myBtn");
    window.onscroll = function () {
      scrollFunction()
    };
    function scrollFunction() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.style.display = "block";
      }

      else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    function fetch() {

      $.get("https://api.covid19api.com/summary",

       function (data){
        let newConform = document.getElementById('totalConform');
        let newactive = document.getElementById('totalActive');
        let dischar= document.getElementById('dischared');
        let totaldth = document.getElementById('totalDeaths');

        let ConformedData = String(data['Global']['TotalConfirmed']);
        let ConformedActive = String(data['Global']['NewConfirmed']);
        let ConformedDisChar = String(data['Global']['TotalRecovered']);
        let ConformedDeath = String(data['Global']['TotalDeaths']);


        newConform.innerHTML = ConformedData;
        newactive.innerHTML = ConformedActive;
        dischar.innerHTML = ConformedDisChar;
        totaldth.innerHTML = ConformedDeath;

        

        let tableValue = document.getElementById('tablevalue');

        // console.log(tableValue);

        for (let i = 1; i <= (data['Countries'].length); i++) {
          let x = tableValue.insertRow();

          x.insertCell(0);
          tableValue.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
          tableValue.rows[i].cells[0].style.background = '#7a4a91';
          tableValue.rows[i].cells[0].style.color = '#fff';

          x.insertCell(1);
          tableValue.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
          tableValue.rows[i].cells[1].style.background = '#4bb7d8'; 

          x.insertCell(2);
          tableValue.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
          tableValue.rows[i].cells[2].style.background = '#4bb7d8';

          x.insertCell(3);
          tableValue.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
          tableValue.rows[i].cells[3].style.background = '#f3Ge23';

          x.insertCell(4);
          tableValue.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewRecovered'];
          tableValue.rows[i].cells[4].style.background = '#4bb7d8';

          x.insertCell(5);
          tableValue.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
          tableValue.rows[i].cells[5].style.background = '#9cc850';
          
        }
       }

      );

    }


  </script>
</body>

</html>



<?php 

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $coronasym = $_POST['coronasym'];
  $msg = $_POST['msg'];

  $chk = "";

  foreach ($coronasym as $chk1) {
    $chk .= $chk1.",";
  }

  $insertquery = "insert into covidtable(username, email, mobile, symptoms, descripe) values('$username', '$email', '$mobile', '$chk', '$msg') ";

  $query = mysqli_query($con, $insertquery);

  if($query){
    ?>
    <script>
        alert("Inserted successful.....");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("No Inserted");
    </script>
    <?php
}

}

?>

 
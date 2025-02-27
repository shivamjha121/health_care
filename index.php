<?php
include("xyz.php");   
$html = file_get_html('https://www.worldometers.info/coronavirus/country/india/');
$html1 = file_get_html('https://www.mygov.in/covid-19');
$html2 = file_get_html('https://www.ndtv.com/coronavirus/india-covid-19-tracker');
$var1=$html->find('.maincounter-number',0)->plaintext;
$var2=$html1->find('.icount',0)->plaintext;
?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="health.css">
    <title>healthcare</title>
       
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: lightgray">
        <div class="container-fluid">
            <img src="pngegg.png" alt="logo" width="80" height="50" class="navbar-brand">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://dshm.delhi.gov.in/mis/(S(xnybs3v2gll5g2fbkufq2m2z))/Private/frmFreeBedMonitoringReport.aspx" target="_blynk" >Seat Availability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#call_container1" tabindex="-1" aria-disabled="true">Helpline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="https://gopaljha11321.github.io/health_contact/" tabindex="-1" aria-disabled="true">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                
            </div>
        </div>
        <button type="button" class="btn btn-danger me-2 mb-2 mb-lg-0" >Login</button>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Battlestation-Delhi slide1.jpg" height="500" width="1400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                   <a href="https://indianhelpline.com/"><button class="btn btn-danger">Emergency</button></a> 
                    <a href="https://www.mygov.in/covid-19"><button class="btn btn-primary">NewsFeed</button></a>
                    <a href="#call_container2"><button class="btn btn-secondary" >Covid Cases</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slide2.png" height="500" width="1400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="slide3.png" height="500" width="1400" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 style="text-align: center;">NEWS <span class="badge bg-secondary my-4">LIVE UPDATE</span></h1>
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Maharashtra's Stricter Unlocking</h3>
                        <div class="mb-1 text-success"></div>
                        <p class="card-text mb-auto">Maharashtra govt has said that shops and other public spaces will
                            now have to close down till 4 pm..</p>
                        <a target="_blank" style="text-decoration: none;"
                            href="https://www.news18.com/news/india/maharashtra-tightens-covid-19-norms-as-new-threat-of-delta-plus-variant-emerges-3891206.html"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="maharastra.jpg" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success"></strong>
                        <h3 class="mb-0">India's Covid-19</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="mb-auto">The new phase of universalisation of vaccination started from June 21, and
                            over 60 lakh vaccine doses were administered on Friday, the report stated.</p>
                        <a target="_blank" style="text-decoration: none;"
                            href="https://www.news18.com/news/india/indias-covid-19-vaccination-coverage-crosses-31-crore-60-lakh-doses-administered-in-a-day-3892925.html"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="india.jpg" alt="...">

                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Scientist Finds Early Virus Sequences</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto">Now, by rooting through files stored on Google Cloud, a researcher
                            in Seattle reports that he has recovered 13 of those original sequences — intriguing new
                            information for discerning when and how the virus may have spilled over from a bat or
                            another animal into humans</p>
                        <a target="_blank" style="text-decoration: none;"
                            href="https://www.news18.com/news/world/scientist-finds-early-virus-sequences-that-were-mysteriously-deleted-from-early-covid-cases-in-china-3888161.html"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250"
                            src="https://source.unsplash.com/200x250/?covid vaccine " alt="...">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success"></strong>
                        <h3 class="mb-0">World After COVID-19</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="mb-auto">Staff at the Mediamatic restaurant serve food to volunteers seated in small
                            glasshouses during a try-out of a setup which respects social distancing abiding by
                            government directives to combat the spread of the COVID-19 coronavirus in Amsterdam,
                            Netherlands. Restaurants around the world try to lure back clientele while keeping them
                            virus-free.</p>
                        <a target="_blank" style="text-decoration: none;"
                            href="https://www.news18.com/photogallery/lifestyle/world-after-covid-19-discover-how-the-future-of-dining-in-restaurants-will-be-2641257.html"
                            class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250"
                            src="https://source.unsplash.com/200x250/?covid rules" alt="..">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
          
            <div class="container">
                <a id="call_container1"><div class="container1"></a>
                    <div id="num">Covid Helpline Numbers</div>
                    <table   >
                        <tr >
                            <td class="fonth">Corona(Covid 19) Helpline:</td>
                            <td>011-23978046</td>
                        </tr>
                        <tr>
                            <td class="fonth">Covid Control Room:</td>
                            <td>011-22391014,&nbsp 22302441,&nbsp 22304568, 22300012</td>
                        </tr>
                        <tr>
                            <td class="fonth">Delhi Covid Helpline: </td>
                            <td>1031</td>
                        </tr>
                        <tr>
                            <td class="fonth"> Covid Helpline For Positive Patients:</td>
                            <td> 1800-111-747</td>
                        </tr>
                        <tr>
                            <td class="fonth">
                                Centralized Helpline Number:
                            </td>
                            <td>112</td>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
      </div>
<div class="card">
    <div class="card-body">      
<div class="container">
    <a id="call_container2"></a><div align ="center" class="container2">
        <div id="font3">Covid-19 Status</div>
        <div class="confiremed">Confirmed<br><b><div id="confirmed">3,02,81,825</div></b></div>
        <div class="active">Active<br><b><div id="active">5,81,522</div></b></div>
        <div class="recovered">Recovered<br><b><div id="recovered">2,92,43,055</div></b></div>
        <div class="deceased">Deceased<br><b><div id="deceased">3,95,77</div></b></div>
    </div>
</div>
    </div>
  </div>
  
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script>
            <?php 
            echo "var xyz1 = '$var1';";
            echo "var xyz2 = '$var2';";
            ?>
            var con =document.getElementById('confirmed');
            console.log(con);
            con.innerHTML=xyz1;
            var con1 =document.getElementById('active');
            console.log(con1);
            con1.innerHTML=xyz2;
        </script>

</body>

</html>
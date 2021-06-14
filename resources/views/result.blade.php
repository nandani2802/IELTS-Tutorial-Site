@extends('layouts.app')

@section('content')

<style type="text/css">
  tspan{
    background-color: red;
  }
</style>

<main id="main">

    <section id="pricing" class="section-bg" >
      <div class="container" >        
       
        <div class="row">
          <div class="col-lg-12 col-md-12">
             <!--<div class="box featured wow fadeInLeft" >-->
              <!--@if(\Session::has('success'))
              <div class="alert alert-success">
                  <p>{{\Session::get('success')}}</p>
              </div>
              @endif-->
              <center>
              @if(count($data)>0)
              @foreach($data as $row)
                <div class="card" style="width:450px;padding: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border:2px solid #1de099">
                   <!-- <h3 style="padding: 20px;background: linear-gradient(45deg, #1de099, #1dc8cd);color: white">Report Card</h3>
                    <img class="card-img-bottom" src="img/result4.jpg" alt="Card image" width="10" height="300">-->

                    <div class="card-body" style="text-align: left">
                      <h5 class="card-title" style="font-size: 30px;border-bottom:2px solid #1de099"><img src="img/logo1.png" height="50" width="50" style="margin:10px">STUDY OVERSEAS</h5>
                      <br>
                      <p style="font-family:Roboto;padding:10px;box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);color: #515A5A"><strong>Candidate Name : </strong>  {{ Auth::user()->name }}</p>
                      <!--<h6 class="card-text">Lexical Resource: {{$row->LR}}</h6>
                      <h6 class="card-text">Grammar: {{$row->GRA}}</h6>-->
                      <div id="barchart_material" style="padding-top: 30px; padding: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div>
                      <br>
                      <a href="{{ route('index') }}" class="btn btn-primary btn-block">Back To Home</a>
                  </div>
                  </div>
                @endforeach
                @else
                <div class="row">
                <div class="col-md-12 alert alert-danger" style="height: 50px">
                  <img src="img/alert.png" height="20" width="20"><p style="margin-left:10px;display: inline;text-align: left;color: #721c24">You have not appeared any examination.</p>
                </div>  
              </div>
                @endif
                </center>
              </div>
           <!-- </div>-->
          </div>
        </div>
        
      </div>
      
    </section><!-- #pricing -->
   
</main>

@if (count($data) > 0)

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Grade Points'],
          ['LR', <?php echo $data[0]->LR; ?>],
          ['CC', <?php echo $data[0]->CC; ?>],
          ['TA', <?php echo $data[0]->QA; ?>],
          ['GRA', <?php echo $data[0]->GRA; ?>]
        ]);
        var options = {
          chart: {
            title: 'Student Performance',
            subtitle: 'LR,CC,TA and GRA - Writing Task 2',
          },
          // Cohesion & Coherence,Task Achivement and Grammar - Writing Task 2
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

@endif

@endsection
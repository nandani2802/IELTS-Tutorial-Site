@extends('layouts.app')

@section('content')


<main id="main">

    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Model Answers</h3>
          <span class="section-divider"></span>
         
        </div>



        @if(count($data)>0)
        
        <?php 
        $i=1;
        ?>

        @foreach($data as $row)
        <div class="container">
          <button type="button" class="accordion" data-toggle="modal" data-target="#myModal<?php echo $i;?>">{{$row->taskQue}}</button>

          
          <div class="modal fade" id='myModal<?php echo $i;?>' role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                  <h5 style="color: #1dc8cd" class="modal-title">{{$row->taskQue}}</h5>
                </div>
                <div class="modal-body">
                  <p>{{$row->taskAns}}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>

        <?php 
          $i++;
        ?>

        @endforeach
        @endif


       <!-- @if(count($data)>0)
        @foreach($data as $row)
        <button class="accordion" style="margin:10px" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">{{$row->taskQue}}</button>
        <div class="panel">

          <div class="col-md-12"  style="border:1.5px solid #1de099;padding:20px;margin: 5px;background:white;border-radius:3px">
                <p style="color:gray;font-size: 15px" >{{$row->taskAns}}</p>
                   
          </div>
        </div>
        @endforeach
        @endif
        <div class="alert alert-info" style="text-align: left;margin:30px" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
              <strong>Notes:</strong>
              <br>
              <pre>Click on question to show answer.</pre>
        </div>
        </div>
      </div>
    </section> -->

</main>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

@endsection
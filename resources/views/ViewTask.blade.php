@extends('layouts.app')

@section('content')
<main id="main"> 
    <section id="pricing" class="section-bg" style="background-color: #fff" >
      <div class="container">
        
        <!--<div class="section-header">
          <h3 class="section-title">Heading</h3>
          <span class="section-divider"></span>
        </div>-->

        <div class="row" style="padding: 50px">
            @if(count($data)>0)
            <?php
                $i=1;
             ?>
            @foreach($data as $row)
            
            <div class="col-md-12">
                <div data-aos="fade-up" data-aos-duration="1000">
                <h3 style="color: black">{{$row->title}}</h3>
                <p style="margin:5px;color: gray">{{$row->introduction}}<br></p><br>
                </div>

                <div style="background:#F4F7FA;padding: 50px" data-aos="fade-up" data-aos-duration="1000">
                    
                <div style="font-size:17px;color: #0B4680" id="check<?php echo $i; ?>">
                    <!-- {{$row->question}} -->
                </div>
                <!-- <p>{{$row->image}}</p> -->
                @if($row->image != "")
                <center>
                <img src="../storage/app/public/{{$row->image}}" height="400" width="100%"></center>
                <br><br>
                @endif

                @if($row->audio_file != "")
                <center>
                    <?php
                        $myaudio = JSON_decode($row->audio_file);
                      ?>
                    <audio width="100%" height="400" controls>   

                        <source src="../storage/app/public/{{$myaudio[0]->download_link}}" type="video/mp4">
                    </audio>
                </center>
                @endif

                <div class="answer" style="color:#3B3C3D">{{$row->answer}}</div>
               
                </div>

                <br><br>
                <div data-aos="fade-up" data-aos-duration="1000">
                <!--<h3 style="color: black">Bar graph tutorial</h3><br>-->
                @if($row->video != "")
                <center>
                    <?php
                        $myvideo = JSON_decode($row->video);
                      ?>
                    <video width="100%" height="400" controls>   

                        <source src="../storage/app/public/{{$myvideo[0]->download_link}}" type="video/mp4">
                    </video>
                </center>
                @endif
                </div>
                
            </div>
            <?php 
                $i++;
            ?>
            @endforeach
            @endif
        </div>

      </div>
    </section><!-- #pricing -->
</main>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

<?php 
if(count($data2)>0){
            
                $i=1;
                
                foreach($data2 as $row){
                    $em = $row->question;
                    $em2 = $row->answer;
                    // $em = "<h1>Nandini</h1>";
                    echo '<script type="text/javascript">
                        $(document).ready(function(){
                            $("#check'.$i.'").html("'.$em.'");
                            $("#check'.$i.'").siblings(".answer").html("'.$em2.'");
                        });
                    </script>';
                    $i++;
                    
                }
            
}

?>

@endsection

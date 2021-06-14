@extends('layouts.app')

@section('content')


<main id="main">

    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Today's Word List</h3>
          <span class="section-divider"></span>
         
        </div>

        <div class="container">
            <center>
            <div class="box featured wow fadeInLeft" style="text-align: left">
              
               @if(count($vocab)>0)

                <div class="row">
                @foreach($vocab as $row)
               <div class="col-md-3" style="margin:0px 30px;">
                <div class="flip-card" style="padding: 10px;height: 400px;width: 300px;border:none" >
                  <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/vocab14.gif');border-radius: 1px;">
                      <h2 style="margin-top: 150px;color: white;font-family:Montserrat;text-shadow: 1px 2px #000;">{{$row->word}}</h2>
                    <!--<img src="img/about2.jpg" alt="Avatar" style="width:300px;height:100%;">-->
                    </div>
                    <div class="flip-card-back" style="background:white;border-radius: 1px;border:2px solid #1dc8cd; padding-bottom:5px; overflow: scroll; ">

                      <h3 style="background-color: #1dc8cd;color: white;padding:15px;font-family:Montserrat;">Related Word:</h3>
                      <p style="color: black;font-family:Bahnschrift">
                        <?php
                        $myArray=preg_split("/\,/", $row->synonyms);
                        
                        for($i=0; $i<count($myArray); $i++){
                          echo $myArray[$i];
                          echo "<br>";
                        }
                      ?>
                        </p>
                      
                      <br>
                    </div>
                  </div>
                </div>
                <br>
                </div>
                  @endforeach
                </div>
                @else
                <center>
                <h3 style="display:inline;">Coming Soon<img src="img/loading.gif" height="50" width="70" style="margin-top: 20px"></h3><br>
                <img src="img/Gvocab2.gif" height="250" width="250" style="margin-top: ;margin-left:-2px">
                </center>
                @endif
          </div>
          </center>
        </div>
        </div>
          </div>
        </div>     
       </div>
    </section><!-- #pricing -->


</main>

@endsection
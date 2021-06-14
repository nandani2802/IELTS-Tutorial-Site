@extends('layouts.app')

@section('content')

<main id="main"> 

    <section id="pricing" class="section-bg" style="background-color: #fff;padding: 20px"	>
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Writing Task 2</h3>
          
          <span class="section-divider"></span>
         
        </div>
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3 style="color: black">Writing Task 2 - Essay Writing</h3>
        		<p style="margin:5px;color: gray">If you are writing the Academic test, you will be presented with an idea or premise about a subject and you will be asked to respond in some way to it. Topics can include a wide range of commonly discussed subjects such as the environment, immigration, technology, or culture.
                 </p><br>
                <p style="margin:5px;color: gray">Length: Write at least 250 words.</p>
                <p style="margin:5px;color: gray">Time: You should spend about 40 minutes on this task.</p>
        	</div>
        </div>
      </div>
    </section><!-- #pricing -->

    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3>Types Of Essays</h3>
                <ul type="none"><br>
                    @if(count($data)>0)
                    @foreach($data as $row)
                    <li><a href="viewtask?task=<?php echo strtoupper($row->types); ?>" style="color: #fff"><img src="img/report1.png" height="18" width="18" style="margin-top:-5px"> <?php echo strtoupper($row->types); ?></a></li><br>
                     @endforeach
                    @endif
                </ul>

        	</div>
        </div>
      </div>
      
    </section><!-- #pricing -->

     <section id="" class="section-bg" style="background-color:white;">
      <div class="container">
        <div class="row" style="padding: 50px">
            <div class="col-md-12">
                <h3 style="color: black">IELTS Writing Task 2 Tips (General Training and Academic)</h3>
                <p>You will improve your score if you:</p>
                <ol>
                    <li>Make sure your ideas are relevant. Understand exactly what the topic is and what you are supposed to write about it. Turn the prompt into a question or questions so you can see how many parts there are to address.</li><br>
                    <li>Plan your essay. Brainstorm and then draw a quick outline jotting down some supporting ideas before you write.</li><br>
                    <li>Use the proper essay structure and a range of linking words to connect and sequence your ideas. If your reasoning is easy to follow, you will score higher. This is why planning helps (see 2 above).</li><br>
                    <li>Leave time to check your work. Know the errors that you commonly make (many people forget articles) and scan your writing to make final corrections and additions.</li>
                </ol>
            </div>
        </div>
      </div>
      
    </section><!-- #pricing -->



    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 30px">
            <div class="col-md-5"><img src="img/W2.png" height="400" width="400" style="padding: 10px"></div>
            <div class="col-md-2"></div>
            <div class="col-md-5"><img src="img/W21.png" height="400" width="400" style="padding: 10px"></div>
        </div>
      </div>
      
    </section><!-- #pricing -->

    
</main>

<style type="text/css">
    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

@endsection
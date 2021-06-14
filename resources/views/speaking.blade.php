@extends('layouts.app')

@section('content')

<main id="main">
    
    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Speaking</h3>
          
          <span class="section-divider"></span>
         
        </div>
        <h3 style="color: black">IELTS Speaking Overview</h3>
                <p style="margin:5px;color: gray">The Speaking test is a short face to face interview with an examiner that lasts between 11 and 14 minutes.
                </p>
                <p style="margin:5px;color: gray">There are three parts to complete and they become progressively more challenging.</p><br>
                <h3 style="color: black">IELTS Speaking Tips</h3>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Be fluent and liberated<i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Speak fluently and spontaneously. You will gain more points. Don't worry too much about using clever vocabulary, it's more important to be fluent. But also don't speak too quick and mind your grammar. You should find a "healthy balance" between speaking too quickly and making long pauses.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Practise answering sample questions <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Typically, you will be asked about everyday topics, such as work, studies, sport, family and so on. So you should try answering IELTS Speaking questions before the exam. You will be surprised how simple they are! You just need to learn appropriate vocabulary and understand what answers you will give.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Ask the question again if you need to<i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Don't be shy, if you want to clarify something. You will not lose points for asking the examiner.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Be emotional !<i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Speak with emotions. Nothing separates the experienced speaker from beginners as tone of the speech. Express your feelings like you would do using your native language.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Extend your speech<i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                Try to speak at least more than the examiner. If you are asked a question using one sentence, respond with two or more. And never give short, uncommunicative replies:
                            <br><br>
                            Examiner: Do you do any sport?
                            You: No, I don't like sports... [Don't stop there!] I'm not a very active person and I've never liked P.E. in school. But I like playing intellectual games instead. For example, I find chess very interesting.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed"> Be coherent<i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Use linking words and structures. Words and phrases like however, nevertheless, all in all, moreover will enrich your speech.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- #faq --> 

    
    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3>IELTS Speaking Section</h3><br>
        		<ul style="color: white" type="none">
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

</main>

	
@endsection
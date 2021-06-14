@extends('layouts.app')

@section('content')

<main id="main"> 

    <section id="pricing" class="section-bg" style="background-color: #fff;padding: 20px"	>
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Writing Task 1</h3>
          
          <span class="section-divider"></span>
         
        </div>
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3 style="color: black">Writing Task 1 - Letter Writing</h3>
        		<p style="margin:5px;color: gray">Here you will find IELTS Writing Task 1 Samples for a variety of common tasks that appear in the writing exam.
                The model answers all have tips and strategies for how you may approach the question and comments on the sample answer.
                It's a great way to help you to prepare for the test. </p><br>
                <p style="margin:5px;color: gray">Length: Write at least 150 words.</p>
                <p style="margin:5px;color: gray">Time: You should spend about 20 minutes on this task.</p>
        	</div>
        </div>
      </div>
    </section><!-- #pricing -->

    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3>Writing a short letter for a specific purpose:</h3>
        		<!--<p>You will have to read three different passages and answer a series of questions.</p>-->
        		<ul style="color: white">
        			<li>Task 1 in the General Training Writing section is a letter of correspondence where you demonstrate your ability to communicate using English letter-writing conventions.</li><br>
        			<li>You will be given a common, everyday situation such as writing to apologize for missing a friend’s party, or complaining to a company about bad service, writing to give advice to a friend about where to go on holiday, or writing to express your interest in a new job.</li><br>
                    <li>In addition to being given the situation, three bullet points will outline exactly what information you need to include in your letter. You might, for example, have to describe details, give reasons, express likes and dislikes, or make suggestions or recommendations.</li><br>
                    <li>You will need to choose and use the correct tone in your letter. Tone is the way you communicate with people that shows the kind of relationship you have with them. In letters it is clearly indicated by a proper salutation and closing and it should also be conveyed by your choice of words or phrasing as well as the kind and amount of details you include.</li><br>
                    <li>Different relationships require different levels of respect which is probably true in your language as well. IELTS letters are usually either formal or informal in tone. Generally, if the letter is to friends, people you know well, or family, and the reason for writing is positive, the tone is informal. Letters to everyone else and for all complaints or negative messages, should be more formal.</li>
        		</ul>
        	</div>
        </div>

        


      </div>
      
    </section><!-- #pricing -->



    <section id="pricing" class="section-bg" style="background-color: #fff;padding-top: 10px"	>
      <div class="container">
        <div class="row" style="padding: 50px">
            <div class="col-md-12">
                <h3 style="color: black">Writing format</h3>
                <ul style="color:gray">
                    <li>The letter always starts with the salutation “Dear . . .”, on a line by itself, next to the left margin of the page.</li><br>
                    <li>Indent the first line of each paragraph or leave an empty line before beginning a new one.</li> <br>
                    <li>The first paragraph should introduce the situation and reason for writing. The purpose of the letter must be clear from beginning to end.</li> <br>
                    <li>The body of the response can be three or more paragraphs, depending on the amount of detail you have time to include. A paragraph to address each of the bullets is often enough.</li> <br>
                    <li>The final paragraph is usually a call to action that relates to the purpose of the letter. For example, the letter to the friend about taking care of the house and pet might finish by telling the friend what to do if he or she has any other questions or concerns about how to care for the pet or house and thanking him or her.</li> <br>
                    <li>The end of the letter is signalled by a closing (Yours faithfully, or Warm regards, for example) that is written next to the left margin on a line by itself and your signature is written under it.</li><br>
                    <li>Note that paragraphs in letters are not like essay paragraphs. They can be one or two sentences long about a single subject or topic that is different from the paragraph before and after.</li>
                </ul>
            </div>
            <div class="col-md-12" style="margin-top: 20px">
                <h3 style="color: black">Tips</h3>
                <p>You will improve your score if you:</p>
                <ol style="color:gray">
                    <li>Use letter-writing form and conventions such as proper salutations and closings</li><br>
                    <li>Respond to the bullet points completely. For example, give more than one reason when you are asked to give reasons (plural).</li><br>
                    <li>Include only relevant and correct information. For example, if the bullet asks you to describe other household duties and instead you describe what to do in an emergency, you will miss one of the task requirements and lower your score.</li>
                </ol>
                
                
            </div>
        	
        </div>
      </div>
      
    </section><!-- #pricing -->




    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
                <h3 >Types Of Letters</h3>
                <ul type="none"><br>
                    @if(count($data)>0)
                    @foreach($data as $row)
                    <li><a href="viewtask?task=<?php echo strtoupper($row->types); ?>" style="color: #fff"><img src="img/report1.png" height="18" width="18" style="margin-top:-5px"> <?php echo strtoupper($row->types); ?></a></li><br>
                     @endforeach
                    @endif  
                </ul>
                <!--<video width="600" height="400" controls>   
                    <source src="video/listeningTips.mp4" type="video/mp4">
                </video>-->
            </div>
        </div>
      </div>
      
    </section><!-- #pricing -->
   


   
</main>

	
@endsection
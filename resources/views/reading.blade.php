@extends('layouts.app')

@section('content')

<main id="main"> 

    <section id="pricing" class="section-bg" style="background-color: #fff"	>
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Reading</h3>
          <span class="section-divider"></span>
         
        </div>
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3 style="color: black">What is IELTS reading section all about ?</h3>
        		<p style="margin:5px;color: gray">IELTS test assesses reading skill. This skill is evaluated based on how well you can read and understand the general sense of a passage, main ideas, details, understand inferences and implied meaning. The test is also assessed based on how well you can recognize a writer s opinion, attitude and purpose, follow the development of an argument and vocabulary. You will have to read three different passages and answer a series of questions. The passages that you read will increase in the level of difficulty as you go through the test. The content of the reading test is entirely different for IELTS Academic and IELTS General Training. The reading test is completed along with listening and writing test on the same day, with no breaks.</p>
        	</div>
        </div>




      </div>
      
    </section><!-- #pricing -->

    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3>IELTS Reading Test Format</h3>
        		<p>You will have to read three different passages and answer a series of questions.</p>
        		<ul style="color: white">
        			<li>IELTS Academic test includes three long passages. These are taken from books, journals, magazines and newspapers. The information ranges from descriptive and factual to discursive and analytical. These texts have been selected for a non-specialist audience but are appropriate for people entering university courses or seeking professional registration. </li><br>
        			<li>IELTS General Training test includes three passages with tasks. The test consists of extracts from books, magazines, newspapers, notices, advertisements, company handbooks and guidelines. These are materials that you're likely to come across on a daily basis in an English speaking environment. This test lasts for 60 minutes.</li>
        		</ul>
        	</div>
        </div>

        


      </div>
      
    </section><!-- #pricing -->



    <section id="pricing" class="section-bg" style="background-color: #fff"	>
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3 style="color: black">IELTS Reading Tips</h3>
        		<ol style="color: gray;margin: 10px"><br>
        			<li>Don't read the whole passage as the time provided to you is limited.</li><br>
        			<li>Don't extend the time spent on one answer. Move to the next one, once you have answered. Do the same even if you don t know the answer to the question.</li><br>
        			<li>Don't try to segregate answers for every question. Some questions will be difficult while others will be easy. Try to work as per your strengths and weaknesses.</li><br>
        			<li>Divide the time for attempting the passage based questions. Assign 20 minutes for each reading. Time can be increased or decreased according to the complexity level of a passage.</li><br>
        			<li>Refrain from spending more than 25-30 minutes on a single passage. It is advisable not to procrastinate even for a minute while attempting the passage.</li><br>
        			<li>Each passage will have three to four different types of questions such as -- matching the headings, true or false, yes or no questions, matching paragraph information, summary completion, sentence completion, multiple choice, list selection, categorization questions, matching sentences endings, table completion, choose a title, flowchart and diagram completion and short answer questions.</li><br>
        			<li>Even if you have missed out an answer, try remembering any data that you can.</li><br>
        			
        		</ol>
        		<!--<video width="600" height="400" controls>	
        			<source src="video/listeningTips.mp4" type="video/mp4">
        		</video>-->
        	</div>
        </div>
      </div>
      
    </section><!-- #pricing -->




    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
        		<h3>How to prepare for IELTS Reading?</h3>
        		<p>Below are the eight main things that you need to practice while reading -- practice IELTS reading test which is available online.</p>
        		<ul style="color: white">
        			<li>Develop strategies - For each type of question -- there are about 14 different sub-types of questions. Practice a particular type of question and develop skills to tackle each sub-type.</li><br>
        			<li>Skimming and scanning - While reading, skim the passage to get a general idea of the content. Practice underlining essential words when you're reading. This will help you later when you're answering the questions.</li><br>
        			<li>Develop your speed reading skills - There is a time limit for the reading test. You have to read the passages and answer the questions within the given time. Practice developing your speed reading skills so that you can read quickly and scan the information.</li><br>
        			<li>Develop your vocabulary - Learn when you can and cannot use the words.</li><br>
        			<li>Keywords - Each question has keywords that help you locate information in the passages. Learn to spot these keywords and try to paraphrase.</li><br>
        			<li>Work on your grammar - Certain question type requires grammatically correct sentences. So work on your grammar.</li><br>
                    <li>Get used to difficult passages - Read newspapers, journals etc. and get used to difficult passages.</li><br>
                    <li>Understand the test format - The first two passages for IELTS general training are different from IELTS academic, but the third passage is similar.</li><br>
        		</ul>
        	</div>
        </div>
      </div>
      
    </section><!-- #pricing -->



    <section id="pricing" class="section-bg" style="background-color: #fff" >
      <div class="container">
        <div class="row" style="padding: 50px">
            <div class="col-md-12">
                <h3 style="color: black">Types of reading questions</h3><br>
                <ul style="color: white" type="none">
                    @if(count($data)>0)
                    @foreach($data as $row)
                    <li><a href="viewtask?task=<?php echo strtoupper($row->types); ?>" style="color:#424949"><img src="img/report2.png" height="18" width="18" style="margin-top:-5px"> <?php echo strtoupper($row->types); ?></a></li><br>
                     @endforeach
                    @endif
                </ul>
            </div>
        </div>
      </div>
      
    </section><!-- #pricing -->
   
</main>

	
@endsection
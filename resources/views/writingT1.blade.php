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
        		<h3 style="color: black">Writing Task 1 - Report Writing</h3>
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
        		<h3>Summarizing facts or figures from graphic information</h3>
        		<!--<p>You will have to read three different passages and answer a series of questions.</p>-->
        		<ul style="color: white">
        			<li>If you are writing the Academic test, your first job may be to compose a report identifying the most important and relevant information and trends using the facts or figures presented in a chart, graph, tables or a combination of such graphics.</li><br>
        			<li>It is also possible that you will instead be given a diagram of a machine, device or process and be required to explain how it works.</li><br>
                    <li>Other graphics that can sometimes appear on the test are two maps or structural drawings of an area from different times showing changes that have occurred. You will need to summarize the major changes or differences between them.</li><br>
                    <li>The key to responding successfully to any of these task one visuals is to show that you understand the big picture by identifying the main trends, major parts or stages and/or important differences that are evident in the graphic. So, rather than mechanically describing all the data, select and report on the most important and the most relevant aspects that appear.</li><br>
                    <li>As you can probably guess, there are specific kinds of details you should be looking for in the different graphics that appear on the test. Here is a more detailed breakdown of question types with some tips for how to examine and complete each of them.</li>
        		</ul>
        	</div>
        </div>
      </div>
      
    </section><!-- #pricing -->



    <section id="pricing" class="section-bg" style="background-color: #fff"	>
      <div class="container">
        <div class="row" style="padding: 50px">
            <div class="col-md-12">
                <h3 style="color: black">Writing format</h3>
                <p>An efficient and fast way to organize the report is into three main parts - an opening statement, overview and detail paragraphs:</p>
                <ul style="color:gray">
                    <li>The <strong>opening statement</strong> is your first paragraph where you state exactly what is being illustrated or compared in the graph, chart, table, diagram or map. You can use the prompt in combination with the graphic but write this in your own words.</li><br>
                    <li>The <strong>overview</strong> outlines the important and relevant information and trends that are evident in the graphic. Think of the big picture here. This is a general summary of what can be taken away from what you see. Details will follow.</li><br>
                    <li>In the <strong>detail paragraphs</strong> you logically divide the information so that the trends you identified in the overview can be clearly seen. You must include specifics here (dates, numbers, percentages, measurements, etc.). Try to use logic when you organize these paragraphs. Using the sample graphics above you could divide the details for each example into two paragraphs as follows: the island before changes and then after, the production of cement and then concrete, the trends for men in poverty and then women, the highest energy consumption fuels and then the lower ones..</li><br>
                    
                </ul>
            </div>
            <div class="col-md-12">
                <h3 style="color: black">Tips</h3>
                <p>You will improve your score if you:</p>
                <ul style="color:gray">
                    <li>1. Write an overview.</li><br>
                    <li>2. Use data/measurable/specific details when clarifying the important trends.</li><br>
                    <li>3. Include all of the key features.</li><br>
                    <li>4. Write only about what you see and DO NOT add any additional information that you may have about the subject that is not apparent in the graphic. So, for example, it would be a mistake to explain why you believe more women are in poverty when writing about the graph given above.</li><br>
                    <li>5. Use the correct format (NOT using point form, bullets or an essay style). It is expected that you will organize the summary in a way similar to the format given above.</li>
                </ul>
            </div>
        	
        </div>
      </div>
      
    </section><!-- #pricing -->




    <section id="" class="section-bg" style="background-color: #12D993;color: white">
      <div class="container">
        <div class="row" style="padding: 50px">
        	<div class="col-md-12">
                <h3 >Types Of Reports</h3>
                <ul type="none"><br>
                    @if(count($data)>0)
                    @foreach($data as $row)
                    <li><a href="viewtask?task=<?php echo ($row->types); ?>" style="color: #fff"><img src="img/report1.png" height="18" width="18" style="margin-top:-5px"> <?php echo strtoupper($row->types); ?></a></li><br>
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
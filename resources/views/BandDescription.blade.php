@extends('layouts.app')

@section('content')
<?php 
    error_reporting(0);
    $Lscore = $_GET['Lscore'];
    $print = "0";
    $value1 = "0";
    $oband = "0";
    $radiovalue=$_GET['TOT'];
    $Rscore = $_GET['Rscore'];
    $LOtxt = $_GET['LOtxt'];
    $ROtxt = $_GET['ROtxt'];
    $SOtxt = $_GET['SOtxt'];
    $WOtxt = $_GET['WOtxt'];

    //code of Listening calculator
    if($_GET['Lcalculate'])
    {

      if(is_numeric($Lscore))
      {
        if($Lscore<=40 && $Lscore>=0)
        {
        if($Lscore == "11" || $Lscore == "12")
        {
          $print ="4.0";
        }
        elseif ($Lscore >= "13" && $Lscore <="15") {
          $print ="4.5";
        }
        elseif ($Lscore >= "16" && $Lscore <="17") {
          $print ="5.0";
        }
        elseif ($Lscore >= "18" && $Lscore <="22") {
          $print ="5.5";
        }
        elseif ($Lscore >= "23" && $Lscore <="25") {
          $print ="6.0";
        }
        elseif ($Lscore >= "26" && $Lscore <="29") {
          $print ="6.5";
        }
        elseif ($Lscore >= "30" && $Lscore <="31") {
          $print ="7.0";
        }
        elseif ($Lscore >= "32" && $Lscore <="34") {
          $print ="7.5";
        }
        elseif ($Lscore >= "35" && $Lscore <="36") {
          $print ="8.0";
        }
        elseif ($Lscore >= "37" && $Lscore <="38") {
          $print ="8.5";
        }
        elseif ($Lscore >= "39" && $Lscore <="40") {
          $print ="9.0";
        }
        }
        else
        {
          $error1 = "*Enter value between 0-40 only.";
        }
      }
      else
      {
        $error1 = "*Enter value between 0-40 only.";
      }
    }

    //code of Reading Calcuator

    if($_GET['Rcalculate'])
    {
      if($radiovalue=="Academic")
      {
        if(is_numeric($Rscore))
        {
          if($Rscore<=40 && $Rscore>=0)
          {
            if($Rscore == "5" || $Rscore == "4")
            {
              $value1 ="2.5";
            }
            else if($Rscore == "6" || $Rscore == "7")
            {
              $value1 ="3.0";
            }
            else if($Rscore == "8" || $Rscore == "9")
            {
              $value1 ="3.5";
            }
            elseif ($Rscore >= "10" && $Rscore <="12") {
              $value1 ="4.0";
            }
            else if($Rscore == "13" || $Rscore == "14")
            {
              $value1 ="4.5";
            }
            elseif ($Rscore >= "15" && $Rscore <="18") {
              $value1 ="5.0";
            }
            elseif ($Rscore >= "19" && $Rscore <="22") {
              $value1 ="5.5";
            }
            elseif ($Rscore >= "23" && $Rscore <="26") {
              $value1 ="6.0";
            }
            elseif ($Rscore >= "27" && $Rscore <="29") {
              $value1 ="6.5";
            }
            elseif ($Rscore >= "30" && $Rscore <="32") {
              $value1 ="7.0";
            }
            else if($Rscore == "33" || $Rscore == "34")
            {
              $value1 ="7.5";
            }
            else if($Rscore == "35" || $Rscore == "36")
            {
              $value1 ="8.0";
            }
            else if($Rscore == "37" || $Rscore == "38")
            {
              $value1 ="8.5";
            }
            else if($Rscore == "39" || $Rscore == "40")
            {
              $value1 ="9.0";
            }
          }
          else
          {
            $error2 = "*Enter value between 0-40 only.";
          }
        }
        else
        {
            $error2 = "*Enter value between 0-40 only.";
        }

      }
      else if ($radiovalue == "General")
      {
          if(is_numeric($Rscore))
          {
            if($Rscore<=40 && $Rscore>=0)
            {
            if($Rscore >= "6" && $Rscore <="8")
            {
              $value1 ="2.5";
            }
            else if($Rscore >= "9" && $Rscore <="11")
            {
              $value1 ="3.0";
            }
            else if($Rscore >= "12" && $Rscore <="14")
            {
              $value1 ="3.5";
            }
            elseif ($Rscore >= "15" && $Rscore <="18") {
              $value1 ="4.0";
            }
            else if($Rscore >= "19" && $Rscore <="22")
            {
              $value1 ="4.5";
            }
            elseif ($Rscore >= "23" && $Rscore <="26") {
              $value1 ="5.0";
            }
            elseif ($Rscore >= "27" && $Rscore <="29") {
              $value1 ="5.5";
            }
            elseif ($Rscore == "30" || $Rscore == "31") {
              $value1 ="6.0";
            }
            elseif ($Rscore == "32" || $Rscore == "33") {
              $value1 ="6.5";
            }
            elseif ($Rscore == "34" || $Rscore == "35") {
              $value1 ="7.0";
            }
            else if($Rscore == "36")
            {
              $value1 ="7.5";
            }
            else if($Rscore == "37" || $Rscore == "38")
            {
              $value1 ="8.0";
            }
            else if($Rscore == "39")
            {
              $value1 ="8.5";
            }
            else if($Rscore == "40")
            {
              $value1 ="9.0";
            }
            }
            else
            {
               $error2 = "*Enter value between 0-40 only.";
            }
          }
        else
        {
            $error2 = "*Enter value between 0-40 only.";
        }

      }
    }


    //code of overall band
    if($_GET['Ocalculate'])
    {
        $oband = round(($LOtxt + $ROtxt + $WOtxt + $SOtxt)/4, 1);
        list($front, $decimal) = explode(".", $oband);
        if ( $decimal > 5 ){

            $oband = round(ceil($oband), 1);
        }
        else if ( $decimal < 5 ){
            $oband = round(floor($oband), 1);
        }

    }




?>
<div class="container">
    
    <div class="section-header" id="about">
          <h3 class="section-title">Band Calculator</h3>
          <span class="section-divider"></span>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(45deg, #1de099, #1dc8cd);color: white">
                    <CENTER><H3>Listening</H3></CENTER>
                </div>

                <div class="card-body" style="text-align: center;">
                   <p>Enter correct number of right answer</p>
                   <center><form class="form-group" method="get">
                       <label for="stxt">Enter 0-40 here :</label>
                       <input type="text" name="Lscore" id="stxt" class="form-control" style="width: 100px;" placeholder="00">
                      <font style="color: red;font-size: 12px" ><?php echo $error1;?></font> <br><br>  
                       <input type="submit" name="Lcalculate" class="btn" style="border-radius: 20px;background: linear-gradient(45deg, #1de099, #1dc8cd);color: white;" value="Calculate">
                       <input type="reset" name="Lreferesh" class="btn" style="border-radius: 20px;background: linear-gradient(45deg, #F92211, #FB8A20);color: white;" value="Do it again">
                       <p><?php echo  $print . " out of 9.0";?></p>
                   </form></center>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(45deg, #1de099, #1dc8cd);color: white">
                    <CENTER><H3>Reading</H3></CENTER>
                </div>

                <div class="card-body" style="text-align: center;">
                   
                   <center><form class="form-group" method="get">

                    <label>Type of IELTS: </label>
                    <label class="radio-inline">
                        <input type="radio" name="TOT" checked value="Academic">Academic
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="TOT" value="General">General
                    </label><br><br>

                    <label for="stxt">Enter 0-40 here :</label>
                       <input type="text" name="Rscore" id="stxt" class="form-control" style="width: 100px;" placeholder="00" autofocus>
                       <font style="color: red;font-size: 12px" ><?php echo $error2;?></font><br> <br>
                       <input type="submit" name="Rcalculate" class="btn" style="border-radius: 20px;background: linear-gradient(45deg, #1de099, #1dc8cd);color: white;" value="Calculate">
                       <input type="reset" name="Rreferesh" class="btn" style="border-radius: 20px;background: linear-gradient(45deg, #F92211, #FB8A20);color: white;" value="Do it again">
                       <p><?php echo $value1 . " out of 9.0";?></p>
                   </form></center>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(45deg, #1de099, #1dc8cd);color: white">
                    <CENTER><H3>Overall Band Score</H3></CENTER>
                </div>

                <div class="card-body" style="text-align: center;">
                   <p>Select Four Band Score :</p>
                     <CENTER>
                    <form class="form-group" method="get">
                        <div class="row">
                            <div class="col-md-3">
                              <label for="LOtxt">Listening:</label>
                              <select class="form-control" id="LOtxt" name="LOtxt" >
                                <option></option>
                                <option>9</option>
                                <option>8.5</option>
                                <option>8.0</option>
                                <option>7.5</option>
                                <option>7.0</option>
                                <option>6.5</option>
                                <option>6.0</option>
                                <option>5.5</option>
                                <option>5.0</option>
                                <option>4.5</option>
                                <option>4.0</option>
                                <option>3.5</option>
                                <option>3.0</option>
                                <option>2.5</option>
                                <option>2.0</option>
                                <option>1.5</option>
                                <option>1.0</option>
                                <option>0</option>
                              </select>
                            <!--<input type="text" class="form-control" id="LOtxt" name="LOtxt" placeholder="Enter score" > -->  
                            </div>
                            <div class="col-md-3">
                                <label for="ROtxt">Reading:</label>
                            
                            <select class="form-control" id="ROtxt" name="ROtxt" >
                                <option></option>
                                <option>9</option>
                                <option>8.5</option>
                                <option>8.0</option>
                                <option>7.5</option>
                                <option>7.0</option>
                                <option>6.5</option>
                                <option>6.0</option>
                                <option>5.5</option>
                                <option>5.0</option>
                                <option>4.5</option>
                                <option>4.0</option>
                                <option>3.5</option>
                                <option>3.0</option>
                                <option>2.5</option>
                                <option>2.0</option>
                                <option>1.5</option>
                                <option>1.0</option>
                                <option>0</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                                <label for="WOtxt">Writing:</label>
                            
                            <select class="form-control" id="WOtxt" name="WOtxt" >
                                <option></option>
                                <option>9</option>
                                <option>8.5</option>
                                <option>8.0</option>
                                <option>7.5</option>
                                <option>7.0</option>
                                <option>6.5</option>
                                <option>6.0</option>
                                <option>5.5</option>
                                <option>5.0</option>
                                <option>4.5</option>
                                <option>4.0</option>
                                <option>3.5</option>
                                <option>3.0</option>
                                <option>2.5</option>
                                <option>2.0</option>
                                <option>1.5</option>
                                <option>1.0</option>
                                <option>0</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                                <label for="SOtxt">Speaking:</label>
                            
                            <select class="form-control" id="SOtxt" name="SOtxt" >
                                <option></option>
                                <option>9</option>
                                <option>8.5</option>
                                <option>8.0</option>
                                <option>7.5</option>
                                <option>7.0</option>
                                <option>6.5</option>
                                <option>6.0</option>
                                <option>5.5</option>
                                <option>5.0</option>
                                <option>4.5</option>
                                <option>4.0</option>
                                <option>3.5</option>
                                <option>3.0</option>
                                <option>2.5</option>
                                <option>2.0</option>
                                <option>1.5</option>
                                <option>1.0</option>
                                <option>0</option>
                              </select>
                            </div>
                        </div>
                        <br>
                        <font style="color: red;font-size: 12px" ><?php echo $error1;?></font> <br><br>
                        <input type="submit" name="Ocalculate" class="btn" style="border-radius: 20px;background: linear-gradient(45deg, #1de099, #1dc8cd);color: white;" value="Calculate">
                       <input type="reset" name="Oreferesh" class="btn" style="border-radius: 20px;background: linear-gradient(45deg, #F92211, #FB8A20);color: white;" value="Do it again">
                       
                       <p><?php echo sprintf("%.1f", $oband) . " out of 9.0";?></p>
                    </form>
                    </CENTER>
                </div>
            </div>
        </div>
    </div>


    <div class="section-header" id="pricing">
          <h3 class="section-title">Band Descriptor</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            The IELTS band score table below explain the scoring to will help you calculate and understand your score.
          </p>
    </div>
    <div class="row justify-content-center" style="margin-top: -50px" >
        <div class="table-responsive">
        <table  class="table table-striped">
            <thead class="thead-dark">
            <tr>
              <th>Band</th>
              <th>Level</th>
              <th>Description</th>
              <th>Key points</th>
            </tr>
            </thead>
            <tr>
                <td>9</td>
                <td>Expert User</td>
                <td>Has complete command in the English language;accurate,appropriate,highly flexible,fluent with full understanding.</td>
                <td>Accurate & Compelete Understanding</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Very Good User</td>
                <td>Has complete command with only rare errors (which are unsystematic) or inappropriate words. Deals with complex situations well but has rare errors in complex situations but can deal with detailed argumentation. </td>
                <td>Rare errors & Uses complex language well </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Good User</td>
                <td>Has good command of English but also has occasional inaccuracies, misunderstandings or inappropriate words. Can use complex language quite well and understands detailed argumentation quite well.</td>
                <td>Only occasional errors & Uses complex language quite well in most situations</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Competent  User</td>
                <td>Has effective command of English but also has some errors, inappropriate words and misunderstandings in some situations. Can use complex language quite well but best in familiar situations.</td>
                <td>Some errors & Use some complex language which is best in familiar situations</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Modest User</td>
                <td>Has partial command of English and can deal with overall meaning. Make frequent errors. Has better English in common situations. Does not deal with complex language well. </td>
                <td>Frequent errors & has difficulties with complex language</td>
            </tr>
        </table>
        </div>
    </div>

</div>

@endsection

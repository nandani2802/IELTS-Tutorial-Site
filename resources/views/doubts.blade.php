@extends('layouts.app')

@section('content')

<style type="text/css">
  .mycls :hover{
      background-color: white;
      padding: 20px;
  }
</style>
<main id="main">

    <section id="pricing" class="section-bg" style="background-color: #eff5f5">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Student Section</h3>
          <span class="section-divider"></span>
         
        </div>
        
        @if(Auth::check())
          <div class="row">
          <div class="col-lg-12 wow slideInUp">
            @if(\Session::has('success'))
              <div class="alert alert-success ">
                  <p>{{\Session::get('success')}}</p>
              </div>
            @endif
          </div>
           
          <div class="col-lg-12 col-md-12">
             <div class="box featured wow slideInUp" >
              <h3>Solve your doubts here!</h3>
              <br>

              <form class="form-group" method="get" action="{{url('doubts/pricing')}}">
                {{csrf_field()}}
              <textarea class="form-control" name="dtxt" placeholder="Put your doubt here!"></textarea>
              <br>
                 <input type="submit" name="dsubmit" class="get-started-btn">
            </form>  
            </div>
          </div>
        </div>
        @else
          <div class="row">
          
          <div class="col-lg-12 col-md-12">
             <div class="box featured wow slideInUp" >
              <h3>Solve your doubts here!</h3>
              <br>

              <form class="form-group" method="get" action="{{url('doubts/pricing')}}">
                {{csrf_field()}}
              <textarea class="form-control" name="dtxt" placeholder="Put your doubt here!" disabled="disabled"></textarea>
              <br>
              <img src="img/alert.png" height="20" width="20"><p style="margin-left:10px;display: inline;text-align: left;color: #721c24"><a href="{{ route('login') }}" style="color: #721c24"><strong>Login</strong></a> Yourself First.</p>
              <br><br>
                 <input type="submit" name="dsubmit" class="get-started-btn">

            </form>  
            
            </div>
          </div>
          <!--<div class="col-md-12 alert alert-danger" style="height: 50px">
                  <img src="img/alert.png" height="20" width="20"><p style="margin-left:10px;display: inline;text-align: left;color: #721c24"><a href="{{ route('login') }}" style="color: #721c24"><strong>Login</strong></a> Yourself First.</p>
          </div>  -->

        </div>
        @endif
        

      </div>
    </section><!-- #pricing -->

   <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Solutions</h3>
          <span class="section-divider"></span>
          <!--<p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </div>
        <div class="row">
          <div class="col-md-12 wow slideInUp" >
          <form class="form-group form-inline" >
            <input type="text" name="searchtxt" id="search1" class="form-control" placeholder="Search" style="border:1px solid #1dc8cd">
            <button  class="btn" style="background: linear-gradient(45deg, #1de099, #1dc8cd);"><img src="img/search1.png" height="20"></button>
            <!--<input type="submit" name="search" value="Search" class="btn btn-primary">-->
          </form>
          </div>
        </div>

        <div class="row" id="results" >
          @if(count($data)>0)
          @foreach($data as $row)

          <!-- <div class="col-lg-6 ">
            <div class="box wow fadeInLeft" style="height: 250px;overflow-y: scroll;">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href=""> {{$row->squery}}</a></h4>
              <p class="description"> {{$row->sreply}}</p>
            </div>
          </div> -->
          @endforeach
          @endif
            
          
          <!-- <table>
            <tbody></tbody>
          </table>  --> 
        </div>
      </div>
    </section><!-- #more-features -->

</main>


<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

    fetch_customer_data();

    function fetch_customer_data(query = '')
    {
      // console.log(query);
      $.ajax({
          url:"{{ route('doubts.action') }}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data)
          {
            $('#results').html(data.table_data);
            $('#total_records').text(data.total_data); 
          }
      })
    }
    $(document).on('keyup','#search1',function(){
        var query = $(this).val();
        fetch_customer_data(query); 
    });
  });
</script>
@endsection
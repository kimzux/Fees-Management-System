<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Fees Mangement System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="container">
  		<div class="col-sm-10"><h1 style="margin-left: 20px;">PROFILE</h1></div>
    	 </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a photo...</h6>
         <input type="file" id="profile_pic" name="profile_pic"accept=".jpg, .jpeg, .png"> 
        {{-- <input type="file" class="text-center center-block file-upload"> --}}
      </div>

    <br>

               
         
          
          <?php 
          $user  = DB::table('users')->where('id', Auth::user()->id)->first();
        ?>
          <ul class="list-group">
            <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span>{{ Auth::user()->name }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>email</strong></span>{{ Auth::user()->email}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>phone number</strong></span> 0710153085</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            
            
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="/students" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="registration name"><h4>Registration Number</h4></label>
                              <input type="text" class="form-control" name="registration_number" id="registration_name" placeholder="Registration Name" title="enter your Registration number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="name" id="name" value="<?=$user->name?>"  placeholder="Name" title="edit your name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="phone" value="<?=$user->email?>" readonly placeholder="Email" title="edit your email if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="Phone number"><h4>Phone Number</h4></label>
                              <input type="tel" class="form-control" name="phone_number" id="mobile" placeholder="Phone Number" title="enter your phone number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Parent Name</h4></label>
                              <input type="text" class="form-control" name="parent_name" id="parent name" placeholder="Parent Name" title="enter your parent name.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="address" id="address" placeholder="Address" title="enter your address">
                          </div>
                      </div>
                      <div class="form-group">
                          
                        <div class="col-xs-6">
                            <label for="date of birth"><h4>Date Of Birth</h4></label>
                            <input type="Date" class="form-control" name="date_of_birth" id="date" placeholder="Date of Birth" title="Enter your Date birth.">
                        </div>
                    </div>
                    <div class="form-group">
                          
                        <div class="col-xs-6">
                            <label for="date of join"><h4>Date Of join</h4></label>
                            <input type="Date" class="form-control" name="date_of_join" id="date" placeholder="Date of Join" title="Enter your Date Of Joining.">
                        </div>
                    </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="change your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>gender</h4></label>
                              <input type="text" class="form-control" name="gender" id="gender" placeholder="gender" title="enter your gender">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                      <?=csrf_field()?>
              	</form>
              
              
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
                 
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
    <script>
        $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
        </script>
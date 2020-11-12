@extends('layouts.app')

@section('content')



 
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>   
              <strong>{{ $message }}</strong>
          </div>
          @endif
          @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('warning'))
   <div class="alert alert-warning alert-block"> 
  <button type="button" class="close" data-dismiss="alert">×</button>  
    <strong>{{ $message }}</strong>
</div>
@endif
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">New Admission</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <hr class="sidebar-divider d-none d-md-block">
          <div class="bs-example">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#registration" class="nav-link active" data-toggle="tab">Registration</a>
                </li>
                <li class="nav-item">
                    <a href="#profile" class="nav-link" data-toggle="tab">Excel Registration</a>
                </li>
               
            </ul>
            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="registration">
                  <div class="card bg-light mb-3" style="max-width: 60rem;">
                    <div class="card-header"><h5><b>Admission Form</b></h5></div>
                    <div class="card-body">
                        <form class="form" action="admission" method="post" id="registrationForm" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="inputAdmissionNumber" class="col-sm-2 col-form-label"><b>Admission Number</b></label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="registration_number" id="inputAdmissionNumber" placeholder="17023037010j" required>
                                </div>
                              </div>
                             <div class="form-group row">
                              <label for="inputStudentName"  class="col-sm-2 col-form-label"><b>Student Name</b></label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="inputStudentName" placeholder="Student Name" required>
                              </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputParentName" class="col-sm-2 col-form-label"><b>Parent Name</b></label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="parent_name" id="inputParentName" placeholder="Parent Name">
                                </div>
                                 </div>
                                 <div class="form-group row">
                                  <label for="inputGender" class="col-sm-2 col-form-label"><b>gender</b></label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" name="gender" id="inputGender" placeholder="female" required>
                                  </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="inputDate" class="col-sm-2 col-form-label"><b>Date Of Birth</b></label>
                                    <div class="col-sm-4">
                                      <input type="date" class="form-control" id="inputDate" placeholder="DOB" name="dob" required>
                                    </div>
                                     </div>
                                     <div class="form-group row">
                                        <label for="inputDate" class="col-sm-2 col-form-label"><b>Date Of Joining</b></label>
                                        <div class="col-sm-4">
                                          <input type="date" class="form-control" id="inputDate" placeholder="Date" name="doj" required>
                                        </div>
                                         </div>
                                         <div class="form-group row">
                                            <label for="inputEducationLevel" class="col-sm-2 col-form-label"><b>Education Level</b></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="educationlevel" id="inputEducationLevel">
                                                    <option value="volvo">NTA-LEVEL 7</option>
                                                    <option value="saab">NTA-LEVEL 5</option>
                                                </select>
                                            </div>
                                             </div>
                                             <div class="form-group row">
                                                <label for="inputBranch" class="col-sm-2 col-form-label"><b>Branch</b></label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="branch" id="inputBranch">
                                                        <option value="volvo">--Select Branch--</option>
                                                        <option value="saab">nmb</option>
                                                    </select>
                                                </div>
                                                 </div>
                                                 <div class="form-group row">
                                                    <label for="inputBatch" class="col-sm-2 col-form-label"><b>Batch</b></label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="batch" id="inputBatch">
                                                          <?php
                                                          $batches = App\Batches::all();
                                                          foreach($batches as $batch){
                                                            
                                                            echo '<option value="'.$batch->id.'">'.$batch->batch_name.'</option>';
                                                           
                                                                  }?>
                                                        </select>
                                                      
                                                    </div>
                                                     </div>
                                                    
                                         <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label"><b>Email</b></label>
                                            <div class="col-sm-8">
                                              <input type="email" class="form-control" id="inputEmail"  name="email" placeholder="Email" required>
                                            </div>
                                             </div>
                                             <div class="form-group row">
                                                <label for="inputPhoneNumber" class="col-sm-2 col-form-label"><b>Phone Number</b></label>
                                                <div class="col-sm-8">
                                                  <input type="tel" name="phone"  class="form-control" id="inputPhoneNumber" placeholder="Phone Number" required >
                                                </div>
                                                 </div>
                                                 <div class="form-group row">
                                                    <label for="inputAddress" class="col-sm-2 col-form-label"><b>Address</b></label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="inputAddress" name="address" placeholder="Address" rows="3"></textarea>
                                                    </div>
                                                     </div>
                                                     <div class="form-group row">
                                                        <label for="uploadImage" class="col-sm-2 col-form-label"><b>Photo</b></label>
                                                        <div class="col-sm-8">
                                                          <input type="file" class="form-control" id="uploadImage"  name="image"
                                                          accept="image/png, image/jpeg ,image/jpg" required>
                                                        </div>
                                                         </div>
                                                         <div class="form-group row">
                                                            <label for="button" class="col-sm-2 col-form-label"></label>
                                                            <div class="col-sm-offset-8 col-sm-8">
                                                                <button type="submit" class="btn btn-primary" autocomplete="off">Save</button>
                                                            </div>
                                                             </div>
        
                                                             <?=csrf_field()?>            
                                                   
                          </form>
                         
                    </div>
                  </div>
                  
                </div>
                <div class="tab-pane fade" id="profile">
                  <div class="card bg-light mb-3" style="max-width: 60rem">
                    <div class="card-header">Upload the Students From Excel File 
                     
                    </div>
                    <div class="card-body">
                      
                      <h5 class="card-title">Download sample here <a href='<?=asset('sample.xlsx')?>'>Download</a>
                    
                      <br><p class="card-text pt-4" >This part allows you to upload all students information.</p>
                      <form method="post" action="admission" enctype="multipart/form-data">
                      <input id="fileSelect" type="file" name="select_file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" /> 
                      <div class="col-sm-offset-8 col-sm-8">
                        <hr class="sidebar-divider d-none d-md-block">
                        <button type="submit" name="submit" class="btn btn-primary" autocomplete="off">Save</button>
                    </div>
                    <?=csrf_field()?>
                  </form> 
                    </div>
                  </div>
                  
                </div>
              
            </div>
        </div> 




       


            
      <!-- End of Main Content -->

     

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


 
@include('layouts.footer')


@endsection

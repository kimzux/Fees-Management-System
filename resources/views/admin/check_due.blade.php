@extends('layouts.app')

@section('content')

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Check Due Details</h1>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="card bg-light mb-3" style="max-width: 35rem;">
              <div class="card-header"><b>Check Due Details</b></div>
              <div class="card-body">
                <form>
                <div class="form-group row">
                                <label for="inputEducationLevel" class="col-sm-4 col-form-label"><b>Education Level</b></label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="educationlevel" id="inputEducationLevel">
                                        <option value="volvo">--select--</option>
                                        <option value="volvo">NTA-LEVEL 7</option>
                                        <option value="saab">NTA-LEVEL 5</option>
                                    </select>
                                </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="inputBranch" class="col-sm-4 col-form-label"><b>Branch</b></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="branch" id="inputBranch">
                                            <option value="volvo">--Select Branch--</option>
                                            <option value="saab"></option>
                                        </select>
                                    </div>
                                     </div>
                                     <div class="form-group row">
                                        <label for="inputYear" class="col-sm-4 col-form-label"><b>Year</b></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="educationlevel" id="inputYear">
                                                <option value="volvo">--select--</option>
                                                <option value="volvo">2017</option>
                                                <option value="saab">2018</option>
                                            </select>
                                        </div>
                                         </div>
                                     <div class="form-group row">
                                        <label for="inputBatch" class="col-sm-4 col-form-label"><b>Academic Year</b></label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="academicyear" id="inputAcademic">
                                                <option value="volvo">--Select Academic Year--</option>
                                                <option value="volvo">2014</option>
                                                <option value="saab">2015</option>
                                            </select>
                                        </div>
                                        </div>
                     <div class="form-group row">
                    <label for="button" class="col-sm-4 col-form-label"></label>
                  <div class="col-sm-4 ">
                        <button type="submit" class="btn btn-primary" style="align-center">Search</button>
                    </div>
                     </div>

                </form>
              </div>
            </div>

        


            
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

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

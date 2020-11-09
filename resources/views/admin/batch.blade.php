@extends('layouts.app')

@section('content')

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Adding Batch</h1>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="card bg-light mb-3" style="max-width: 35rem;">
              <div class="card-header"><b>Add Batch</b></div>
              <div class="card-body">
                <form  action="batch" method="post">
                       <div class="form-group row">
                       <label for="inputBatch" class="col-sm-2 col-form-label">batch</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="inputBatch" name="batch" placeholder="Add Batch" required>
                            </div>
                            </div>
                  <div class="form-group row">
                    <label for="button" class="col-sm-4 col-form-label"></label>
                  <div class="col-sm-4 ">
                        <button type="submit" class="btn btn-primary" style="align-center">Add</button>
                    </div>
                     </div>
                     <?=csrf_field()?>  
                     
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

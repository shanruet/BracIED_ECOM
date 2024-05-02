<div class="modal fade" id="modal-category-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add a new category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('add_category', Auth::user()->id)}} " method="POST">
              @csrf
            <div class="modal-body">
             
            <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                     
                        <label>New Category</label> 
                        
                        <input type="text" class="form-control" name="category" id="category">
                    </div>
                  </div>
            </div>
            <div class="mt-1 modal-footer float-right">
              <hr>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<div class="modal fade" id="modal-template-add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add a new category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @include('admin._addTemplate')
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-segment-add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add a new category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @include('admin._addGroup')
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- Modal -->
<div class="modal fade" id="modal-contact-edit" tabindex="-1" aria-labelledby="Edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Contact Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('update_contact_details')}} "  method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
         
                    <div class="form-group">
                        <label for="name"><i class="fa fa-user" aria-hidden="true"  style='font-size:17px;'>&nbsp; Name</i></label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="contact_number"><i class="fa fa-phone" aria-hidden="true"  style='font-size:17px;'>&nbsp; Number</i></label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number">
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-email" aria-hidden="true"  style='font-size:17px;'>&nbsp; Email</i></label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="address"><i class="fa fa-home" aria-hidden="true"  style='font-size:17px;'>&nbsp;Address</i></label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="category"><i class="fas fa-stream" aria-hidden="true"  style='font-size:17px;'>&nbsp;Category</i></label>
                        <input type="text" class="form-control" id="category" name="category">
                        <input type="hidden" class="form-control" id="contact_id" name="contact_id">
                        <input type="hidden" class="form-control" id="group_id" name="group_id">
                    </div>
                    <!-- Add more form fields here -->
                
          </div>
  
          <div class="modal-footer">
              <div class="row">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-md btn-block btn-success" ><i class="fa fa-check mr-1"></i>Submit</button>
                  </div>
                  <div class="col-sm-6">
                      <button type="button" class="btn btn-md btn-block btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Close</button>
                  </div>
              </div>
            
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modal-contact-delete" tabindex="-1" aria-labelledby="Delete" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('delete_contact')}} "  method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
         
          <div class="form-group">
                        <p>Are you sure to delete the contact ? </p>
                        <input type="hidden" class="form-control" id="contactt_id" name="contactt_id">
                        <input type="hidden" class="form-control" id="groupp_id" name="groupp_id">
                    </div>
                    <!-- Add more form fields here -->
                
          </div>
  
          <div class="modal-footer">
              <div class="row">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-sm btn-block btn-success" ><i class="fa fa-check mr-1"></i>Delete</button>
                  </div>
                  <div class="col-sm-6">
                      <button type="button" class="btn btn-sm btn-block btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Close</button>
                  </div>
              </div>
            
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="modal-segment-edit" tabindex="-1" aria-labelledby="Delete" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Segment Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('update_segment')}} "  method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
         
                 
                    <div class="form-group">
                        <label for="name"><i class="fa fa-user" aria-hidden="true"  style='font-size:17px;'>&nbsp; Name</i></label>
                        <input type="text" class="form-control" id="segmentt_name" name="segmentt_name">
                    </div>
                    <div class="form-group">
                        <label for="contact_number"><i class="fa fa-tags" aria-hidden="true"  style='font-size:17px;'>&nbsp; Tags</i></label>
                        <input type="text" class="form-control" id="segment_tags" name="segment_tags">
                    </div>
                   
                    <div class="form-group">
                       
                        <input type="hidden" class="form-control" id="segment_id" name="segment_id">
                    </div>
                    <!-- Add more form fields here -->
                
          </div>
  
          <div class="modal-footer">
              <div class="row">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-sm btn-block btn-success" ><i class="fa fa-check mr-1"></i>Submit</button>
                  </div>
                  <div class="col-sm-6">
                      <button type="button" class="btn btn-sm btn-block btn-danger" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Close</button>
                  </div>
              </div>
            
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="modal-segment-delete" tabindex="-1" aria-labelledby="Delete" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Segment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('delete_segment')}} "  method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
         
          <div class="form-group">
                        
                        <div class="form-group">
                        <div class="row">
                  <div class="col-sm-3">
                  <label for="delete_segment_name">Segment Name</i></label>
                  </div>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" id="delete_segment_name" name="delete_segment_name">
                  </div>
                  </div>
                       
                    </div>
                    <strong style="color:red;"><i class="fa fa-bell mr-2" style="color:red; font-size:23px;"></i>Are you sure to delete the entire segment  ? </strong>
                        <input type="hidden" class="form-control" id="delete_segment_id" name="delete_segment_id">
             
                    </div>
                    <!-- Add more form fields here -->
                
          </div>
  
          <div class="modal-footer">
              <div class="row">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-sm btn-block btn-danger" ><i class="fa fa-trash mr-1"></i>Delete</button>
                  </div>
                  <div class="col-sm-6">
                      <button type="button" class="btn btn-sm btn-block btn-success" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Close</button>
                  </div>
              </div>
            
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="modal-campaign-delete" tabindex="-1" aria-labelledby="Delete" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Campaign</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('delete_campaign')}} "  method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
         
          <div class="form-group">
                        
                        <div class="form-group">
                        <div class="row">
                  <div class="col-sm-3">
                  <label for="delete_campaign_name">Campaign Name</i></label>
                  </div>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" id="delete_campaign_name" name="delete_campaign_name">
                  </div>
                  </div>
                       
                    </div>
                    <strong style="color:red;"><i class="fa fa-bell mr-2" style="color:red; font-size:23px;"></i>Are you sure to delete the entire Campaign..? </strong>
                        <input type="hidden" class="form-control" id="delete_campaign_id" name="delete_campaign_id">
             
                    </div>
                    <!-- Add more form fields here -->
                
          </div>
  
          <div class="modal-footer">
              <div class="row">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-sm btn-block btn-danger" ><i class="fa fa-trash mr-1"></i>Delete</button>
                  </div>
                  <div class="col-sm-6">
                      <button type="button" class="btn btn-sm btn-block btn-success" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Close</button>
                  </div>
              </div>
            
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->

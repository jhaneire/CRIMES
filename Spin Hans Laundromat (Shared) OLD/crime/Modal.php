<div class="container">        
  <table class="table table-light table-striped">
    <!-- <thead>
      <!-- <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
      </tr> -->
    </thead> -->
    <tbody><tr>
        <!-- <td>1</td>
        <td>Dane Alexandra</td>
        <td>Tan</td>
        <td>Caringal</td>
        <td>09565100528</td>
        <td>cdanealexandra@gmail.com</td>
        <td>datc9</td>
        <td>caringal02</td> -->
        <td><button type="button"  data-bs-toggle="modal" data-bs-target="#myModal" data-title="1" class="btn btn-primary">Update</button></td>
       </tr></tbody></table></div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form id="image_form" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div> 
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Firstname" id="fname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Email" id="email">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Username" id="uname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Password" id="pword">
                    </div>
                    
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnUpdate">Update Data</button>
      </div>
    </div>
  </div>
</div>
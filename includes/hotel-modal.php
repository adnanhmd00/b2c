<div class="modal fade" id="hotel">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h6 class="modal-title text-dark ml-auto">Hotel</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
       <form action="" method="post">
          <div class="form-group">
              <input type="text" placeholder="Your Staycation Destination" class="form-control">
          </div>

          <div class="row">
              <div class="col">
                <div class="dates" style="color:#2471a3;">
                  <label>Check In</label>
                  <input type="text" style="width:120px;background-color:#fff;" class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                </div>
              </div>
              <div class="col">
              <div class="dates" style="color:#2471a3;">
                  <label>Check Out</label>
                  <input type="text" style="width:120px;background-color:#fff;" class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                </div>
              </div>
            </div>

          <br>
          <div class="form-group">
              <input type="text"  autocomplete="off" placeholder="Rooms" class="form-control">
          </div>

          <div class="row">
            <div class="col"  style="color:#2471a3;">
              <label for="Adults">Adults</label>
              <select name="" class="form-control" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="col"  style="color:#2471a3;">
            <label for="Adults">Children</label>
              <select name="" class="form-control" id="">
                <option value="None">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <br>
           <div class="form-group">
               <button class="btn btn-dark btn-block">Search</button>
           </div>
       </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>


<x-app-layout>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Register New Darta</h5>
        <a href="{{route('darta.index')}}" class="btn btn primary">Go Back</a>
    </div>
    <div class="card-body">
        <form action ="" method="post">
            @csrf
            <div class="form-group">
                <label for="SN">SN <span>*</span></label>
                <input id="SN" class="form-control" type="text" name="sn">
            </div>
            <div class="form-group">
                <label for="date">Date <span>*</span></label>
                <input id="date" class="form-control" type="date" name="date">
            </div>
            <div class="form-group">
             <label for="partucular">Particular <span>*</span></label>
            <input id="partucular" class="form-control" type="text" name="partucular">
            </div>
            <div class="form-group">
                <label for="subject">Subject <span>*</span></label>
                <input id="subject" class="form-control" type="text" name="subject">
                </div>
                <div class="form-group">
                    <label for="related_section">Related Section <span>*</span></label>
                    <input id="related_section" class="form-control" type="text" name="related_section">
                    </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Record</button>
        </form>
    </div>
      
        
</div>
 
</x-app-layout>
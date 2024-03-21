<x-app-layout>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Create Post Details</h5>
        <a href="{{route('post.index')}}" class="btn btn primary">Go Back</a>
    </div>
    <div class="card-body">
        <form action ="{{ route('post.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Post Name <span>*</span></label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="name">Slug <span>*</span></label>
                <input id="name" class="form-control" type="text" name="slug">
            </div>
            <button type="submit" class="btn btn-primary">Save Record</button>
        </form>
    </div>
      
        
</div>
 
</x-app-layout>
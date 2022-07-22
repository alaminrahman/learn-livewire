<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form wire:submit.prevent="save" class="row g-3">

                    <h1>Post</h1>

                    <div class="col-md-12">
                        <input type="text" wire:model="post.title" class="form-control" name="title" id="title" placeholder="title">
                      </div>  

                    <span class="error text-danger">
                        @error('post.title') {{ $message }} @enderror
                    </span>
                    
                      <div class="col-md-12">
                        <input type="text" wire:model="post.content" class="form-control" name="content" id="content" placeholder="content">
                      </div> 
                      
                      <span class="error text-danger">
                        @error('post.content') {{ $message }} @enderror
                    </span>
                    

                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                  </form>
            </div>
        </div>
    </div>
</div>

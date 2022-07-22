<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="row g-3">
                    <h1>Comments</h1>

                    <div class="col-md-8">
                        <input type="text" wire:model.lazy="comment" class="form-control" name="comment" id="comment" placeholder="Comment">
                      </div>                                        
                    
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                        <div class="col-md-12 border">
                            <p><b>{{$comment}}</b></p>
                            <p></p>
                        </div>
                    
                  </form>
            </div>
        </div>
    </div>
</div>

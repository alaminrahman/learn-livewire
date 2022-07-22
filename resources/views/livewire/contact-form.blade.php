<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="mt-5">Contact</h1>
                @if ($successMessage)
                    <div class="alert alert-success d-flex justify-content-between">
                        <span>{{ $successMessage }}</span> <button wire:click="$set('successMessage', null)">X</button>
                    </div>
                @endif

                <form wire:submit.prevent="submitForm" class="row g-3">
            
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" wire:model.defer="name" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                    
                    <div class="col-md-6">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" wire:model.defer="email" class="form-control" name="email" id="email" placeholder="Email"> 
                    </div>
            
                    <div class="col-md-12">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="tel" wire:model.defer="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                    </div>
            
                    <div class="col-12">
                      <label for="message" class="form-label">Message</label>
                      <input wire:model.defer="message" name="message" type="text" class="form-control" id="message" placeholder="1234 Main St">
                    </div>
                
                    
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

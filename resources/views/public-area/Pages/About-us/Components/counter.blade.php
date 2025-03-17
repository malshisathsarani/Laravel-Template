<div class="card">
    <div class="card-body">
        <h5 class="card-title">Title</h5>
        <form wire:submit.prevent="submitUser">
            <div class="form-group">
                <label for="#">Name</label>
                <input type="text" class="form-control" wire:model="user.name" id="inp-name" aria-describedby="helpId" placeholder="">
                    @error('user.name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="#">Email</label>
                <input type="email" class="form-control" wire:model="user.email" id="inp-email" aria-describedby="helpId" placeholder="">
                    @error('user.email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="#">Password</label>
                <input type="password" class="form-control" wire:model="user.password" id="inp-password" aria-describedby="helpId" placeholder="">
                    @error('user.password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>

    </div>
</div>

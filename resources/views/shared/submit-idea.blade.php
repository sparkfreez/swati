<h4> Share yours ideas </h4>
                <div class="row">
                  <form method="POST" action="{{ route('store.ideas') }}">
                    @csrf
                        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                       {{-- user error derictive to dipaly an error  --}}
                        @error('content')
                          <span class=" d-block fs-6 text-danger mt-2 mt-1" >{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <button class="btn btn-dark"> Share </button>
                    </div>
</form>

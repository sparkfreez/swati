<h4> Share yours ideas </h4>
                <div class="row">
                  <form method="POST" action="{{ route('store.ideas') }}">
                    @csrf
                        <textarea name="idea" class="form-control" id="idea" rows="3"></textarea>
                    </div>
                    <div class="">
                        <button class="btn btn-dark"> Share </button>
                    </div>
                  </form>

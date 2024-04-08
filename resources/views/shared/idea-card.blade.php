<div class="customcard card">
        
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>
            <div>
                <form method="post" action="{{ route('ideas.destroy', $idea->id) }}">
                    @method('delete')
                    @csrf
                    <a class="mx-2" href="{{ route('ideas.edit', $idea->id) }}">Edit</a>
                    <a href="{{ route('ideas.show', $idea->id) }}">view</a>
                    <button type="submit" class="ms-1 btn btn-danger btm-sm " data-bs-toggle="tooltip" data-bs-html="true"
                        title="Delete Idea">X</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
          <form method="POST" action="{{ route('ideas.update',$idea->id) }}">
            @csrf
            @method('put')
                <textarea name="content" class="form-control" id="idea" rows="3">{{ $idea->content }}</textarea>
               {{-- user error derictive to dipaly an error  --}}
                @error('content')
                  <span class=" d-block fs-6 text-danger mt-2 mt-1" >{{ $message }}</span>
                @enderror
            </div>
            <div class="">
                <button class="mx-2 btn btn-dark mb-1 btn-sm"> Update </button>
            </div>
           </form>  
        @else
        <a href="{{ route('ideas.destroy', $idea->id) }}">
        <p class="p-5 fs-6 fw-light  text-white-50 bg-black rounded-1 ">
            {{ $idea->content }}
        </p>
        @endif
        </a>
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $idea->likes }} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $idea->created_at }}</span>
            </div>
        </div>
       @include('shared.comment-box')
    </div>
       
    </div>


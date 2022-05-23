<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div class="toast-container">
      @if (session('success'))
        @if(is_array(session('success')))
          @foreach (session('success') as $message)
            <div class="mb-4" type="success">
              {{ $message }}
            </div>
          @endforeach
        @else
          <div class="mb-4" type="success">
            {{ session('success') }}
          </div>
        @endif
      @endif
      @if (session('warning'))
        @if(is_array(session('warning')))
          @foreach (session('warning') as $message)
            <div class="mb-4" type="warning">
              {{ $message }}
            </div>
          @endforeach
        @else
          <div class="mb-4" type="warning">
            {{ session('warning') }}
          </div>
        @endif
      @endif   
      @if (session('danger'))
        @if(is_array(session('danger')))
          @foreach (session('danger') as $message)
            <div class="mb-4" type="danger">
              {{ $message }}
            </div>
          @endforeach
        @else
          <div class="mb-4" type="danger">
            {{ session('danger') }}
          </div>
        @endif
      @endif   
    </div>
  </div>
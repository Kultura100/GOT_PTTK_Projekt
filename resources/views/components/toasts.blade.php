<div class="float-end">
    <div class="toast-container">
      @if (session('success'))
        @if(is_array(session('success')))
          @foreach (session('success') as $message)
            <div class="mb-4 alert alert-success" type="success">
              {{ $message }}
            </div>
          @endforeach
        @else
          <div class="mb-4 alert alert-success" type="success">
            {{ session('success') }}
          </div>
        @endif
      @endif
      @if (session('warning'))
        @if(is_array(session('warning')))
          @foreach (session('warning') as $message)
            <div class="mb-4 alert alert-warning" type="warning">
              {{ $message }}
            </div>
          @endforeach
        @else
          <div class="mb-4 alert alert-warning" type="warning">
            {{ session('warning') }}
          </div>
        @endif
      @endif   
      @if (session('danger'))
        @if(is_array(session('danger')))
          @foreach (session('danger') as $message)
            <div class="mb-4 alert alert-danger" type="danger">
              {{ $message }}
            </div>
          @endforeach
        @else
          <div class="mb-4 alert alert-danger" type="danger">
            {{ session('danger') }}
          </div>
        @endif
      @endif   
    </div>
  </div>
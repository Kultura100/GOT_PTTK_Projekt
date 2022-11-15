    <div class="toast-container position-absolute bottom-0 end-0 p-3 z-10 text-dark">
        @if (session('success'))
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-dark">
                    <i class="fa-solid fa-check me-2 rounded-md text-success"></i>
                    <strong class="me-auto text-success fw-bold">System</strong>
                    <a data-bs-dismiss="toast"> <i class="fa-solid fa-circle-xmark text-light fa-xl" style="cursor: pointer;"></i></a>
                </div>
                @if (is_array(session('success')))
                    @foreach (session('success') as $message)
                        <div class="toast-body fw-bold">
                            {{ $message }}
                        </div>
                    @endforeach
                @else
                    <div class="toast-body fw-bold">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        @endif

        @if (session('warning'))
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-dark">
                    <i class="fa-solid fa-exclamation me-2 rounded-md" style="color:#ffd700;"></i>
                    <strong class="me-auto fw-bold" style="color:#ffd700;">System</strong>
                    <a data-bs-dismiss="toast"> <i class="fa-solid fa-circle-xmark text-light fa-xl" style="cursor: pointer;"></i></a>
                </div>
                @if (is_array(session('warning')))
                    @foreach (session('warning') as $message)
                        <div class="toast-body fw-bold">
                            {{ $message }}
                        </div>
                    @endforeach
                @else
                    <div class="toast-body fw-bold">
                        {{ session('warning') }}
                    </div>
                @endif
            </div>
        @endif

        @if (session('danger'))
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-dark">
                    <i class="fa-solid fa-xmark me-2 rounded-md text-danger"></i>
                    <strong class="me-auto text-danger fw-bold">System</strong>
                    <a data-bs-dismiss="toast"> <i class="fa-solid fa-circle-xmark text-light fa-xl" style="cursor: pointer;"></i></a>
                </div>
                @if (is_array(session('danger')))
                    @foreach (session('danger') as $message)
                        <div class="toast-body fw-bold">
                            {{ $message }}
                        </div>
                    @endforeach
                @else
                    <div class="toast-body fw-bold">
                        {{ session('danger') }}
                    </div>
                @endif
            </div>
        @endif
    </div>

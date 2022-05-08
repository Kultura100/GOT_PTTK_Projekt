<div class="d-flex flex-sm-column justify-content-center pt-6">
    <div>
        <a href="/" class="d-flex justify-content-center mb-4">
            <x-application-logo width=128 height=128 />
        </a>
    </div>

    <div class="card shadow-sm bg-white rounded">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
@if(session()->has('flash_message'))
    <div class="alert alert-success {{ session()->has('flash_message_important') ? 'alert-important' : '' }}">
        @if(session()->has('flash_message_important'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
        @endif
        {{ session('flash_message') }}
    </div>
@endif
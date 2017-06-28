<div style="text-align: center; background: rgba(0,0,0,0.5); border:none; color: green;" id="success">
    @if($flash = session('message'))
    {{ $flash }}
    @endif
</div>
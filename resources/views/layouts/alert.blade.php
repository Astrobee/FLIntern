<div class="aler alert-success" style="text-align: center; margin-right: 40%; margin-left: 40%; word-wrap: inherit; background: rgba(0,0,0,0.5); margin-bottom: 50px; color: green;" id="success">
    @if($flash = session('message'))
    {{ $flash }}
    @endif
</div>
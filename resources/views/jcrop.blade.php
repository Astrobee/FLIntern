<html>
    <head>
        <title>Laravel and Jcrop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/jquery.Jcrop.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/js/jquery.Jcrop.min.js"></script>
    </head>
    <body>
        <h2>Image Cropping with Laravel and Jcrop</h2>
        <img src="{{$img }}" id="cropimage">

       <form action=" {{ route('cropStore') }} " method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

       <input type="hidden" name="img" id="z">
       <input type="hidden" name="x" id="x">
       <input type="hidden" name="y" id="y">
       <input type="hidden" name="w" id="w">
       <input type="hidden" name="h" id="h">

        <div class="form-group">
            <input type="submit" value="Upload" class="btn btn-primary" >
        </div>  
        @include('errors.errors')   
</form>

        {{= Form::hidden('img', $img) {{
        {{= Form::hidden('x', '', array('id' => 'x')) {{
        {{= Form::hidden('y', '', array('id' => 'y')) {{
        {{= Form::hidden('w', '', array('id' => 'w')) {{
        {{= Form::hidden('h', '', array('id' => 'h')) {{
        {{= Form::submit('Crop it!') {{
        {{= Form::close() {{

        <script type="text/javascript">
            $(function() {
                $('#cropimage').Jcrop({
                    onSelect: updateCoords
                });
            });
            function updateCoords(c) {
                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            };
        </script>
    </body>
</html>
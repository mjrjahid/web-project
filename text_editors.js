<!DOCTYPE html>
<html>
   <head>
        <title>Interactive Text editor in Js</title>
    </head>
    <script src="https://kit.fontawesome.com/72af9a9e9f.js" crossorigin="anonymous"></script>
    <body>
        <div>
            <button onclick="exeCmd('bold');"><i class="fas fa-bold"></i></button>
        </div>
        <iframe name="textfield" style="width: 1000px; height:500px"></iframe>
        <script type="text/javascript">
            function enableEditMode() {
                textfield.document.designMode='On';
            }
            function exeCmd(command) {
                textfield.document.execCommand(command,false,null);
            }
        </script>
    </body>
</html>
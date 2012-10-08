<html>
<body>
  <div id="ifrm"> </div>
<form id="uploadform" action="upload.php" method="post" enctype="multipart/form-data" target="uploadframe" onsubmit="uploading(this); return false">
  <input type="file" class="file_up" name="file_up[]" />
  <input type="submit" value="UPLOAD" id="sub" />
</form>
<script type="text/javascript" src="upload.js"></script>
<!--To create a new file upload box the following code calls a javascript -->
<button onclick="add_upload('uploadform'); return false;">Add New File</button>
</body>
</html>
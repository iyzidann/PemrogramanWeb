<!DOCTYPE html>
    <html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <!-- soal 2.2 -->
            <!-- <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png"> -->
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
            <input type="submit" value="Unggah">
        </form>
    </body>
</html>
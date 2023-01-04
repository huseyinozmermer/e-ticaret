 <?php
    require_once "header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Blog Ekle</h3>
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">Settings 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                            <!-- <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sayfa Linki <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="" id="first-name" name="kullanici_tc" disabled="" value="<php echo $ayarcek['ayar_url'] ?>/sayfa-<php echo seo($menucek['menu_ad']) ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div> -->


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Resim </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="myFile" name="myFile" class="form-control-file col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogTarih">Tarih <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="BlogTarih" name="BlogTarih" placeholder="Tarih giriniz..." class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogBaslik">Üst Başlık <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="BlogBaslik" name="BlogBaslik" placeholder="Üst başlık giriniz..." class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogUst">Başlık <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="BlogUst" name="BlogUst" placeholder="Başlık giriniz..." class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <!-- Ck Editör Başlangıç -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogAlticerik">İçerik <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="ckeditor" id="editor1" name="BlogAlticerik"></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor1' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogAlticerik2">İçerik <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="ckeditor" id="editor2" name="BlogAlticerik2"></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor2' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogAlticerik3">İçerik <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="ckeditor" id="editor3" name="BlogAlticerik3"></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor3' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogAlticerik4">İçerik <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="ckeditor" id="editor4" name="BlogAlticerik4"></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor4' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogAlticerik5">İçerik <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="ckeditor" id="editor5" name="BlogAlticerik5"></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor5' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="BlogAlticerik6">İçerik <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  class="ckeditor" id="editor6" name="BlogAlticerik6"></textarea>
                                </div>
                            </div>
                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#editor6' ) )
                                            .then( editor => {
                                                    console.log( editor );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>
                            <!-- Ck Editör Bitiş -->
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="blogekle" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php
    require_once "footer.php";
?>
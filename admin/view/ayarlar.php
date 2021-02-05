<?php require admin_view('static/header') ?>
<?php
global $ayarlar
?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=admin_url('index')?>">Anasayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ayarlar</li>
        </ol>
    </nav>

    <form>
        <div class="form-group row">
            <label for="uygulamaninAdi" class="col-sm-2 col-form-label">Uygulamanın Adı</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="uygulamaninAdi" name="uygulamaninAdi" placeholder="Uygulamanın Adı" value="<?= isset($ayarlar->uygulamaninAdi) ? $ayarlar->uygulamaninAdi : ''   ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="paketAdi" class="col-sm-2 col-form-label">Paket Adı</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="paketAdi" name="paketAdi" placeholder="Paket Adı Giriniz" value="<?= isset($ayarlar->paketAdi) ? $ayarlar->paketAdi : ''   ?>">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            First radio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Second radio
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                            Third disabled radio
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-2">Checkbox</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
<?php require admin_view('static/footer') ?>
<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-featured" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
              <?php if ($error_name) { ?>
              <div class="text-danger"><?php echo $error_name; ?></div>
              <?php } ?>
            </div>
          </div>          
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="status" id="input-status" class="form-control">
                <?php if ($status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          
          
          <div class="tab-pane">
            <ul class="nav nav-tabs" id="language">
              <?php foreach ($languages as $language) { ?>
              <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
              <?php } ?>
            </ul>
            <div class="tab-content">
              <?php foreach ($languages as $language) { ?>
              <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
                
                
                <div class="form-group">
                  <label class="col-sm-1 control-label" for="input-title<?php echo $language['language_id']; ?>"><?php echo $entry_punktplaseholder; ?></label>
                  <div class="col-sm-2">
                        <input type="text" name="name_1[<?php echo $language['language_id']; ?>][title]" value="<?php echo isset($name_1[$language['language_id']]['title']) ? $name_1[$language['language_id']]['title'] : ''; ?>" placeholder="<?php echo $entry_nameplaseholder; ?>" id="input-height<?php echo $language['language_id']; ?>" class="form-control" />
                  </div>
                  <div class="col-sm-2">
                        <input type="text" name="url_1[<?php echo $language['language_id']; ?>][title]" value="<?php echo isset($url_1[$language['language_id']]['title']) ? $url_1[$language['language_id']]['title'] : ''; ?>" placeholder="<?php echo $entry_uriplaseholder; ?>" id="input-url_1<?php echo $language['language_id']; ?>" class="form-control" />
                  </div>
                  <div class="col-sm-2">
                      <a style="margin-top:-3px;" href="" id="thumb-image<?php echo $language['language_id']; ?>" data-toggle="image" class="img-thumbnail">
                        <img style="width: 30px;height: 30px;" src="<?php echo isset($banner_image_1[$language['language_id']]['image']) ? '../image/'.$banner_image_1[$language['language_id']]['image'] : $placeholder; ?>" />
                      </a>
                      <input type="hidden" name="banner_image_1[<?php echo $language['language_id']; ?>][image]" value="<?php echo $banner_image_1[$language['language_id']]['image']; ?>" id="banner_image_1<?php echo $language['language_id']; ?>" />
                  </div>
                  <div class="col-sm-5">
                      <textarea name="module_description_1[<?php echo $language['language_id']; ?>][description]" placeholder="<?php echo $entry_description; ?>" id="input-module_description_1<?php echo $language['language_id']; ?>" class="form-control summernote"><?php echo isset($module_description_1[$language['language_id']]['description']) ? $module_description_1[$language['language_id']]['description'] : ''; ?></textarea>
                  </div>
                  
                </div>
                
                
                
                
                
                
                
                
                <div class="form-group">
                  <label class="col-sm-1 control-label" for="input-title<?php echo $language['language_id']; ?>"><?php echo $entry_punktplaseholder; ?></label>
                  <div class="col-sm-2">
                        <input type="text" name="name_2[<?php echo $language['language_id']; ?>][title]" value="<?php echo isset($name_2[$language['language_id']]['title']) ? $name_2[$language['language_id']]['title'] : ''; ?>" placeholder="<?php echo $entry_nameplaseholder; ?>" id="input-height<?php echo $language['language_id']; ?>" class="form-control" />
                  </div>
                  <div class="col-sm-2">
                        <input type="text" name="url_2[<?php echo $language['language_id']; ?>][title]" value="<?php echo isset($url_2[$language['language_id']]['title']) ? $url_2[$language['language_id']]['title'] : ''; ?>" placeholder="<?php echo $entry_uriplaseholder; ?>" id="input-url_1<?php echo $language['language_id']; ?>" class="form-control" />
                  </div>
                  <div class="col-sm-2">
                      <a style="margin-top:-3px;" href="" id="thumb-image_2_<?php echo $language['language_id']; ?>" data-toggle="image" class="img-thumbnail">
                        <img style="width: 30px;height: 30px;" src="<?php echo isset($banner_image_2[$language['language_id']]['image']) ? '../image/'.$banner_image_2[$language['language_id']]['image'] : $placeholder; ?>" />
                      </a>
                      <input type="hidden" name="banner_image_2[<?php echo $language['language_id']; ?>][image]" value="<?php echo $banner_image_2[$language['language_id']]['image']; ?>" id="banner_image_2<?php echo $language['language_id']; ?>" />
                  </div>
                  <div class="col-sm-5">
                      <textarea name="module_description_2[<?php echo $language['language_id']; ?>][description]" placeholder="<?php echo $entry_description; ?>" id="module_description_2input-description<?php echo $language['language_id']; ?>" class="form-control summernote"><?php echo isset($module_description_2[$language['language_id']]['description']) ? $module_description_2[$language['language_id']]['description'] : ''; ?></textarea>
                  </div>
                  
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="form-group">
                <!-- nev block --> 
                </div>
                
              </div>
              <?php } ?>
            </div>
          </div>
          
          
          
          
          
          
          
          
          
        </form>
      </div>
    </div>
  </div>
  
  
    <div style="text-align:center; opacity: .5">
        <p>Version 1.0 | <a target="_blank" href="https://github.com/pomerla/navmod_os2">Исходный код на GitHub</a><br/>
        Доработка и поддержка: Александр Мороз <br/>(Skype: morro771, Viber: +380679929918, email: aleksmorro@gmail.com)</p>
    </div>
  
  
  
  
  </div>
  
<script type="text/javascript"><!--
$('#language a:first').tab('show');
//--></script>
<?php echo $footer; ?>

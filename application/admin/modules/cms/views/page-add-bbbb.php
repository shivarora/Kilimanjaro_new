<div class="breadcrumb-wrapper hidden-xs">
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="user/dashboard">Dashboard</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="cms/page/index/">Pages</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="active">Add Page</li>
    </ol>
</div>
<?php $this->load->view('inc-messages'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-tab panel-tab-double rounded shadow">
            <div class="panel-heading no-padding">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab2-1" data-toggle="tab">
                            <i class="fa fa-user"></i>
                            <div>
                                <span class="text-strong">Main</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab2-2" data-toggle="tab">
                            <i class="fa fa-file-text"></i>
                            <div>
                                <span class="text-strong">Metadata</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <form action="cms/page/add/" method="post" enctype="multipart/form-data" name="regFrm" id="regFrm">
                <div class="panel-body">
                    <div class="tab-content clearfix">
                        <div class="tab-pane fade in active" id="tab2-1">
                            <div class="col-lg-12 padding-0">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Page Title <span class="error">*</span></label>
                                        <input type="text" name="title" id="title" class="form-control" value="<?php echo set_value('title'); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Page URI&nbsp;(Will be auto-generated if left blank)</label>
                                        <input name="page_uri" type="text" class="form-control" id="page_uri" value="<?php echo set_value('page_uri'); ?>" size="45">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 padding-0">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Parent Page <span class="error">*</span></label>
                                        <?php echo form_dropdown('parent_id', $parent, set_value('parent_id'), ' class="form-control"'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Template <span class="error">*</span></label>
                                        <?php echo form_dropdown('page_template_id', $page_template, set_value('page_template_id'), ' class="form-control"'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 padding-0">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Browser Title</label>
                                        <input name="browser_title" type="text" class="form-control" id="browser_title" value="<?php echo set_value('browser_title'); ?>" size="45">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Page Banner</label>
                                        <div data-provides="fileinput" class="fileinput fileinput-new input-group">
                                            <div data-trigger="fileinput" class="form-control"><i class="fa fa-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                            <span class="input-group-addon btn btn-success btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input name="page_banner" type="file" id="page_banner"></span>
                                            <a data-dismiss="fileinput" class="input-group-addon btn btn-danger fileinput-exists" href="#">Remove</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label">Contents</label>
                                    <textarea name="contents" id="summernote-textarea" class="form-control" rows="10" placeholder="Enter text ..."><?php echo set_value('contents'); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2-2">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label">Meta Keywords</label>
                                    <textarea name="meta_keywords" cols="40" rows="4" style="width:99%" class="form-control" id="meta_keywords"><?php echo set_value('meta_keywords'); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label">Meta Description</label>
                                    <textarea name="meta_description" cols="40" rows="4" style="width:99%" class="form-control" id="meta_description"><?php echo set_value('meta_description'); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label">Additional Header Contents</label>
                                    <textarea name="before_head_close" cols="40" rows="4" style="width:99%" class="form-control" id="before_head_close"><?php echo set_value('before_head_close'); ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label">Additional Footer Contents</label>
                                    <textarea name="before_body_close" cols="40" rows="4" style="width:99%" class="form-control" id="before_body_close"><?php echo set_value('before_body_close'); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="text-align:center">
                        Fields marked with <span class="error">*</span> are required.<br />
                        <input name="v_image" type="hidden" id="v_image" value="1" />
                        <input type="hidden" name="menu_title" id="menu_title" value="" >
                        <input type="hidden" name="show_in_menu" id="show_in_menu" value="0" >
                        <input type="submit" name="button" id="button" value="Submit" class="btn btn-primary btn-lg btn-push">
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
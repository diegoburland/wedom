<div class="mkdf-tabs-content">
    <div class="tab-content">
        <div class="tab-pane fade in active" id="import">
            <div class="mkdf-tab-content">
                <div class="mkdf-page-title-holder clearfix">
                    <h2 class="mkdf-page-title"><?php esc_html_e( 'Import', 'burst' ); ?></h2>
                </div>
                <form method="post" class="mkd_ajax_form mkdf-import-page-holder">
                    <div class="mkdf-page-form">
                        <div class="mkdf-page-form-section-holder">
                            <h3 class="mkdf-page-section-title"><?php esc_html_e( 'Import Demo Content', 'burst' ); ?></h3>
                            <div class="mkdf-page-form-section">
                                <div class="mkdf-field-desc">
                                    <h4><?php esc_html_e( 'Import', 'burst' ); ?></h4>

                                    <p><?php esc_html_e( 'Choose demo content you want to import', 'burst' ); ?></p>
                                </div>
                                <!-- close div.mkdf-field-desc -->

                                <div class="mkdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_example" id="import_example" class="form-control mkdf-form-element dependence">
                                                    <option value="landing"><?php esc_html_e( 'Burst Intro', 'burst' ); ?></option>
                                                    <option value="burst"><?php esc_html_e( 'Burst Original', 'burst' ); ?></option>
                                                    <option value="burst1"><?php esc_html_e( 'Burst 1 - One Page', 'burst' ); ?></option>
                                                    <option value="burst2"><?php esc_html_e( 'Burst 2 - Left Menu', 'burst' ); ?></option>
                                                    <option value="burst3"><?php esc_html_e( 'Burst 3 - Classic', 'burst' ); ?></option>
                                                    <option value="burst4"><?php esc_html_e( 'Burst 4 - Standard', 'burst' ); ?></option>
                                                    <option value="burst5"><?php esc_html_e( 'Burst 5 - Passepartout', 'burst' ); ?></option>
                                                    <option value="burst6"><?php esc_html_e( 'Burst 6 - Split', 'burst' ); ?></option>
                                                    <option value="burst7"><?php esc_html_e( 'Burst 7 - Shop', 'burst' ); ?></option>
                                                    <option value="burst8"><?php esc_html_e( 'Burst 8 - Masonry', 'burst' ); ?></option>
                                                    <option value="burst9"><?php esc_html_e( 'Burst 9 - Blog', 'burst' ); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.mkdf-section-content -->

                            </div>

                            <div class="mkdf-page-form-section">


                                <div class="mkdf-field-desc">
                                    <h4><?php esc_html_e( 'Import Type', 'burst' ); ?></h4>

                                    <p><?php esc_html_e( 'Enabling this option will switch to a Side Position (default is Top Position)', 'burst' ); ?></p>
                                </div>
                                <!-- close div.mkdf-field-desc -->



                                <div class="mkdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_option" id="import_option" class="form-control mkdf-form-element">
                                                    <option value=""><?php esc_html_e( 'Please Select', 'burst' ); ?></option>
                                                    <option value="complete_content"><?php esc_html_e( 'All', 'burst' ); ?></option>
                                                    <option value="content"><?php esc_html_e( 'Content', 'burst' ); ?></option>
                                                    <option value="widgets"><?php esc_html_e( 'Widgets', 'burst' ); ?></option>
                                                    <option value="options"><?php esc_html_e( 'Options', 'burst' ); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.mkdf-section-content -->

                            </div>
                            <div class="mkdf-page-form-section">


                                <div class="mkdf-field-desc">
                                    <h4><?php esc_html_e( 'Import attachments', 'burst' ); ?></h4>

                                    <p>Do you want to import media files?</p>
                                </div>
                                <!-- close div.mkdf-field-desc -->
                                <div class="mkdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="field switch">
                                                    <label class="cb-enable dependence"><span><?php esc_html_e( 'Yes', 'burst' ); ?></span></label>
                                                    <label class="cb-disable selected dependence"><span><?php esc_html_e( 'No', 'burst' ); ?></span></label>
                                                    <input type="checkbox" id="import_attachments" class="checkbox" name="import_attachments" value="1">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.mkdf-section-content -->
                            </div>
                            <div class="mkdf-page-form-section">


                                <div class="mkdf-field-desc">
                                    <input type="submit" class="btn btn-primary btn-sm " value="<?php esc_attr_e( 'Import', 'burst' ); ?>" name="import" id="import_demo_data" />
                                </div>
                                <!-- close div.mkdf-field-desc -->
                                <div class="mkdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="import_load"><span><?php esc_html_e('The import process may take some time. Please be patient.', 'burst') ?> </span><br />
                                                    <div class="mkd-progress-bar-wrapper html5-progress-bar">
                                                        <div class="progress-bar-wrapper">
                                                            <progress id="progressbar" value="0" max="100"></progress>
                                                        </div>
                                                        <div class="progress-value"><?php esc_html_e( '0%', 'burst' ); ?></div>
                                                        <div class="progress-bar-message">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.mkdf-section-content -->
                            </div>
                            <div class="mkdf-page-form-section mkdf-import-button-wrapper">

                                <div class="alert alert-warning">
                                    <strong><?php esc_html_e('Important notes:', 'burst') ?></strong>
                                    <ul>
                                        <li><?php esc_html_e('Please note that import process will take time needed to download all attachments from demo web site.', 'burst'); ?></li>
                                        <li> <?php esc_html_e('If you plan to use shop, please install WooCommerce before you run import.', 'burst')?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div><!-- close mkdf-tab-content -->
        </div>
    </div>
</div> <!-- close div.mkdf-tabs-content -->

<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $(document).on('click', '#import_demo_data', function(e) {
                e.preventDefault();
                if (confirm('Are you sure, you want to import Demo Data now?')) {
                    $('.import_load').css('display','block');
                    var progressbar = $('#progressbar');
                    var import_opt = $( "#import_option" ).val();
                    var import_expl = $( "#import_example" ).val();
                    var p = 0;
                    if(import_opt == 'content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'burst_content_0'+i+'.xml';
                            else str = 'burst_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'mkd_dataImport',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p == 90) {
                                        str = 'burst_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'mkd_dataImport',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                p+= 10;
                                                $('.progress-value').html((p) + '%');
                                                progressbar.val(p);
                                                $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'burst' ); ?></strong></div>');
                                            },
                                            error: function(MLHttpRequest, textStatus, errorThrown){
                                            }
                                        });
                                    }
                                },
                                error: function(MLHttpRequest, textStatus, errorThrown){
                                }
                            });
                        }
                    } else if(import_opt == 'widgets') {
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'mkd_widgetsImport',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            },
                            error: function(MLHttpRequest, textStatus, errorThrown){
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'burst' ); ?></strong></div>');
                    } else if(import_opt == 'options'){
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'mkd_optionsImport',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            },
                            error: function(MLHttpRequest, textStatus, errorThrown){
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'burst' ); ?></strong></div>');
                    }else if(import_opt == 'complete_content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'burst_content_0'+i+'.xml';
                            else str = 'burst_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'mkd_dataImport',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p == 90) {
                                        str = 'burst_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'mkd_dataImport',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                jQuery.ajax({
                                                    type: 'POST',
                                                    url: ajaxurl,
                                                    data: {
                                                        action: 'mkd_otherImport',
                                                        example: import_expl
                                                    },
                                                    success: function(data, textStatus, XMLHttpRequest){
                                                        //alert(data);
                                                        $('.progress-value').html((100) + '%');
                                                        progressbar.val(100);
                                                        $('.progress-bar-message').html('<div class="alert alert-success"><?php esc_html_e( 'Import is completed.', 'burst' ); ?></div>');
                                                    },
                                                    error: function(MLHttpRequest, textStatus, errorThrown){
                                                    }
                                                });
                                            },
                                            error: function(MLHttpRequest, textStatus, errorThrown){
                                            }
                                        });
                                    }
                                },
                                error: function(MLHttpRequest, textStatus, errorThrown){
                                }
                            });
                        }
                    }
                }
                return false;
            });
        });
    })(jQuery);

</script>
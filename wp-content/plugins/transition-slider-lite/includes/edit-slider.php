<div class='wrap' style="display: none;">
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <div id="post-body-content">
                <div id='edit-slider' style="display: ">
                    <form method="post" id="slider-options-form" enctype="multipart/form-data" action="admin-ajax.php?page=transition_slider_admin&action=save_settings&id=<?php echo( esc_html($current_id));?>">

                        <div id="STX-admin" class="STX-admin">
                            <div class="STX-nav">
                                <div class="STX-header-admin-nav STX-header-right">
                                    <div class="STX-nav-logo"></div>
                                    <a href="admin.php?page=transition_slider_admin" class="STX-h4 STX-btn-topbar-edit STX-btn-dashboard-edit" data-form-name="dashboard"><?php esc_html_e( 'Dashboard', 'stx' ); ?></a>
                                    <a class="STX-h4 STX-active STX-btn-topbar-edit btn-slider-name" data-form-name="slider-name"></a>
                                </div>

                                                                <div class="STX-header-right-nav">
                                    <a class="STX-nav-go-pro" href="https://codecanyon.net/item/transition-slider-wordpress-plugin/23531533?ref=creativeinteractivemedia&amp;ref2=wporg" target="_blank" deluminate_imagetype="unknown">GO PRO VERSION!</a>
                                </div>

                                                            </div>

                                                        <div style="font-size: 14px;background-color: #f8bf3a;border-radius: 4px;padding: 4px;margin: 20px 0px 0px 0px;text-align: center;color: #fff;"><div>This is Transition Slider Lite. Get PRO version to enable more features - premium templates, import &amp; export sliders, more options for slider responsive size.</div></div>

                                                        <div class="STX-admin-content STX-table STX-table-fixed STX-content">
                                <div class="STX-tr">
                                    <div class="STX-edit-wrapp STX-td STX-content-base-bg">
                                        <div class="STX-heading-bar ">
                                            <div class="STX-heading-bar-left">
                                                <div class="STX-h1 STX-heading edit-slider-text" data-form-name="slider-name"><?php esc_html_e( 'Edit Slider', 'stx' ); ?></div>
                                            </div>
                                            <div class="transition-slider-sticky-btns">
                                                <a id="transition-slider-preview" class="slider-preview-btn-disabled slider-preview-btn btns-dashboard-nav slider-preview" title="Preview"><?php esc_html_e( 'PREVIEW', 'stx' ); ?></a>
                                                <input type="submit" form="slider-options-form" title="Save" value="<?php esc_html_e( 'SAVE', 'stx' ); ?>" class="slider-save-btn-disabled slider-save-btn btns-dashboard-nav"/>
                                                <a class="delete-all-slides-button" title="Delete all slides">
                                                    <div class="STX-slider-trash-btn-large-disabled STX-slider-trash-btn-large btns-dashboard-nav"></div>
                                                </a>
                                            </div>
                                            <div class="STX-saved-notification-wrapper">
                                                <div class="STX-saved-notification-content"><?php esc_html_e( 'Slider saved', 'stx' ); ?></div>
                                            </div>
                                        </div>
                                        <div class="STX-slides-container ui-sortable">
                                        </div>
                                        <div class="STX-adding-STX-slides-container">
                                            <div class="STX-edit-slides-box STX-rect STX-h3 STX-uc">
                                                <div class="STX-edit-slides-box-small-image-slide STX-create STX-btn STX-btn-l STX-button-green STX-radius-global STX-uc STX-h3">
                                                    <a class="add-slides-button " data-uploader-title="Add slide to slider" data-uploader-button-text="Add slide"><?php esc_html_e( 'ADD NEW SLIDE', 'stx' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="STX-main-table-wrapp" style="display: none;">
                                            <div class="STX-td STX-sidebar STX-sidebar-base-bg">
                                                <dl class="STX-list STX-h3">
                                                    <dt><a class="STX-btn-menu" data-form-name="publish"><?php esc_html_e( 'Publish', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="general_settings"><?php esc_html_e( 'General', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="size"><?php esc_html_e( 'Size', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="layer"><?php esc_html_e( 'Layer', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="autoplay"><?php esc_html_e( 'Autoplay', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="buttons"><?php esc_html_e( 'Video', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="arrows"><?php esc_html_e( 'Navigation', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="wheel_navigation"><?php esc_html_e( 'Wheel Navigation', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="pagination"><?php esc_html_e( 'Pagination', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="thumbs"><?php esc_html_e( 'Thumbnails', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="hash_navigation"><?php esc_html_e( 'Hash navigation', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="loading"><?php esc_html_e( 'Loading', 'stx' ); ?></a></dt>
                                                    <dt><a class="STX-btn-menu" data-form-name="lightbox"><?php esc_html_e( 'Lightbox', 'stx' ); ?></a></dt>
                                                </dl>
                                            </div>
                                            <div class="general-settings-form">
                                                <div class="slider-options-wrappper">
                                                    <div class="column-left">
                                                        <div class="options_publish STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Publish', 'stx' ); ?></div>
                                                            <div class="STX-publish-table-wrap">
                                                                <table class="form-table" id="slider-options-publish">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_general_settings STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'General', 'stx' ); ?></div>
                                                            <div class="general-settings-table-wrap">
                                                                <table class="form-table" id="slider-options-general-settings">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_size STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Size', 'stx' ); ?></div>
                                                            <div class="size-table-wrap">
                                                                <table class="form-table" id="slider-options-size">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_layer STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Layer', 'stx' ); ?></div>
                                                            <div class="layer-table-wrap">
                                                                <table class="form-table" id="slider-options-layer">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_autoplay STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Autoplay', 'stx' ); ?></div>
                                                            <div class="autoplay-table-wrap">
                                                                <table class="form-table" id="slider-options-autoplay">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_arrows STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Navigation', 'stx' ); ?></div>
                                                            <div class="arrows-table-wrap">
                                                                <table class="form-table" id="slider-options-arrows">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_wheel_navigation STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Wheel Navigation', 'stx' ); ?></div>
                                                            <div class="wheel-navigation-table-wrap">
                                                                <table class="form-table" id="slider-options-wheel-navigation">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_pagination STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Pagination', 'stx' ); ?></div>
                                                            <div class="pagination-table-wrap">
                                                                <table class="form-table" id="slider-options-pagination">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_thumbs STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Thumbnails', 'stx' ); ?></div>
                                                            <div class="thumbs-table-wrap">
                                                                <table class="form-table" id="slider-options-thumbs">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_hash_navigation STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Hash navigation', 'stx' ); ?></div>
                                                            <div class="hash-navigation-table-wrap">
                                                                <table class="form-table" id="slider-options-hash-navigation">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_buttons STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Video', 'stx' ); ?></div>
                                                            <div class="buttons-table-wrap">
                                                                <table class="form-table" id="slider-options-buttons">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_loading STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Loading', 'stx' ); ?></div>
                                                            <div class="loading-table-wrap">
                                                                <table class="form-table" id="slider-options-loading">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="options_lightbox STX-form-tab">
                                                            <div class="STX-h2 STX-content-box-title-bg"><?php esc_html_e( 'Lightbox', 'stx' ); ?></div>
                                                            <div class="lightbox-table-wrap">
                                                                <table class="form-table" id="slider-options-lightbox">
                                                                    <tbody/>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="preview-slider-modal" tabindex="0" class="STX-fullscreen-modal media-modal wp-core-ui" style="display: none;">
    <button type="button" class="media-modal-close STX-modal-close STX-modal-close-preview"><span class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span></button>
    <div class="media-modal-content STX-modal-content">
        <div class="edit-attachment-frame mode-select hide-menu hide-router">
            <div class="edit-media-header">
            </div>
            <div class="media-frame-title STX-modal-title"><h1>Slider Preview</h1></div>
            <div class="media-frame-content STX-modal-frame-content">
                <div id="slider-preview-container">
                    <div id="slider-preview"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="edit-slide-modal" tabindex="0" class="STX-fullscreen-modal media-modal wp-core-ui" style="display: none;">
    <div class="media-modal-content STX-modal-content">
        <div class="edit-attachment-frame mode-select hide-menu hide-router">
            <div class="edit-media-header">
                <div class="media-frame-title STX-modal-title"><h1>Edit slide 1</h1></div>
                <div class="STX-header-buttons">
                    <div class="STX-saved-notification-wrapper STX-edit-slide-notification">
                        <div class="STX-saved-notification-content STX-edit-slide-notification-content"><?php esc_html_e( 'Slider saved', 'stx' ); ?></div>
                    </div>
                    <button class="STX-header-button STX-button-modal-previous">&lt; PREVIOUS SLIDE</button>
                    <button class="STX-header-button STX-button-modal-next">NEXT SLIDE &gt;</button>
                    <button class="STX-header-button STX-button-modal-save" disabled="disabled">SAVE</button>
                    <button class="STX-header-button STX-button-modal-close">BACK</button>
                </div>
            </div>

            <div class="media-frame-content STX-modal-frame-content">

                <div tabindex="0" data-id="185" class="attachment-details save-ready">

                    <div class="slider-preview-wrapper attachment-media-view landscape">
                        <div class="layer-list-popup">
                            <div class="layer-list-popup-header">
                                <div class="layer-list-popup-dropdown"></div>
                                <div class="layer-list-popup-title">Layers</div>
                                <div class="layer-list-popup-close"></div>
                            </div>
                            <ul class="layers-wrapper"></ul>
                        </div>



                                                <div class="slider-preview-scroll">
                            <div class="slider-preview-area" ondrop="">
                                <div class="video-container"></div>

                                <div class="stx-layers">

                                    <div class="stx-layers-canvas"></div>

                                    <table class="stx-layers-content">
                                        <tr class="row-top">
                                            <td align="left" class="col-left"></td>
                                            <td align="center" class="col-center"></td>
                                            <td align="right" class="col-right"></td>
                                        </tr>
                                        <tr class="row-center">
                                            <td align="left" class="col-left"></td>
                                            <td align="center" class="col-center"></td>
                                            <td align="right" class="col-right"></td>
                                        </tr>
                                        <tr class="row-bottom">
                                            <td align="left" class="col-left"></td>
                                            <td align="center" class="col-center"></td>
                                            <td align="right" class="col-right"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                            <div class="right-click-menu" style="display: none;">
                                <ul class="menu-options">
                                    <li class="menu-option menu-option-copy">Copy</li>
                                    <li class="menu-option menu-option-paste menu-option-disabled">Paste</li>
                                    <li class="menu-option menu-option-duplicate">Duplicate</li>
                                    <li class="menu-option menu-option-delete">Delete</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="slide-settings-main-menu-wrapper">
                        <div class="slide-settings-main-menu-title">Slide Settings</div>

                        <div class="slide-settings-tabs-wrapper">
                            <ul class="slide-settings-tabs">
                                <li class="slide-tab-slide"><a href="#tabs-slide">Slide</a></li>
                                <li class="slide-tab-layer"><a href="#tabs-layer">Layers</a></li>
                            </ul>
                            <div class="slide-settings-tabs-content-wrapper">
                                <div id="tabs-slide" class="settings">
                                    <div class="accordion">
                                        <h3 class="slide-settings-accordion-menu">Background</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title">Choose Image or Video</div>
                                            <input type="hidden" class="STX-element-input-button-left" placeholder="Media path..." id="src" name="src">
                                            <div class="STX-slide-image-preview STX-fullline-element STX-slide-src">
                                                <img class="STX-slide-src-preview">
                                                <video class="STX-slide-src-preview-video" preload="metadata">
                                            </div>
                                        </div>

                                        <h3 class="slide-settings-accordion-menu">Thumbnail</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title">Choose thumbnail image</div>
                                            <input type="hidden" class="STX-element-input-button-left" placeholder="Media path..." id="thumbSrc" name="thumbSrc">
                                            <div class="STX-slide-thumbnail-preview STX-fullline-element STX-slide-thumbSrc"></div>
                                        </div>

                                        <h3 class="slide-settings-accordion-menu">Transition</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title STX-fullline-element">Effect</div>
                                            <select class="STX-element-dropdown STX-fullline-element" name="transitionEffect" id="transitionEffect">
                                                <option value="">Default</option>
                                                <option value="slide">Slide</option>
                                                <option value="roll">Roll</option>
                                                <option value="stretch">Stretch</option>
                                                <option value="warp">Warp</option>
                                                <option value="zoom">Zoom</option>
                                                <option value="powerzoom">Power zoom</option>
                                                <option value="crossfade">Crossfade</option>
                                                <option value="flash">Flash</option>
                                                <option value="fade">Fade</option>
                                                <option value="twirl">Twirl</option>
                                                <option value="line">Line</option>
                                            </select>

                                            <div id="setting-direction">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Effect Direction</div>
                                                <select class="STX-element-dropdown STX-inline-element-right STX-row-size60" name="direction" id="direction">
                                                </select>
                                            </div>

                                            <div id="setting-easing">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Effect Easing</div>
                                                <select class="STX-element-dropdown STX-inline-element-right STX-row-size60" name="easing" id="easing">
                                                </select>
                                            </div>

                                            <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Duration</div>
                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input class="STX-element-input-label-left" type="text" id="transitionDuration" name="transitionDuration">
                                                <span class="STX-element-input-label-right input-group-text">ms</span>
                                            </div>

                                            <div id="setting-brightness" >
                                                <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Brightness</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                    <input class="STX-element-input-label-left" type="number" min="0" max="10" id="brightness" name="brightness">
                                                </div>

                                            </div>

                                            <div id="setting-distance" >
                                                <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Distance</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                    <input class="STX-element-input-label-left" type="number" min="0" max="10" id="distance" name="distance">
                                                </div>
                                            </div>

                                            <div id="setting-blur" >
                                                <div class="STX-element-title STX-inline-element-left STX-row-size70">Effect Blur</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                    <input class="STX-element-input-label-left" type="number" min="0" max="10" id="blur" name="blur">
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="slide-settings-accordion-menu">Advanced</h3>
                                        <div class="slide-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Full Slide Link</div>
                                            <input type="text" name="url" id="url" class="STX-element-input STX-inline-element-right STX-row-size60">

                                            <input type="checkbox" name="urlTarget" id="urlTarget" aria-label="Open in new window" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                            <div class="STX-element-title STX-inline-element-right STX-row-size90">Open link in new window</div>

                                            <input type="checkbox" name="invertSelectorColor" id="invertSelectorColor" aria-label="Invert menu colors" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                            <div class="STX-element-title STX-inline-element-right STX-row-size90">Invert menu colors</div>
                                        </div>
                                    </div>

                                </div>


                                <div id="tabs-layer">

                                    <button class="STX-elements-item-text add-text" draggable="true">Text</button>
                                    <button class="STX-elements-item-image add-image" draggable="true">Image</button>
                                    <button class="STX-elements-item-button add-button" draggable="true">Button</button>
                                    <button class="STX-elements-item-video add-video" draggable="true">Video</button>


                                                                    </div>
                            </div>
                        </div>

                        <div class="element-settings-tabs-wrapper">
                            <ul class="element-settings-tabs">
                                <li class="element-tab-content"><a href="#tabs-content">Content</a></li>
                                <li class="element-tab-style"><a href="#tabs-style">Style</a></li>
                                <li class="element-tab-advanced"><a href="#tabs-advanced">Advanced</a></li>
                            </ul>
                            <div class="element-settings-tabs-content-wrapper">

                                <div id="tabs-content">

                                    <div class="image-element-settings">

                                        <div class="accordion">
                                            <h3 class="slide-settings-accordion-menu">Image</h3>
                                            <div class="element-settings slide-settings-accordion-content">
                                                <div class="STX-element-title">Choose image</div>
                                                <div class="STX-element-image-preview STX-fullline-element"></div>
                                                <input type="hidden" id="src" name="src">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="video-element-settings">

                                        <div class="accordion">
                                            <h3 class="slide-settings-accordion-menu">Video</h3>
                                            <div class="element-settings slide-settings-accordion-content">
                                                <div class="STX-element-title">Choose video</div>
                                                <video class="STX-element-video-preview" preload="metadata" style="display: inline-block;">
                                                    <input type="text" id="src" name="src">
                                            </div>
                                        </div>

                                    </div>



                                                                        <div class="text-element-settings">

                                        <div class="accordion">
                                            <h3 class="element-settings-accordion-menu">General</h3>
                                            <div class="element-settings element-settings-accordion-content">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size100">Text</div>
                                                <textarea id="text-content" name="content" class="STX-element-textarea STX-fullline-element">Add text</textarea>

                                                <div class="STX-element-title STX-inline-element-right STX-row-size100">HTML Tag</div>
                                                <select name="htmlTag" class="STX-element-dropdown STX-inline-element-right STX-row-size40">
                                                    <option>H1</option>
                                                    <option>h2</option>
                                                    <option>h3</option>
                                                    <option>h4</option>
                                                    <option>h5</option>
                                                    <option>h6</option>
                                                    <option>div</option>
                                                    <option>span</option>
                                                    <option>p</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="accordion">
                                            <h3 class="element-settings-accordion-menu">Templates</h3>
                                            <div class="element-settings-accordion-content" style="background: rgba(0,0,0,.1);">
                                                <div class="element-template-wrapper">
                                                    <text class="element-template text-template-1">
                                                        <span>Text 1</span>
                                                    </text>
                                                </div>
                                                <div class="element-template-wrapper">
                                                    <text class="element-template text-template-2">
                                                        <span>Text 2</span>
                                                    </text>
                                                </div>
                                                <div class="element-template-wrapper">
                                                    <text class="element-template text-template-3">
                                                        <span>Text 3</span>
                                                    </text>
                                                </div>
                                                <div class="element-template-wrapper">
                                                    <text class="element-template text-template-4">
                                                        <span>Text 4</span>
                                                    </text>
                                                </div>
                                                <div class="element-template-wrapper">
                                                    <text class="element-template text-template-5">
                                                        <span>Text 5</span>
                                                    </text>
                                                </div>

                                                                                            </div>
                                        </div>

                                    </div>

                                    <div class="button-element-settings">

                                        <div class="accordion">
                                            <h3 class="element-settings-accordion-menu">Button</h3>
                                            <div class="element-settings element-settings-accordion-content">
                                                <div class="STX-element-title">Label</div>
                                                <textarea id="button-content" name="content" class="STX-element-textarea STX-fullline-element">Add text</textarea>

                                                <div class="STX-element-title STX-inline-element-left">Link</div>
                                                <input type="text" class="STX-element-input STX-inline-element-left" name="url">

                                                <input type="checkbox" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" name="urlTargetBlank">
                                                <div class="STX-element-title STX-inline-element-right STX-row-size90">Open in new tab</div>
                                            </div>
                                        </div>


                                        <div class="accordion">
                                            <h3 class="element-settings-accordion-menu">Templates</h3>
                                            <div class="element-settings-accordion-content" style="background: rgba(0,0,0,.1);">

                                                <div class="element-template-wrapper">
                                                    <button class="element-template button-template-1">
                                                        <span>Style 1</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template button-template-2">
                                                        <span>Style 2</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template button-template-3">
                                                        <span>Style 3</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template  button-template-4">
                                                        <span>Style 4</span>
                                                    </button>
                                                </div>

                                                <div class="element-template-wrapper">
                                                    <button class="element-template  button-template-5">
                                                        <span>Style 5</span>
                                                    </button>
                                                </div>

                                                                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <div id="tabs-style">

                                    <div class="accordion">
                                        <h3 class="text-element-settings button-element-settings element-settings-accordion-menu">Typography</h3>
                                        <div class="text-element-settings button-element-settings element-settings-accordion-content">
                                            <div class="style-font-wrapper">
                                                <ul class="style-settings-tabs">
                                                    <li class="style-tab-font"><a href="#tab-style-font-normal">NORMAL</a></li>
                                                    <li class="style-tab-font"><a href="#tab-style-font-hover">HOVER</a></li>
                                                </ul>
                                                <div class="style-settings-tabs-content-wrapper">

                                                    <div id="tab-style-font-normal" class="element-settings subtab-style">

                                                        <div class="STX-element-title STX-inline-element-left STX-row-size60">Family</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Color</div>

                                                        <select class="googleFontList STX-element-dropdown STX-inline-element-left STX-row-size60" name="fontFamily"></select>
                                                        <input type="text" class="color-picker STX-inline-element-right STX-row-size40" data-alpha="true" name="textColor">


                                                        <div class="STX-element-title STX-inline-element-left STX-row-size30">Size</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Font weight</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size30">Line height</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="fontSize" class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,em,rem,vw">
                                                            </div>
                                                        </div>
                                                        <select name="fontWeight" class="STX-element-dropdown STX-inline-element-right STX-row-size40">
                                                            <option>100</option>
                                                            <option>200</option>
                                                            <option>300</option>
                                                            <option>400</option>
                                                            <option>500</option>
                                                            <option>600</option>
                                                            <option>700</option>
                                                            <option>800</option>
                                                            <option>900</option>
                                                            <option>bold</option>
                                                            <option>bolder</option>
                                                            <option>inherit</option>
                                                            <option>initial</option>
                                                            <option>lighter</option>
                                                            <option>normal</option>
                                                            <option>unset</option>
                                                        </select>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="lineHeight" class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,em">
                                                            </div>
                                                        </div>

                                                        <div class="STX-element-title STX-inline-element-right STX-row-size100">Letter spacing</div>
                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="letterSpacing"class="STX-element-input-label-left">
                                                            <span class="STX-element-input-label-right input-group-text">px</span>
                                                        </div>

                                                        <div class="STX-element-title STX-inline-element-left STX-row-size100">Text align</div>

                                                        <div class="STX-element-select STX-inline-element-left STX-row-size100">
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-left" name="textAlign" value="left">
                                                            <label class="STX-element-select-label STX-text-left" for="STX-element-text-font-normal-textAlign-left"></label>
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-center" name="textAlign" value="center">
                                                            <label class="STX-element-select-label STX-text-center" for="STX-element-text-font-normal-textAlign-center"></label>
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-right" name="textAlign" value="right">
                                                            <label class="STX-element-select-label STX-text-right" for="STX-element-text-font-normal-textAlign-right"></label>
                                                            <input type="radio" id="STX-element-text-font-normal-textAlign-justify" name="textAlign" value="justify">
                                                            <label class="STX-element-select-label STX-text-justify" for="STX-element-text-font-normal-textAlign-justify"></label>
                                                        </div>

                                                    </div>

                                                    <div id="tab-style-font-hover" class="element-settings-hover subtab-style">
                                                        <div class="STX-element-title STX-inline-element-left">Color</div>
                                                        <input type="text" class="color-picker STX-inline-element-left STX-row-size40 has-hover" data-alpha="true" name="textColor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Background</h3>
                                        <div class="element-settings-accordion-content">
                                            <div class="style-font-wrapper">
                                                <ul class="style-settings-tabs">
                                                    <li class="style-tab-font"><a href="#tab-style-style-normal">NORMAL</a></li>
                                                    <li class="style-tab-font"><a href="#tab-style-style-hover">HOVER</a></li>
                                                </ul>
                                                <div class="style-settings-tabs-content-wrapper">
                                                    <div id="tab-style-style-normal" class="element-settings subtab-style">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size100">Background color</div>
                                                        <input type="text" class="color-picker STX-inline-element-left STX-row-size100" data-alpha="true" name="backgroundColor">
                                                    </div>

                                                    <div id="tab-style-style-hover" class="element-settings-hover subtab-style ">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size100">Background color</div>
                                                        <div class="STX-inline-element-left STX-row-size100">
                                                            <input type="text" class="color-picker has-hover" data-alpha="true" name="backgroundColor">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Border</h3>
                                        <div class="element-settings-accordion-content">
                                            <div class="style-font-wrapper">
                                                <ul class="style-settings-tabs">
                                                    <li class="style-tab-font"><a href="#tab-style-style-normal">NORMAL</a></li>
                                                    <li class="style-tab-font"><a href="#tab-style-style-hover">HOVER</a></li>
                                                </ul>
                                                <div class="style-settings-tabs-content-wrapper">
                                                    <div id="tab-style-style-normal" class="element-settings subtab-style">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size30">Border</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Border style</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size30">Border color</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" class="STX-element-input-label-left" name="borderWidth">
                                                            <span class="STX-element-input-label-right input-group-text">px</span>
                                                        </div>

                                                        <select class="STX-element-dropdown STX-inline-element-right STX-row-size40" name="borderStyle">
                                                            <option>dotted</option>
                                                            <option>dashed</option>
                                                            <option>solid</option>
                                                            <option>double</option>
                                                            <option>groove</option>
                                                            <option>ridge</option>
                                                            <option>inset</option>
                                                            <option>outset</option>
                                                            <option>none</option>
                                                            <option>hidden</option>
                                                        </select>

                                                        <input type="text" class="color-picker STX-inline-element-right STX-row-size30" data-alpha="true" name="borderColor">

                                                        <div class="STX-element-title STX-inline-element-left">Border radius</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="borderRadius"class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="tab-style-style-hover" class="element-settings-hover subtab-style ">
                                                        <div class="STX-element-title STX-inline-element-left STX-row-size30">Border</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size40">Border style</div>
                                                        <div class="STX-element-title STX-inline-element-right STX-row-size30">Border color</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" class="STX-element-input-label-left" name="borderWidth">
                                                            <span class="STX-element-input-label-right input-group-text">px</span>
                                                        </div>

                                                        <select class="STX-element-dropdown STX-inline-element-right STX-row-size40" name="borderStyle">
                                                            <option>dotted</option>
                                                            <option>dashed</option>
                                                            <option>solid</option>
                                                            <option>double</option>
                                                            <option>groove</option>
                                                            <option>ridge</option>
                                                            <option>inset</option>
                                                            <option>outset</option>
                                                            <option>none</option>
                                                            <option>hidden</option>
                                                        </select>

                                                        <input type="text" class="color-picker STX-inline-element-right STX-row-size30 has-hover" data-alpha="true" name="borderColor">

                                                        <div class="STX-element-title STX-inline-element-left">Border radius</div>

                                                        <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                            <input type="number" name="borderRadius"class="STX-element-input-label-left">
                                                            <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Spacing</h3>
                                        <div class="element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size100">Margin</div>
                                            <ul class="STX-element-dimensions element-settings STX-inline-element-left STX-row-size100">
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginTop">
                                                    <label for="STX-element-dimension-text-style-top-normal" class="STX-element-dimension-label">Top</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginRight">
                                                    <label for="STX-element-dimension-text-style-right-normal" class="STX-element-dimension-label">Right</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginBottom">
                                                    <label for="STX-element-dimension-text-style-bottom-normal" class="STX-element-dimension-label">Bottom</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="marginLeft">
                                                    <label for="STX-element-dimension-text-style-left-normal" class="STX-element-dimension-label">Left</label>
                                                </li>
                                                <li class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </li>

                                            </ul>


                                            <div class="STX-element-title STX-inline-element-left STX-row-size100">Padding</div>
                                            <ul class="STX-element-dimensions element-settings STX-inline-element-left STX-row-size100">
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingTop">
                                                    <label for="STX-element-dimension-text-style-top-normal" class="STX-element-dimension-label">Top</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingRight">
                                                    <label for="STX-element-dimension-text-style-right-normal" class="STX-element-dimension-label">Right</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingBottom">
                                                    <label for="STX-element-dimension-text-style-bottom-normal" class="STX-element-dimension-label">Bottom</label>
                                                </li>
                                                <li class="STX-element-dimension">
                                                    <input type="number" placeholder="" name="paddingLeft">
                                                    <label for="STX-element-dimension-text-style-left-normal" class="STX-element-dimension-label">Left</label>
                                                </li>
                                                <li class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,em,%">
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Position</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size50">Position</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size50">Display</div>

                                            <select name="mode" class="STX-element-dropdown STX-inline-element-left STX-row-size50">
                                                <option value="canvas">absolute</option>
                                                <option value="content">relative</option>
                                            </select>

                                            <select name="display" class="STX-element-dropdown STX-inline-element-left STX-row-size50">
                                                <option>block</option>
                                                <option>inline-block</option>
                                            </select>

                                            <div class="STX-element-title STX-inline-element-left STX-row-size70">Horizontal Align</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Offset</div>
                                            <select name="position.x" class="STX-element-dropdown STX-inline-element-left  STX-row-size70">
                                                <option>left</option>
                                                <option>center</option>
                                                <option>right</option>
                                            </select>
                                            <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                <input name="position.offsetX" type="number" class="STX-element-input-label-left">
                                                <span class="STX-element-input-label-right input-group-text">px</span>
                                            </div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size70">Vertical Align</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Offset</div>
                                            <select name="position.y" class="STX-element-dropdown STX-inline-element-left  STX-row-size70">
                                                <option>top</option>
                                                <option>center</option>
                                                <option>bottom</option>
                                            </select>
                                            <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                <input name="position.offsetY" type="number" class="STX-element-input-label-left">
                                                <span class="STX-element-input-label-right input-group-text">px</span>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Size</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Width</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Min Width</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Max Width</div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size40">
                                                <input type="number" class="STX-element-input-label-left" id="width" name="width">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%,vw">
                                                </div>
                                            </div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="minWidth" name="minWidth">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%,vw">
                                                </div>
                                            </div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="maxWidth" name="maxWidth">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%,vw">
                                                </div>
                                            </div>


                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Height</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Min Height</div>
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Max Height</div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size40">
                                                <input type="number" class="STX-element-input-label-left" id="height" name="height">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </div>
                                            </div>


                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="minHeight" name="height">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </div>
                                            </div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size30">
                                                <input type="number" class="STX-element-input-label-left" id="maxHeight" name="height">
                                                <div class="STX-element-dimension STX-element-dimension-placeholder STX-has-units" data-units="px,%">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="tabs-advanced">

                                    <div class="accordion">

                                        <h3 class="element-settings-accordion-menu">Animation</h3>

                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size40">Animation type</div>
                                            <select name="contentAnimationType" class="STX-element-dropdown STX-inline-element-left STX-row-size40 STX-content-animation-type">
                                                <option>typing</option>
                                                <option>animating</option>
                                                <option>none</option>
                                            </select>

                                            <div class="content-animation-type typing">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Speed</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.speed" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Loop</div>
                                                <div class="STX-inline-element-left STX-row-size40">
                                                    <input type="checkbox" name="typingAnimation.loop" id="typingAnimation-loop" aria-label="Loop" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Loop delay</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.loopDelay" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Cursor</div>
                                                <div class="STX-inline-element-left STX-row-size40">
                                                    <input type="checkbox" name="typingAnimation.cursor" id="typingAnimation-cursor" aria-label="Cursor" class="STX-element-input STX-inline-element-left STX-row-size10 STX-element-checkbox" value="">
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Start delay</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.startDelay" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Freeze at</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.freezeAt" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Unfreeze after</div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size40">
                                                    <input type="number" name="typingAnimation.unfreezeAfter" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                            </div>

                                            <div class="content-animation-type animating">
                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Enter animation</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Speed</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Delay</div>
                                                <select name="startAnimation.animation" class="STX-element-dropdown STX-inline-element-left STX-row-size40 animateCSS">
                                                    <option value="fadeIn">fade in</option>
                                                    <option value="fadeInDown">fade in down</option>
                                                    <option value="fadeInDownBig">fade in down big</option>
                                                    <option value="fadeInLeft">fade in left</option>
                                                    <option value="fadeInLeftBig">fade in left big</option>
                                                    <option value="fadeInRight">fade in right</option>
                                                    <option value="fadeInRightBig">fade in right big</option>
                                                    <option value="fadeInUp">fade in up</option>
                                                    <option value="fadeInUpBig">fade in up big</option>
                                                    <option value="flipInX">flip in x</option>
                                                    <option value="flipInY">flip in y</option>
                                                    <option value="lightSpeedIn">lightspeed in</option>
                                                    <option value="slideInDown">slide in down</option>
                                                    <option value="slideInLeft">slide in left</option>
                                                    <option value="slideInRight">slide in right</option>
                                                    <option value="slideInUp">slide in up</option>
                                                    <option value="bounceIn">bounce in</option>
                                                    <option value="bounceInDown">bounce in down</option>
                                                    <option value="bounceInLeft">bounce in left</option>
                                                    <option value="bounceInRight">bounce in right</option>
                                                    <option value="bounceInUp">bounce in up</option>
                                                    <option value="rotateIn">rotate in</option>
                                                    <option value="rotateInDownLeft">rotate in down left</option>
                                                    <option value="rotateInDownRight">rotate in down right</option>
                                                    <option value="rotateInUpLeft">rotate in up left</option>
                                                    <option value="rotateInUpRight">rotate in up right</option>
                                                    <option value="jackInTheBox">jack in the box</option>
                                                    <option value="rollIn">roll in</option>
                                                    <option value="zoomIn">zoom in</option>
                                                    <option value="zoomInDown">zoom in down</option>
                                                    <option value="zoomInLeft">zoom in left</option>
                                                    <option value="zoomInRight">zoom in right</option>
                                                    <option value="zoomInUp">zoom in up</option>
                                                    <option value="heartBeat">heartbeat</option>
                                                    <option value="bounce">bounce</option>
                                                    <option value="flash">flash</option>
                                                    <option value="pulse">pulse</option>
                                                    <option value="rubberBand">rubber band</option>
                                                    <option value="shake">shake</option>
                                                    <option value="headShake">head shake</option>
                                                    <option value="swing">swing</option>
                                                    <option value="tada">tada</option>
                                                    <option value="wobble">wobble</option>
                                                    <option value="jello">jello</option>
                                                </select>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="startAnimation.speed"class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="startAnimation.delay"class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>


                                                <div class="STX-element-title STX-inline-element-left STX-row-size40">Exit animation</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Speed</div>
                                                <div class="STX-element-title STX-inline-element-left STX-row-size30">Delay</div>
                                                <select name="endAnimation.animation" class="STX-element-dropdown STX-inline-element-left STX-row-size40">
                                                    <option value="fadeOut">fade out</option>
                                                    <option value="fadeOutDown">fade out down</option>
                                                    <option value="fadeOutDownBig">fade out down big</option>
                                                    <option value="fadeOutLeft">fade out left</option>
                                                    <option value="fadeOutLeftBig">fade out left big</option>
                                                    <option value="fadeOutRight">fade out right</option>
                                                    <option value="fadeOutRightBig">fade out right big</option>
                                                    <option value="fadeOutUp">fade out up</option>
                                                    <option value="fadeOutUpBig">fade out up big</option>
                                                    <option value="flipOutX">flip out x</option>
                                                    <option value="flipOutY">flip out y</option>
                                                    <option value="lightSpeedOut">lightspeed out</option>
                                                    <option value="slideOutDown">slide out down</option>
                                                    <option value="slideOutLeft">slide out left</option>
                                                    <option value="slideOutRight">slide out right</option>
                                                    <option value="slideOutUp">slide out up</option>
                                                    <option value="bounceOut">bounce out</option>
                                                    <option value="bounceOutDown">bounce out down</option>
                                                    <option value="bounceOutLeft">bounce out left</option>
                                                    <option value="bounceOutRight">bounce out right</option>
                                                    <option value="bounceOutUp">bounce out up</option>
                                                    <option value="rotateOut">rotate out</option>
                                                    <option value="rotateOutDownLeft">rotate out down left</option>
                                                    <option value="rotateOutDownRight">rotate out down right</option>
                                                    <option value="rotateOutUpLeft">rotate out up left</option>
                                                    <option value="rotateOutUpRight">rotate out up right</option>
                                                    <option value="hinge">hinge</option>
                                                    <option value="jackInTheBox">jack in the box</option>
                                                    <option value="rollOut">roll out</option>
                                                    <option value="zoomOut">zoom out</option>
                                                    <option value="zoomOutDown">zoom out down</option>
                                                    <option value="zoomOutLeft">zoom out left</option>
                                                    <option value="zoomOutRight">zoom out right</option>
                                                    <option value="zoomOutUp">zoom out up</option>
                                                    <option value="heartBeat">heartbeat</option>
                                                    <option value="bounce">bounce</option>
                                                    <option value="flash">flash</option>
                                                    <option value="pulse">pulse</option>
                                                    <option value="rubberBand">rubber band</option>
                                                    <option value="shake">shake</option>
                                                    <option value="headShake">head shake</option>
                                                    <option value="swing">swing</option>
                                                    <option value="tada">tada</option>
                                                    <option value="wobble">wobble</option>
                                                    <option value="jello">jello</option>
                                                </select>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="endAnimation.speed" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                                <div class="STX-element-input-label-wrapper STX-inline-element-left STX-row-size30">
                                                    <input type="number" name="endAnimation.delay" class="STX-element-input-label-left">
                                                    <span class="STX-element-input-label-right input-group-text">ms</span>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="element-settings-accordion-menu">Parallax</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size60">Vertical Parallax</div>

                                            <div class="STX-element-input-label-wrapper STX-inline-element-right STX-row-size40">
                                                <input type="number" min="0" max="1" class="STX-element-input-label-left" id="parallax" name="parallax" style="width: calc(100% - 50px);">
                                                <span class="STX-element-input-label-right input-group-text" style="width: 48px !important;">speed</span>
                                            </div>

                                        </div>


                                        <h3 class="element-settings-accordion-menu">Custom CSS</h3>
                                        <div class="element-settings element-settings-accordion-content">
                                            <textarea name="customCSS" class="STX-element-textarea STX-fullline-element"></textarea>
                                        </div>

                                        <h3 class="element-settings-accordion-menu image-element-settings">On click</h3>
                                        <div class="element-settings element-settings-accordion-content image-element-settings">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Action</div>
                                            <select name="onClick.type" class="STX-element-dropdown STX-inline-element-left STX-row-size70 STX-content-animation-type">
                                                <option>none</option>
                                                <option value="lightbox">Open in lightbox</option>
                                            </select>
                                        </div>

                                        <h3 class="element-settings-accordion-menu video-element-settings">On click</h3>
                                        <div class="element-settings element-settings-accordion-content video-element-settings">
                                            <div class="STX-element-title STX-inline-element-left STX-row-size30">Action</div>
                                            <select name="onClick.type" class="STX-element-dropdown STX-inline-element-left STX-row-size70 STX-content-animation-type">
                                                <option>none</option>
                                                <option value="lightbox">Open in lightbox</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="slide-settings-footer">
                            <button class="btn STX-footer-layer-btn"></button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="media-modal-backdrop" style="display: none;"></div>

<div class="STX-loader-container"><div class="STX-loader"></div></div>


 <?php
    wp_enqueue_media();

	wp_enqueue_script("transitionslider-typeit");
	wp_enqueue_script("transitionslider-lib-three");
	wp_enqueue_script("transitionslider-lib-swiper");
	wp_enqueue_script("transitionslider-lib-color-pickr");
	wp_enqueue_script("transitionslider-lib-tween");
	wp_enqueue_script("transitionslider-lib-webfontloader");
	wp_enqueue_script("transitionslider-build");

    wp_enqueue_script('transitionslider-admin');

    wp_enqueue_style('transitionslider-animate-css');
    wp_enqueue_style( "transitionslider-css");
    wp_enqueue_style( "transitionslider-swiper-css");
    wp_enqueue_style( "transitionslider-pickr-css");
    wp_enqueue_style( "transitionslider-fontawesome-css");

	wp_enqueue_style('transitionslider-edit-slider-css');

    $ajax_nonce = wp_create_nonce( "stx_nonce");

    wp_localize_script( 'transitionslider-admin', 'options', json_encode($sliders[$current_id]) );
    wp_localize_script( 'transitionslider-admin', 'stx_nonce', $ajax_nonce );

<?php must_have_access() ?>

<?php
$from_live_edit = false;
if (isset($params["live_edit"]) and $params["live_edit"]) {
    $from_live_edit = $params["live_edit"];
}
?>


<div class="card style-1 mb-3 <?php if ($from_live_edit): ?>card-in-live-edit<?php endif; ?>">
    <div class="card-header">
        <?php $module_info = module_info($params['module']); ?>
        <h5>Slider</h5>
    </div>

    <div class="card-body pt-3">
        <script type="text/javascript">
            mw.require("<?php print mw_includes_url(); ?>css/wysiwyg.css");
            mw.require('icon_selector.js');
            mw.require('prop_editor.js');
            mw.require('module_settings.js');
            $(window).on('load', function (){
                mw.top().dialog.get().title("Slider")
            })
        </script>
        <?php
        $settings = get_module_option('settings', $params['id']);

        if ($settings == false) {
            if (isset($params['settings'])) {
                $settings = $params['settings'];
            }
        }

        $defaults = array(
            'title' => '',
            'id' => 'accordion-' . uniqid(),
            'icon' => ''
        );

        $json = json_decode($settings, true);
        if (isset($json) == false or count($json) == 0) {
            $json = array(0 => $defaults);
        }

        $data = array();
        $count = 0;
        foreach ($json as $slide) {
            $count++;
            if (!isset($slide['id'])) {
                $slide['id'] = 'accordion-' . $params['id'] . '-' . $count;
            }
            array_push($data, $slide);
        }
        ?>
        <style>
            .show-on-hover-root {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .show-on-hover-root > div {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
        </style>
        <script>
            $(window).on('load', function () {
                this.accordionSettings = new mw.moduleSettings({
                    element: '#accordion-settings',
                    header: '<div class="show-on-hover-root"><div><i class="mdi mdi-cursor-move mdi-18px text-silver mr-2"></i> <span data-bind="title"><?php  _e('Move'); ?></span></div> <a href="javascript:;" class="show-on-hover" data-action="remove"><i class="mdi mdi-close text-danger mdi-18px font-weight-bold"></i></a></div>',
                    data: <?php print json_encode($data); ?>,
                    schema: [
                        {
                            interface: 'text',
                            label: ['Title'],
                            id: 'title'
                        },
                        {
                            interface: 'text',
                            label: ['Last word'],
                            id: 'lastword'
                        },
                        {
                            interface: 'select',
                            options: [
                                {title: 'Red', value: 'red'},
                                {title: 'Green', value: 'green'},
                            ],
                            label: ['Last word color'],
                            id: 'lastwordcolor'
                        },
                        {
                            interface: 'select',
                            options: [
                                {title: 'Red', value: 'red'},
                                {title: 'Green', value: 'green'},
                                {title: 'Yellow', value: 'yellow'},
                            ],
                            label: ['Overlay color'],
                            id: 'bgcolor'
                        },
                        {
                            interface: 'file',
                            id: 'image',
                            label: 'Add Image',
                            types: 'images',
                            multiple: false
                        },
                        {
                            interface: 'file',
                            id: 'image2',
                            label: 'Mobile Image',
                            types: 'images',
                            multiple: false
                        },

                        {
                            interface: 'hidden',
                            label: [''],
                            id: 'id',
                            value: function () {
                                return 'tab-' + mw.random();
                            }
                        }
                    ]
                });
                $(accordionSettings).on("change", function (e, val) {
                    $("#settingsfield").val(accordionSettings.toString()).trigger("change")
                });
            })
        </script>



        <div class="tab-content py-3">
            <div class="tab-pane fade show active" id="settings">
                <!-- Settings Content -->
                <div class="module-live-edit-settings module-accordion-settings">
                    <input type="hidden" class="mw_option_field" name="settings" id="settingsfield"/>
                    <div class="mb-3 d-flex">
                        <label class="control-label align-self-center"> <?php  _e('Add new field'); ?></label>

                        <button type="button" class="btn btn-primary btn-rounded ml-auto" onclick="accordionSettings.addNew()"><i class="mdi mdi-plus"></i> <?php  _e('Add new'); ?></button>
                    </div>

                    <div id="accordion-settings"></div>
                </div>
            </div>

            <div class="tab-pane fade" id="templates">
                <module type="admin/modules/templates"/>
            </div>
        </div>
    </div>
</div>

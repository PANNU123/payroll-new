<div class="row">
    <input type="hidden" name="user_id" value="{{$$module_name_singular->id}}">
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'department_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->department_id ?? "";
            $select_options = [];
            foreach ($manage_department as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Department', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'section_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->section_id ?? "";
            $select_options = [];
            foreach ($section as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Section', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'designation_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->designation_id ?? "";
            $select_options = [];
            foreach ($manage_designation as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Designation', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'working_status_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->working_status_id ?? "";
            $select_options = [];
            foreach ($working_status as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Working Status', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'bank_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->bank_id ?? "";
            $select_options = [];
            foreach ($banks as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Bank', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pf_no';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->pf_no ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'report_to';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->report_to ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'joining_date';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->joining_date ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'card_no';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->card_no ?? "";
            $select_options = [
                '1'=>'Yes',
                '0'=>'No',
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'card_printed';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->card_printed ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
           {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'overtime';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->overtime ?? "";
            $select_options = [
                '1'=>'Overtime Eligibility',
                '0'=>'Overtime Not Eligibility',
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'overtime_note';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->overtime_note ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
           {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'transport';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->transport ?? "";
            $select_options = [
                '1'=>'Transport Eligibility',
                '0'=>'Transport Not Eligibility',
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'transport_note';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $selected_option = $single_data->professionaldata->transport_note ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
           {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pay_schale';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->pay_schale ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pay_grade';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->pay_grade ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
           {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'confirm_probation';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->confirm_probation ?? "";
            $select_options = [
                'P'=>'P',
                'A'=>'A',
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'confirm_period';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->professionaldata->confirm_period ?? "";
            $select_options = [
                '1'=>'Yes',
                '0'=>'No',
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'bank_acc_no';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->bank_acc_no ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
           {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status_change_date';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->status_change_date ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
</div>
<x-library.select2 />

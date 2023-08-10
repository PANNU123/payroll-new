<div class="row">
    <input type="hidden" name="user_id" value="{{$$module_name_singular->id}}">
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'company_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $select_options = [];
            $selected_option = $single_data->company_id ?? "";
            foreach ($companies as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Company Name', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'title_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $select_options = [];
            $selected_option = $single_data->title_id ?? "";
            foreach ($titles as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Title', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'religion_id';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $select_options = [];
            $selected_option = $single_data->religion_id ?? "";
            foreach ($religions as $key=>$item) {
                $select_options[$item->id] = $item->name;
            }
            ?>
            {{ html()->label('Religion', $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'biography';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->biography ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'signature';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->signature ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'father_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->father_name ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'mother_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->mother_name ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'spouse_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->spouse_name ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pr_address';
            $field_lable = "Present Address";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->pr_address ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pr_district';
            $field_lable = "Present District";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->pr_district ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pr_police_station';
            $field_lable = "Present Police Station";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->pr_police_station ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pr_post_code';
            $field_lable = "Present Post Code";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->pr_post_code ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pm_address';
            $field_lable = "Permanent Address";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->pm_address ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pm_district';
            $field_lable = "Permanent District";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->pm_district ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pm_police_station';
            $field_lable = "Permanent Police Station";
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->pm_police_station ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'pm_post_code';
            $field_lable = "Permanent Post Code";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->pm_post_code ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'm_address';
            $field_lable = "Mailing Address";
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->m_address ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'm_district';
            $field_lable = "Mailing District";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->m_district ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'm_police_station';
            $field_lable = "Mailing Police Station";
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->m_police_station ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'm_post_code';
            $field_lable = "Mailing Post Code";
            $field_placeholder = $field_lable;
            $required = "required";
            $default_value = $single_data->m_post_code ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'blood_group';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->blood_group ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'last_education';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->last_education ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'prof_speciality';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->prof_speciality ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'national_id';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->national_id ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'is_printed';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $selected_option = $single_data->is_printed ?? "";
            $select_options = [
                '1'=>'Yes',
                '0'=>'No',
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
        </div>
    </div>

</div>
<x-library.select2 />

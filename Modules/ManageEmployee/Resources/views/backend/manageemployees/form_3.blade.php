<div class="row">
    @if(isset($$module_name_singular))
        <input type="hidden" name="user_id" value="{{$$module_name_singular->id}}">
    @endif
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'first_name';
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
            $field_name = 'last_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            $default_value = $single_data->professionaldata->status_change_date ?? "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
        </div>
    </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'email';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "";
                $default_value = $single_data->professionaldata->status_change_date ?? "";
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->email($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'mobile';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "";
                $default_value = $single_data->professionaldata->status_change_date ?? "";
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'gender';
                $field_lable = label_case($field_name);
                $field_placeholder = "-- Select an option --";
                $required = "";
                $selected_option = $single_data->is_printed ?? "";
                $select_options = [
                    'M'=>'Male',
                    'F'=>'Female',
                ];
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($selected_option) }}
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'date_of_birth';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "";
                $default_value = $single_data->national_id ?? "";
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->date($field_name)->placeholder($field_placeholder)->class('form-control')->value($default_value)->attributes(["$required"]) }}
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'avatar';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $required = "";
                $default_value = $single_data->national_id ?? "";
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->file($field_name)->class('form-control')->attributes(["$required"]) }}
            </div>
        </div>
</div>
<x-library.select2 />

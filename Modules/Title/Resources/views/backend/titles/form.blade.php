<div class="row">
{{--    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">--}}
{{--    <div class="col-12 col-sm-4 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'Authorizer';--}}
{{--            $field_label = label_case($field_name);--}}
{{--            $field_placeholder = $field_label;--}}
{{--            $required = "required";--}}
{{--            $field_value = \Illuminate\Support\Facades\Auth::user()->name; // Set the value you want here--}}
{{--            ?>--}}
{{--            {{ html()->label($field_label, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required" => $required, "value" => $field_value,]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-12 col-sm-4 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'company_id';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = "-- Select an option --";--}}
{{--            $required = "";--}}
{{--            $select_options = [];--}}
{{--            foreach ($companies as $key=>$item) {--}}
{{--                $select_options[$item->id] = $item->name;--}}
{{--            }--}}
{{--            ?>--}}
{{--            {{ html()->label('Company Name', $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required","value" => 1,]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
{{--    <div class="col-12 col-sm-4 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'slug';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = $field_lable;--}}
{{--            $required = "";--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "required";
            $select_options = [
                '1'=>'Published',
                '0'=>'Unpublished',
                '2'=>'Draft'
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<x-library.select2 />

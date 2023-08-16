<div class="row">
{{--    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">--}}
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
{{--            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-12 col-sm-4 mb-3">
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
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'short_code';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
{{--    <div class="col-12 col-sm-3 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'leave_type';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = "-- Select an option --";--}}
{{--            $required = "";--}}
{{--            $select_options = [--}}
{{--                'Y'=>'Y',--}}
{{--                'N'=>'N',--}}
{{--            ];--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-12 col-sm-2 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'leave_limit';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = "-- Select an option --";--}}
{{--            $required = "";--}}
{{--            $select_options = [--}}
{{--                'Y'=>'Y',--}}
{{--                'N'=>'N',--}}
{{--            ];--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="col-12 col-sm-2 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'yearly_limit';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = $field_lable;--}}
{{--            $required = "";--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-12 col-sm-3 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'is_carry_forward';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = "-- Select an option --";--}}
{{--            $required = "";--}}
{{--            $select_options = [--}}
{{--                'Y'=>'Y',--}}
{{--                'N'=>'N',--}}
{{--            ];--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-12 col-sm-2 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'show_roster';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = "-- Select an option --";--}}
{{--            $required = "";--}}
{{--            $select_options = [--}}
{{--                'Y'=>'Y',--}}
{{--                'N'=>'N',--}}
{{--            ];--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-12 col-sm-4 mb-3">--}}
{{--        <div class="form-group">--}}
{{--            <?php--}}
{{--            $field_name = 'particulars';--}}
{{--            $field_lable = label_case($field_name);--}}
{{--            $field_placeholder = $field_lable;--}}
{{--            $required = "";--}}
{{--            ?>--}}
{{--            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
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
<x-library.select2 />

@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
            {{ __($module_title) }}
        </x-backend-breadcrumb-item>
        <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    @props(["data"=>"", "module_name", "module_path", "module_title"=>"", "module_icon"=>"", "module_action"=>""])
    <div class="card">
        <div class="card-body">
            <x-backend.section-header :module_name="$module_name" :module_title="$module_title" :module_icon="$module_icon" :module_action="$module_action" />
            <div class="row mt-4">
                <div class="col">
                    {{ html()->form('POST', route("backend.$module_name.store"))->class('form')->acceptsFiles()->open() }}

                    @include ("$module_path.$module_name.form",[ 'companies'=>$companies])

                    <div class="row">
                        <div class="col-6">
                            <x-backend.buttons.create>Create</x-backend.buttons.create>
                        </div>
                        <div class="col-6">
                            <div class="float-end">
                                <x-backend.buttons.cancel />
                            </div>
                        </div>
                    </div>

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    @if ($data != "")
                        <small class="float-end text-muted">
                            @lang('Updated at'): {{$data->updated_at->diffForHumans()}},
                            @lang('Created at'): {{$data->created_at->isoFormat('LLLL')}}
                        </small>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

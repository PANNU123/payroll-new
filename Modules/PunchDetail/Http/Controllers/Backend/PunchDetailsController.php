<?php

namespace Modules\PunchDetail\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Classes\ZKLibrary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\PunchDetail\Models\PunchDetail;
use Yajra\DataTables\DataTables;

class PunchDetailsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'PunchDetails';

        // module name
        $this->module_name = 'punchdetails';

        // directory path of the module
        $this->module_path = 'punchdetail::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\PunchDetail\Models\PunchDetail";
    }


    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = $module_model::where('name', 'LIKE', "%$term%")->orWhere('slug', 'LIKE', "%$term%")->limit(7)->get();

        $$module_name = [];

        foreach ($query_data as $row) {
            $$module_name[] = [
                'id' => $row->id,
                'text' => $row->name.' (Slug: '.$row->slug.')',
            ];
        }

        return response()->json($$module_name);
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_model::select('id', 'attendance_datetime', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
//            ->editColumn('attendance_datetime', '<strong>{{$attendance_datetime}}</strong>')
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

                $diff = Carbon::now()->diffInHours($data->attendance_datetime);

                if ($diff < 25) {
                    return $data->attendance_datetime->diffForHumans();
                } else {
                    return $data->attendance_datetime->isoFormat('llll');
                }
            })
            ->rawColumns(['attendance_datetime', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    public function getPunchedData(){

        $zk = new ZKLibrary("103.203.94.204", "4370", "UDP");
        $zk->connect();
        $zk->disableDevice();
        $users = $zk->getUser();
        $attendance = $zk->getAttendance();

        if(isset($attendance)){
            $dataArray = $attendance;
            $groupedData = [];

            foreach ($dataArray as $record) {
                $date = substr($record[3], 0, 10);
                if (!isset($groupedData[$date])) {
                    $groupedData[$date] = [];
                }
                $groupedData[$date][] = [
                    "access_id" => $record[0],
                    "user_id" => $record[1],
                    "status" => $record[2],
                    "time" => $record[3]
                ];
            }
            foreach ($groupedData as $date => $records) {
                foreach ($records as $record) {


                    PunchDetail::updateOrInsert(
                        [
                            'employee_id'=>$record["user_id"],
                            'attendance_datetime'=>$record["time"],
                        ],
                        [
                            'device_id'=>1,
                            'employee_id'=>$record["user_id"],
                            "access_id" => $record["access_id"],
                            'attendance_datetime'=>$record["time"],
                        ]
                    );
                }
            }
        }
        flash(icon()."Data Inserted Successfully")->success()->important();
        return redirect('/admin/dashboard');
    }
}


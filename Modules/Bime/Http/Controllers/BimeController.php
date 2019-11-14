<?php

namespace Modules\Bime\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Bime\Entities\Bime;
use Yajra\DataTables\Facades\DataTables;

class BimeController extends Controller
{

    public function wizard(Bime $id)
    {
        return view('bime::index', compact('id'));
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Bime::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('admin.module.bime.wizard', $row->id) . '" class="edit btn btn-primary btn-sm">ویرایش</a>';
                    $btn .= '<a href="' . route('admin.module.bime.delete', $row->id) . '" class="edit btn btn-danger btn-sm">حذف</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('bime::show');
    }

    public function store(Request $request)
    {
        $type = "درمانی";
        if ($request['type'] = 2) {
            $type = "تکمیلی";
        }
        $request->merge(['type' => $type]);
        $id = $request->exists('id') ? $request->id : null;
        if ($id) {
            Bime::find($id)->update($request->all());
            return back();
        } else {
            Bime::create($request->all());
        }
    }

    public function delete(Request $request, Bime $id)
    {
        $id->delete();
        return back();
    }

}

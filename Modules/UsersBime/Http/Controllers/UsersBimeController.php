<?php

namespace Modules\UsersBime\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Bime\Entities\Bime;
use Modules\UsersBime\Entities\UsersBime;
use Yajra\DataTables\Facades\DataTables;

class UsersBimeController extends Controller
{
    public function wizard(UsersBime $id)
    {
        $bimes = Bime::all();
        return view('usersbime::index', compact('bimes', 'id'));
    }

    public function store(Request $request)
    {
        $id = $request->exists('id') ? $request->id : null;
        if ($id) {
            UsersBime::find($id)->update($request->all());
            return back();
        } else {
            UsersBime::create($request->all());
        }
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = UsersBime::with('bime')->orderBy('id', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('bime', function ($row) {
                    return optional($row->bime)->name;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('admin.module.usersbime.wizard', $row->id) . '" class="edit btn btn-primary btn-sm">ویرایش</a>';
                    $btn .= '<a href="' . route('admin.module.usersbime.delete', $row->id) . '" class="edit btn btn-danger btn-sm">حذف</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('usersbime::show');
    }

    public function delete(Request $request, UsersBime $id)
    {
        $id->delete();
        return back();
    }


}

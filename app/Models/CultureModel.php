<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CultureModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_culture')->get();
    }

    public function addData($data)
    {
        DB::table('tbl_culture')->insert($data);
    }

    public function deleteData($id_culture)
    {
            DB::table('tbl_culture')
                ->where('id_culture', $id_culture)
                ->delete();
    }

    public function editData($id_culture, $data)
    {
        DB::table('tbl_culture')
            ->where('id_culture', $id_culture)
            ->update($data);
    }
}

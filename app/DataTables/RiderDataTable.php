<?php

/**
 * Rider DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Rider
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Services\DataTable;
use DB;

class RiderDataTable extends DataTable
{

    protected $edit,$delete;

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->of($query)
            ->filterColumn('gender', function($query, $keyword) {
                if(strpos('male', $keyword)!==false)
                    $search[] = 1;
                if(strpos('female', $keyword)!==false)
                    $search[] = 2;
                if(isset($search))
                    $query->whereIn('gender', $search);
            })
            ->addColumn('email', function ($users) {
                return protectedString($users->email);
            })
            ->addColumn('device_type', function ($users) {
                return ($users->device_type == '1') ? 'IOS' : 'Android';
            })
            ->addColumn('action', function ($users) {
                $edit = $this->edit ? '<a href="'.url('admin/edit_rider/'.$users->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;' : '';
                $delete = $this->delete ? '<a data-href="'.url('admin/delete_rider/'.$users->id).'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>&nbsp;':'';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $this->edit = auth('admin')->user()->can('update_rider');
        $this->delete = auth('admin')->user()->can('delete_rider');
        $users = DB::Table('users')->select(
            'users.id as id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.device_type',
            'users.country_code',
            DB::raw("(
                CASE
                WHEN users.gender=1 THEN 'Male'
                WHEN users.gender=2 THEN 'Female'
                ELSE '' 
                END
            ) AS gender_name"),
            'users.mobile_number',
            'users.status',
            'users.created_at',
            DB::raw('CONCAT("XXXXXX",Right(users.mobile_number,4)) AS hidden_mobile')
        )->where('user_type','Rider')->groupBy('id');
        return $users;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('lBfr<"table-responsive"t>ip')
                    ->orderBy(0)
                    ->buttons(
                        ['csv', 'excel', 'print', 'reset']
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        $mobile_number_column = (isLiveEnv())?'hidden_mobile':'mobile_number';
        return [
            ['data' => 'id', 'name' => 'users.id', 'title' => __('messages.admin.manage_riders_page.table.id')],
            ['data' => 'first_name', 'name' => 'users.first_name', 'title' => __('messages.admin.manage_riders_page.table.first_name')],
            ['data' => 'last_name', 'name' => 'users.last_name', 'title' => __('messages.admin.manage_riders_page.table.last_name')],
            ['data' => 'email', 'name' => 'users.email', 'title' => __('messages.admin.manage_riders_page.table.email')],
            ['data' => 'gender_name', 'name' => 'gender', 'title' => __('messages.admin.manage_riders_page.table.gender')],
            ['data' => $mobile_number_column, 'name' => 'users.mobile_number', 'title' => __('messages.admin.manage_riders_page.table.mobile_number')],
            ['data' => 'status', 'name' => 'users.status', 'title' => __('messages.admin.manage_riders_page.table.status')],
            ['data' => 'device_type', 'name' => 'device_type', 'title' => __('messages.admin.manage_riders_page.table.device_type')],
            ['data' => 'created_at', 'name' => 'users.created_at', 'title' => __('messages.admin.manage_riders_page.table.created_at')],
            ['data' => 'action', 'name' => 'action', 'title' => __('messages.admin.manage_riders_page.table.action'), 'orderable' => false, 'searchable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'riders_' . date('YmdHis');
    }
}

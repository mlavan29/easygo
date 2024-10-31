<?php

/**
 * Locations DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Locations
 * @author      Source monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\AppVersion;
use Yajra\DataTables\Services\DataTable;
use DB;

class AppVersionDataTables extends DataTable
{
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
           ->addColumn('action', function ($version) {
                $edit = '<a href="'.url('admin/edit_app_version/'.$version->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';

                $delete = '<a data-href="'.url('admin/delete_app_version/'.$version->id).'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>&nbsp;';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Location $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(AppVersion $model)
    {
        $version = AppVersion::get();
        return $version;
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
                    ->orderBy(0,'DESC')
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
        return [
            ['data' => 'id', 'name' => 'id', 'title' =>  __('messages.admin.manage_mobile_app_version.table.id')],
            ['data' => 'version', 'name' => 'version', 'title' => __('messages.admin.manage_mobile_app_version.table.version')],
            ['data' => 'add_device_type', 'name' => 'add_device_type', 'title' => __('messages.admin.manage_mobile_app_version.table.device_type')],
            ['data' => 'add_user_type', 'name' => 'add_user_type', 'title' =>__('messages.admin.manage_mobile_app_version.table.user_type')],
            ['data' => 'add_force_update', 'name' => 'add_force_update', 'title' =>__('messages.admin.manage_mobile_app_version.table.force_update')],
            ['data' => 'created_at', 'name' => 'created_at', 'title' => __('messages.admin.manage_mobile_app_version.table.created_at')],
            ['data' => 'updated_at', 'name' => 'updated_at', 'title' => __('messages.admin.manage_mobile_app_version.table.updated_at')],
            ['data' => 'action', 'name' => 'action', 'title' => __('messages.admin.manage_mobile_app_version.table.action'), 'orderable' => false, 'searchable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'AppVersion_' . date('YmdHis');
    }
}
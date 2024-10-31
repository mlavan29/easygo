<?php

/**
 * Role DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Role
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;
use App\Models\Role;

class RoleDataTable extends DataTable
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
            ->addColumn('action', function ($role) {
                $edit = '<a href="'.url('admin/edit_role/'.$role->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="'.url('admin/delete_role/'.$role->id).'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Role $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Role $model)
    {
        return $model->all();
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
                    ->orderBy(0,'ASC')
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
            ['data' => 'id', 'name' => 'id', 'title' => __('messages.admin.manage_admin_page.table.id')],
            ['data' => 'name', 'name' => 'name', 'title' =>__('messages.admin.manage_admin_page.table.name')],
            ['data' => 'display_name', 'name' => 'display_name', 'title' => __('messages.admin.manage_admin_page.table.display_name')],
            ['data' => 'description', 'name' => 'description', 'title' =>  __('messages.admin.manage_admin_page.table.description')],
            ['data' => 'action', 'name' => 'action', 'title' =>  __('messages.admin.manage_admin_page.table.action'), 'orderable' => false, 'searchable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'roles_' . date('YmdHis');
    }
}
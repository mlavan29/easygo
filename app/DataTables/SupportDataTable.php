<?php

/**
 * Support DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Support
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\Support;
use Yajra\DataTables\Services\DataTable;
use DB;

class SupportDataTable extends DataTable
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
            ->addColumn('action', function ($support) {
                $edit = '<a href="' . url('admin/edit_support/' . $support->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';

                $delete = '';
                if ($support->id != '1' && $support->id != '2') {
                    $delete = '<a data-href="' . url('admin/delete_support/' . $support->id) . '" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';
                }
                return $edit . $delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Support $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Support $model)
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
            ->addAction()
            ->minifiedAjax()
            ->dom('lBfr<"table-responsive"t>ip')
            ->orderBy(0, 'DESC')
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
            ['data' => 'id', 'name' => 'id', 'title' => __('messages.admin.manage_support.table.id')],
            ['data' => 'name', 'name' => 'name', 'title' => __('messages.admin.manage_support.table.name')],
            ['data' => 'link', 'name' => 'link', 'title' => __('messages.admin.manage_support.table.link')],
            ['data' => 'status', 'name' => 'status', 'title' => __('messages.admin.manage_support.table.status')]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'support_' . date('YmdHis');
    }
}

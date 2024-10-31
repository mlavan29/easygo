<?php

/**
 * Toll Reasons DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Toll Reasons
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\TollReason;
use Yajra\DataTables\Services\DataTable;
use DB;

class TollReasonDataTable extends DataTable
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
            ->addColumn('action', function ($toll_reason) {
                if($toll_reason->id == '1') {
                    return '';
                }
                $edit = '<a href="'.url('admin/edit-additional-reason/'.$toll_reason->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="'.url('admin/delete-additional-reason/'.$toll_reason->id).'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param TollReason $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(TollReason $model)
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
            ['data' => 'id', 'name' => 'id', 'title' =>  __('messages.admin.manage_additional_reasons.table.id') ],
            ['data' => 'reason', 'name' => 'reason', 'title' => __('messages.admin.manage_additional_reasons.table.reason')],
            ['data' => 'status', 'name' => 'status', 'title' => __('messages.admin.manage_additional_reasons.table.status')],
            ['data' => 'action', 'name' => 'action', 'title' => __('messages.admin.manage_additional_reasons.table.action'), 'orderable' => false, 'searchable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'toll_reasons_' . date('YmdHis');
    }
}
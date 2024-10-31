<?php

/**
 * Metas DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Metas
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\Metas;
use Yajra\DataTables\Services\DataTable;
use DB;

class MetasDataTable extends DataTable
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
            ->addColumn('action', function ($meta) {
                $edit = '<a href="' . url('admin/edit_meta/' . $meta->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>';

                return $edit;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Metas $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Metas $model)
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
            ['data' => 'id', 'name' => 'id', 'title' => __('messages.admin.manage_metas.table.id')],
            ['data' => 'url', 'name' => 'url', 'title' => __('messages.admin.manage_metas.table.url')],
            ['data' => 'title', 'name' => 'title', 'title' => __('messages.admin.manage_metas.table.title')],
            ['data' => 'description', 'name' => 'description', 'title' => __('messages.admin.manage_metas.table.description')],
            ['data' => 'keywords', 'name' => 'keywords', 'title' => __('messages.admin.manage_metas.table.keywords')],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'metas_' . date('YmdHis');
    }
}

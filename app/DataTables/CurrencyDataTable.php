<?php

/**
 * Currency DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Currency
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\Currency;
use Yajra\DataTables\Services\DataTable;
use DB;

class CurrencyDataTable extends DataTable
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
            ->addColumn('action', function ($currency) {
                $edit = '<a href="' . url('admin/edit_currency/' . $currency->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="' . url('admin/delete_currency/' . $currency->id) . '" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit . $delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Currency $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Currency $model)
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
            ['data' => 'id', 'name' => 'id', 'title' => __('messages.admin.manage_currency.table.id')],
            ['data' => 'name', 'name' => 'name', 'title' => __('messages.admin.manage_currency.table.name')],
            ['data' => 'code', 'name' => 'code', 'title' => __('messages.admin.manage_currency.table.code')],
            ['data' => 'rate', 'name' => 'rate', 'title' => __('messages.admin.manage_currency.table.rate')],
            ['data' => 'status', 'name' => 'status', 'title' => __('messages.admin.manage_currency.table.status')]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'currency_' . date('YmdHis');
    }
}

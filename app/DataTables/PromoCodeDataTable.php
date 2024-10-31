<?php

/**
 * Promo Code DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Promo Code
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\PromoCode;
use Yajra\DataTables\Services\DataTable;
use DB;

class PromoCodeDataTable extends DataTable
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
            ->addColumn('action', function ($promo_code) {
                $edit = '<a href="' . url('admin/edit_promo_code/' . $promo_code->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="' . url('admin/delete_promo_code/' . $promo_code->id) . '" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit . $delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param PromoCode $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PromoCode $model)
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
            ['data' => 'id', 'name' => 'id', 'title' => __('messages.admin.manage_wallet_and_promo.table.id')],
            ['data' => 'code', 'name' => 'code', 'title' => __('messages.admin.manage_wallet_and_promo.table.code')],
            ['data' => 'original_amount', 'name' => 'original_amount', 'title' => __('messages.admin.manage_wallet_and_promo.table.original_amount')],
            ['data' => 'currency_code', 'name' => 'currency_code', 'title' => __('messages.admin.manage_wallet_and_promo.table.currency_code')],
            ['data' => 'expire_date', 'name' => 'expire_date', 'title' => __('messages.admin.manage_wallet_and_promo.table.expire_date')],
            ['data' => 'status', 'name' => 'status', 'title' => __('messages.admin.manage_wallet_and_promo.table.status')],
            ['data' => 'action', 'name' => 'action', 'title' => __('messages.admin.manage_wallet_and_promo.table.action')],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'promo_code_' . date('YmdHis');
    }
}

<?php

/**
 * Wallet DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Wallet
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Services\DataTable;
use DB;

class WalletDataTable extends DataTable
{
    protected $user_type;

    // Set the value for User Type 
    public function setUserType($user_type)
    {
        $this->user_type = $user_type;
        return $this;
    }

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
            ->addColumn('amount', function ($wallet) { 
                return ($wallet->amount)?$wallet->amount:"0";
            })
            ->addColumn('action', function ($wallet) {
                $edit = '<a href="'.route('edit_wallet',['id' => $wallet->id, 'user_type' => $this->user_type]).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="'. route('delete_wallet',['id' => $wallet->id, 'user_type' => $this->user_type]) .'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Wallet $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $wallet = $model->where('users.user_type',$this->user_type)
                ->join('wallet', function($join) {
                    $join->on('users.id', '=', 'wallet.user_id');
                })                
                ->select('users.id as id', 'users.first_name', 'users.last_name','users.email','wallet.currency_code as currency_code','wallet.amount as amount','users.gender')
                ->groupBy('id');
        return $wallet;
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
            ['data' => 'id', 'name' => 'users.id', 'title' => __('messages.admin.manage_wallet_and_promo.table.user_id')],
            ['data' => 'first_name', 'name' => 'users.first_name', 'title' =>  __('messages.admin.manage_wallet_and_promo.table.first_name')],
            ['data' => 'last_name', 'name' => 'users.last_name', 'title' => __('messages.admin.manage_wallet_and_promo.table.last_name')],
            ['data' => 'amount', 'name' => 'amount', 'title' =>  __('messages.admin.manage_wallet_and_promo.table.wallet_amount')],
            ['data' => 'currency_code', 'name' => 'wallet.currency_code', 'title' =>  __('messages.admin.manage_wallet_and_promo.table.currency_code'),'orderable' => false],
            ['data' => 'action', 'name' => 'action', 'title' =>  __('messages.admin.manage_wallet_and_promo.table.action'), 'orderable' => false, 'searchable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'wallet_' . date('YmdHis');
    }
}

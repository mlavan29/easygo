<?php

/**
 * Country DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Country
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\Country;
use Yajra\DataTables\Services\DataTable;
use DB;

class CountryDataTable extends DataTable
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
            ->addColumn('action', function ($country) {
                $edit = '<a href="' . url('admin/edit_country/' . $country->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="' . url('admin/delete_country/' . $country->id) . '" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit . $delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Country $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Country $model)
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
            ['data' => 'id', 'name' => 'id', 'title' => __('messages.admin.manage_country.table.id')],
            ['data' => 'short_name', 'name' => 'short_name', 'title' => __('messages.admin.manage_country.table.short_name')],
            ['data' => 'long_name', 'name' => 'long_name', 'title' => __('messages.admin.manage_country.table.long_name')],
            ['data' => 'iso3', 'name' => 'iso3', 'title' => __('messages.admin.manage_country.table.iso3')],
            ['data' => 'num_code', 'name' => 'num_code', 'title' => __('messages.admin.manage_country.table.num_code')],
            ['data' => 'phone_code', 'name' => 'phone_code', 'title' => __('messages.admin.manage_country.table.phone_code')]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'country_' . date('YmdHis');
    }
}

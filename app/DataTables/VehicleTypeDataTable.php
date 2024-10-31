<?php

/**
 * Car Type DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Car Type
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\CarType;
use Yajra\DataTables\Services\DataTable;

class VehicleTypeDataTable extends DataTable
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
            ->addColumn('action', function ($car_type) {
                $edit = '<a href="'.url('admin/edit_vehicle_type/'.$car_type->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="'.url('admin/delete_vehicle_type/'.$car_type->id).'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param CarType $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(CarType $model)
    {
        return $model->select();
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
        return [
            ['data' => 'id', 'name' => 'id', 'title' =>  __('messages.admin.manage_vehicle_type.table.id')],
            ['data' => 'car_name', 'name' => 'car_name', 'title' =>  __('messages.admin.manage_vehicle_type.table.vehicle_name')],
            ['data' => 'description', 'name' => 'description', 'title' => __('messages.admin.manage_vehicle_type.table.description')],
            ['data' => 'is_pool', 'name' => 'is_pool', 'title' => __('messages.admin.manage_vehicle_type.table.is_pool')],
            ['data' => 'status', 'name' => 'status', 'title' => __('messages.admin.manage_vehicle_type.table.status')],
            ['data' => 'action', 'name' => 'action', 'title' => __('messages.admin.manage_vehicle_type.table.action'), 'orderable' => false, 'searchable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'vehicles_type_' . date('YmdHis');
    }
}
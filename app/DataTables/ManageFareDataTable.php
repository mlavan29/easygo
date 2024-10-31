<?php

/**
 * Manage Fare DataTable
 *
 * @package     Cabme
 * @subpackage  DataTable
 * @category    Manage Fare
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\ManageFare;
use Yajra\DataTables\Services\DataTable;
use DB;

class ManageFareDataTable extends DataTable
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
            ->addColumn('action', function ($fare_details) {
                $edit = '<a href="'.url('admin/edit_manage_fare/'.$fare_details->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';

                $delete = '<a data-href="'.url('admin/delete_manage_fare/'.$fare_details->id).'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>&nbsp;';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param ManageFare $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ManageFare $model)
    {
        $fare_details = DB::Table('manage_fare')->join('locations', function($join) {
                            $join->on('manage_fare.location_id', '=', 'locations.id');
                        })
                        ->join('car_type', function($join) {
                            $join->on('manage_fare.vehicle_id', '=', 'car_type.id');
                        })
                        ->select('*','manage_fare.id as id','locations.name AS location_name','car_type.car_name AS vehicle_name');
        return $fare_details;
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
            ['data' => 'id', 'name' => 'manage_fare.id', 'title' => __('messages.admin.manage_fares.table.id') ],
            ['data' => 'location_name', 'name' => 'locations.name', 'title' => __('messages.admin.manage_fares.table.location_name') ],
            ['data' => 'vehicle_name', 'name' => 'car_type.car_name', 'title' => __('messages.admin.manage_fares.table.vehicle_type')],
            ['data' => 'apply_peak', 'name' => 'apply_peak', 'title' => __('messages.admin.manage_fares.table.apply_peak')],
            ['data' => 'apply_night', 'name' => 'apply_night', 'title' => __('messages.admin.manage_fares.table.apply_night')],
            ['data' => 'action', 'name' => 'action', 'title' => __('messages.admin.manage_fares.table.action'), 'orderable' => false, 'searchable' => false, 'exportable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'fare_details_' . date('YmdHis');
    }
}
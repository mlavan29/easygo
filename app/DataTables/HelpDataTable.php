<?php

/**
 * Help DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Help
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\Help;
use Yajra\DataTables\Services\DataTable;
use DB;

class HelpDataTable extends DataTable
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
            ->addColumn('action', function ($help) {
                $edit = '<a href="'.url('admin/edit_help/'.$help->help_id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="'.url('admin/delete_help/'.$help->help_id).'" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>';

                return $edit.$delete;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Help $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Help $model)
    {
        $help = $model->join('help_category', function($join) {
                                $join->on('help_category.id', '=', 'help.category_id');
                            })
                    ->leftJoin('help_subcategory', function($join) {
                                $join->on('help_subcategory.id', '=', 'help.subcategory_id');
                            })
                    ->select(['help_category.*', 'help_subcategory.*','help.id as help_id','help.category_id as category_id','help.subcategory_id as subcategory_id','question',DB::raw("concat(substring(answer, 1, 50),'...') as answer"),'help.status as help_status'])
                    ->where('help_category.status','Active');
        return $help;
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
                    ->addAction(["printable" => false])
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
            ['data' => 'help_id', 'name' => 'help.id', 'title' => __('messages.admin.manage_help.table.id')],
            ['data' => 'category_name', 'name' => 'help_category.name', 'title' => __('messages.admin.manage_help.table.category')],
            ['data' => 'subcategory_name', 'name' => 'help_subcategory.name', 'title' => __('messages.admin.manage_help.table.subcategory')],
            ['data' => 'question', 'name' => 'help.question', 'title' => __('messages.admin.manage_help.table.question')],
            ['data' => 'help_status', 'name' => 'help.status', 'title' => __('messages.admin.manage_help.table.status')],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'help_' . date('YmdHis');
    }
}
<?php

/**
 * Pages DataTable
 *
 * @package     Ridein
 * @subpackage  DataTable
 * @category    Pages
 * @author      Source Monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\DataTables;

use App\Models\Pages;
use Yajra\DataTables\Services\DataTable;
use DB;

class PagesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $user = auth()->user();
        return datatables()
            ->of($query)
            ->addColumn('action', function ($page) use ($user) {
                $edit = '<a href="' . url('admin/edit_page/' . $page->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;';
                $delete = '<a data-href="' . url('admin/delete_page/' . $page->id) . '" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-trash"></i></a>&nbsp;<a href="' . url($page->url) . '" target="_blank" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>';

                if ($user->can('edit_static_page') || $user->can('delete_static_page')) {
                    return $edit . '' . $delete;
                } else {
                    return '';
                }
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param Pages $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pages $model)
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
            ->addAction(['exportable' => false])
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
            ['data' => 'id', 'name' => 'id', 'title' => __('messages.admin.manage_static_pages.table.id')],
            ['data' => 'name', 'name' => 'name', 'title' => __('messages.admin.manage_static_pages.table.name')],
            ['data' => 'url', 'name' => 'url', 'title' => __('messages.admin.manage_static_pages.table.url')],
            ['data' => 'status', 'name' => 'status', 'title' => __('messages.admin.manage_static_pages.table.status')],
            ['data' => 'updated_at', 'name' => 'updated_at', 'title' => __('messages.admin.manage_static_pages.table.updated_at')]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'pages_' . date('YmdHis');
    }
}

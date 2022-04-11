<?php

namespace App\DataTables;

use App\Models\Producto;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProdutosDataTable extends DataTable
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
            ->eloquent($query)
            ->editColumn('foto',function($pro){
                return view('almacen.productos.foto',['pro'=>$pro])->render();
            })
            ->addColumn('action', function($pro){
                return view('almacen.productos.opciones',['pro'=>$pro])->render();
            })
            ->editColumn('categoria_id',function($pro){
                return $pro->categoria->nombre??'';
            })
            ->editColumn('created_at',function($pro){
                return $pro->created_at;
            })
            ->editColumn('updated_at',function($pro){
                return $pro->updated_at;
            })
            
            ->rawColumns(['action','foto']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \Models/Producto $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Producto $model)
    {
        return $model->newQuery()->orderBy('codigo','asc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('produtos-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('frtip')
                    ->orderBy(1)
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->searchable(false)
                  ->title('Opciones')
                  ->addClass('text-center'),
            Column::make('foto')->searchable(false),
            Column::make('categoria_id')->searchable(false)->title('Categoría'),
            Column::make('codigo')->title('Código'),
            Column::make('nombre'),
            Column::make('talla')->title('Tamaño'),
            Column::make('cantidad'),
            Column::make('precio_compra'),
            Column::make('precio_venta'),
            Column::make('color'),
            Column::make('descripcion')
            ->title('Descripción')
            ->searchable(false),
            Column::make('created_at')->title('Creado'),
            Column::make('updated_at')->title('Actualizado'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Produtos_' . date('YmdHis');
    }
}

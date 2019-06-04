@extends('izv')
@section('contenido')
<!--
The Bootstrap 4 grid system has five classes:

.col- (extra small devices - screen width less than 576px)
.col-sm- (small devices - screen width equal to or greater than 576px)
.col-md- (medium devices - screen width equal to or greater than 768px)
.col-lg- (large devices - screen width equal to or greater than 992px)
.col-xl- (xlarge devices - screen width equal to or greater than 1200px)

Some Bootstrap 4 grid system rules:

1. Rows must be placed within a .container (fixed-width)
   or .container-fluid (full-width) for proper alignment and padding
2. Use rows to create horizontal groups of columns
3. Content should be placed within columns,
   and only columns may be immediate children of rows
4. Predefined classes like .row and .col-sm-4 are
   available for quickly making grid layouts
5. Columns create gutters (gaps between column content) via padding.
   That padding is offset in rows for the first and last column via negative
   margin on .rows
6. Grid columns are created by specifying the number of 12 available columns
   you wish to span. For example, three equal columns would use three .col-sm-4
7. Column widths are in percentage, so they are always fluid and sized
   relative to their parent element
8. The biggest difference between Bootstrap 3 and Bootstrap 4 is that Bootstrap 4
   now uses flexbox, instead of floats. One big advantage with flexbox is that grid
   columns without a specified width will automatically layout as "equal width columns"
   (and equal height). Example: Three elements with .col-sm will each automatically be
   33.33% wide from the small breakpoint and up. Tip: If you want to learn more about
   Flexbox, you can read our CSS Flexbox Tutorial.
-->
<div class="container">
    <div class="row col-md-12">
        <h1 class="text-primary">Inventario</h1>

        <table class="table table-bordered" id="tableInventario">

          <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Acciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach($bienes as $bien)
                <tr>
                    <td class="text-center">{{$bien->numero}}</td>
                    <td class="text-center">{{$bien->descripcion}}</td>
                    <td class="text-center">{{$bien->marca}}</td>
                    <td class="text-center">{{$bien->descripcion}}</td>
                    <td class="text-center">{{$bien->marca}}</td>
                    <td class="text-center">{{$bien->descripcion}}</td>
                    <td class="text-center">{{$bien->marca}}</td>
                    <td>
                    <a href="{{route('inventario.show', $bien->numero)}}" class="btn btn-info">Ver</a>
                    </td>
                </tr>
            @endforeach
          </tbody>

          <tfoot>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Acciones</th>
            </tr>
          </tfoot>

        </table>

    </div>
</div>
@stop
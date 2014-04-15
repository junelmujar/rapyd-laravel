@include('rapyd::toolbar', array('label'=>$label, 'buttons'=>$buttons['TR']))

@if ($dg->rows) 
    <table class="table table-striped">
        <thead>
        <tr>
         @foreach ($dg->columns as $column)
            <th>
                @if ($column->orderby)
                    @if (($column->name == Input::get('ord')) || ('-'.$column->name == Input::get('ord')))
                        @if ('-'.$column->name == Input::get('ord'))
                            <a href="{{ $dg->orderbyLink($column->name,'asc') }}">{{ $column->label }}</a> &nbsp;
                           <span class="glyphicon glyphicon-arrow-up"></span>
                        @else
                            <a href="{{ $dg->orderbyLink($column->name,'desc') }}">{{ $column->label }}</a> &nbsp;
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        @endif
                    @else
                        <a href="{{ $dg->orderbyLink($column->name,'asc') }}">{{ $column->label }}</a> &nbsp;
                    @endif
    
                @else
                    {{ $column->label }}
                @endif
            </th>             
         @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach ($dg->rows as $row)
            <tr>
                @foreach ($row as $cell)
                <td>{{ $cell }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody> 
    </table>
@else

    <h3>
        There are no records in the database.
    </h3>

@endif

@if ($dg->havePagination())
    <div class="pagination">
    {{ $dg->links() }}
    </div>
@endif

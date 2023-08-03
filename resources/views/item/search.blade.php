@forelse($item as $value)
    <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->upc_ean_isbn }}</td>
        <td>{{ $value->item_name }}</td>
        <td>{{ $value->size }}</td>
        <td>{{ $value->cost_price }}</td>
        <td>{{ $value->selling_price }}</td>
        <td>{{ $value->quantity }}</td>
        <td>

            <a class="btn btn-small btn-success" href="{{ URL::to('inventory/' . $value->id . '/edit') }}">{{trans('item.inventory')}}</a>
            <a class="btn btn-small btn-info" href="{{ URL::to('items/' . $value->id . '/edit') }}">{{trans('item.edit')}}</a>
            {!! Form::open(array('url' => 'items/' . $value->id, 'class' => 'pull-right')) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit(trans('item.delete'), array('class' => 'btn btn-warning')) !!}
            {!! Form::close() !!}
        </td>
        <td>{!! Html::image(url() . '/images/items/' . $value->avatar, 'a picture', array('class' => 'thumb')) !!}</td>
    </tr>
@empty
    <tr> <td colspan="9"> SIN RESULTADOS </td> </tr>
@endforelse

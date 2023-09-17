<div class="table-responsive">
    <table class="table" id="countries-table">
        <thead>
        <tr>
            <th>Code</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Symbol</th>
        <th>Capital</th>
        <th>Currency</th>
        <th>Continent</th>
        <th>Continent Code</th>
        <th>Alpha 3</th>
        <th>Created By</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{{ $country->code }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->phone }}</td>
            <td>{{ $country->symbol }}</td>
            <td>{{ $country->capital }}</td>
            <td>{{ $country->currency }}</td>
            <td>{{ $country->continent }}</td>
            <td>{{ $country->continent_code }}</td>
            <td>{{ $country->alpha_3 }}</td>
            <td>{{ $country->created_by }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['countries.destroy', $country->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('countries.show', [$country->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('countries.edit', [$country->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

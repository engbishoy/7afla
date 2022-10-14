@foreach ($details as $detail)
<span class="badge badge-info">{{$detail->name . '- ('.__("package::datatable.columns.price").  ':'. $detail->price. ' )'}}</span>
@endforeach
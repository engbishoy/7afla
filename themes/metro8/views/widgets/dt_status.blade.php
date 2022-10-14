<span class="badge @if($status==1) badge-success @elseif($status==2)  badge-danger @else badge-warning @endif">
    @if($status==1)
    {{__("businessprofile::datatable.approved")}}
    @elseif($status==2)
    {{__("businessprofile::datatable.blocked")}}
    @else
    {{__("businessprofile::datatable.awaiting approve")}}
    @endif
</span>

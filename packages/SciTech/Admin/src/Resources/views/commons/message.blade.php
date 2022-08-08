@if ( Session::has('message') )
    <div class="alert alert-{{ Session::get('status') }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <span class="alert-text text-white">{{ Session::get('message') }}</span>
    </div>
@endif

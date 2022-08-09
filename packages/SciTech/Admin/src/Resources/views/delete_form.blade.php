{{ Form::open(['url' => $url, 'method' => 'delete', 'class' => 'd-inline form-delete'])}}
    <button type="submit" class="{{ $attributes['delete_button_class'] }}">
        <i class="{{ $attributes['delete_button_icon_class']  }}"></i>
        {{ $text }}
    </button>
{{ Form::close() }}

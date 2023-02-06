@props(['name'])

<textarea class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}></textarea>
@props(['name'])

<textarea class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $attributes }}>{{ $slot }}</textarea>
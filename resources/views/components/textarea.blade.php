@props(['disabled' => false, 'name' => '', 'placeholder' => '', 'value' => ''])

<textarea
    {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => "w-full min-h-[5rem] rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"]) !!}
    name="{{ $name }}" placeholder="{{ $placeholder }}">{{ $value }}</textarea>

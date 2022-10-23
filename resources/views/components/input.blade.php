@props(['disabled' => false, 'type' => 'text', 'name' => '', 'placeholder' => '', 'value' => '', 'hint' => ''])

<input
    {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => "w-full mb-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"]) !!}
    type="{{ $type }}"
    name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"/>
@if (!empty($hint))
    <p class="text-gray-400 text-sm mb-2">
        {{ $hint }}
    </p>
@endif

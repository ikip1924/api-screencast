@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'h-10 border border-gray-300 focus:outline-none rounded-lg-border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200']) !!}>

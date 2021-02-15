@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'h-10 border-blue-500 focus:outline-none rounded-lg px-3 focus:ring-blue-200 duration-200']) !!}>

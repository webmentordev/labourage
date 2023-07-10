@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-200 font-normal px-6 py-4 focus:ring-4 focus:border-main-2/10 focus:ring-main-2/10 focus:border-main-2 rounded-md shadow-sm']) !!}>
@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea
            name="{{$name}}"
            id="{{$name}}"
            class="border border-gray-200 p2 w-full rounded"
            required
            {{ $attributes }}
            >{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>

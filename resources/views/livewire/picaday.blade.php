
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
<link rel="stylesheet" href="/css/flatpickr.css" />
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

<div>
    <x-datepicker id="datep" wire:model.lazy="date" />
    <x-datepicker id="datefinale" wire:model.lazy="datefinale" />

    <button wire:click="save" class="px-2 py-2 text-white bg-green-600 rounded-lg hover:bg-green-800">
        Save
    </button>
</div>



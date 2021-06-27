@props(['id'])

<input {{ $attributes }} id="{{ $id }}" type="text"
    class="mt-2 mb-4 text-sm border border-gray-400 rounded-lg flatpickr" placeholder="MM/DD/YYYY" autocomplete="off">

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/js/flatpickr.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
    <script>
        $("#{{ $id }}").flatpickr({
            locale: "es",
            dateFormat: "d/m/Y"
        });
    </script>
@endpush

@if (Storage::exists($pro->foto))
    <a href="{{ Storage::url($pro->foto) }}" class="test-popup-link">
        <img  src="{{ Storage::url($pro->foto) }}" alt="" width="30px;" height="25px;">
    </a>
@endif

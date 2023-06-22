<form action="{{ route('button.toggle') }}" method="POST">
    @csrf
    <input type="hidden" name="isChecked" value="{{ $isChecked ? '0' : '1' }}">
    <button type="submit">
        @if ($isChecked)
            <span>&#10003;</span> <!-- Tanda ceklis -->
        @else
            <span>&#10060;</span> <!-- Tanda silang -->
        @endif
    </button>
</form>
<span
    x-data
    x-init="
        setInterval(() => {
            $wire.rotate()
        }, 2000)
    "
    class="inline-block">
    {{ $words[$index] }}
</span>
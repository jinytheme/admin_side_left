<div class="main">
    {{-- 상대경로 --}}
    @theme(".header")

    <main class="content">
        {{$slot}}
    </main>

    @theme(".footer")
</div>

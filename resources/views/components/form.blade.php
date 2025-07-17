<div class="p-4">
    <form action="{{ $action }}" method="{{ $method }}" class="flex flex-col gap-3 flex-wrap">

        @csrf

        <div class="flex gap-3">
            {{ $slot }}
        </div>

        <div>
            <x-button text='Submit' />
        </div>

        {{-- Erros --}}
        @if ($errors->any())
            <div class="p-3 ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500"> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>

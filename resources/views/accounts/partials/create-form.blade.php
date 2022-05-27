<div class="w-2/3 pr-2">
    <form action="{{ route('accounts.store') }}" method="post">
        @csrf
        <div class="flex">
            <input type="name"  autocomplete="false" name="name" id="name" placeholder="Kontonavn" class="rounded-sm px-2 h-10 flex-1 mb-2 mr-2" autocomplete="off">
            <button type="submit" class="px-3 h-10 rounded-sm bg-green-gradient text-white font-medium white-space-nowrap">
                Lag ny konto
            </button>
        </div>
    </form>
</div>

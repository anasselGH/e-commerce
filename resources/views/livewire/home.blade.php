<div>
    <input type="text" wire:model="search" placeholder="Search...">
    <ul>
        @foreach($items as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
</div>

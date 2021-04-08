<div>
    <h3>
        <input type="text" wire:model.lazy="name">

        <input wire:model="loud" type="checkbox">

        Hello {{ $name }} @if ($loud) ! @endif
    </h3>
</div>

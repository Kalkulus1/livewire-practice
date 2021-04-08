<div>
    <h3>
        <input type="text" wire:model.lazy="name">

        <input wire:model="loud" type="checkbox">

        <select wire:model="greeting" multiple>
            <option>Hello</option>
            <option>Good evening</option>
            <option>Goodbye</option>
        </select>

        {{ implode(', ', $greeting) }} {{ $name }} @if ($loud) ! @endif
    </h3>
</div>

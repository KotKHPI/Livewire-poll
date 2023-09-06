<div>
    <form>
        <label>Poll Title</label>

        <input type="text" wire:model.live="title" />

        Current title: {{ $title }}

        <div>
            <button class="btn" wire:click.prevent="addOption">Add option</button>
        </div>

        <div>
            @foreach($options as $index => $option)
                <div>
                    {{$index}} - {{$option}}
                </div>
            @endforeach
        </div>

    </form>
</div>

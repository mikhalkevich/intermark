<div class="px-1 py-2">
    <!-- We use wire:submit.prevent to call the save method and prevent the default html behaviour when the form is submitted -->
    <form action="" wire:submit.prevent="save" class="mt-3 space-y-1">
        <div>
            <x-input.label for="longitude" value="Longitude" />
            <!-- We use wire:model.defer to defer the synchronisation of the value to the next Livewire call (submit in our case) -->
            <x-input.text  id="longitude" x-ref="longitude" wire:model="longitude"  />
            @error('longitude')
            <div>
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <x-input.label for="latitude" value="Latitude" />
            <x-input.text id="latitude" wire:model="latitude" />
            @error('latitude')
            <div>
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <x-input.label for="name" value="Name" />
            <x-input.text wire:model.live="name" id="name" />
            @error('name')
            <div>
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="pt-3 flex justify-end items-center space-x-3">
             <input type="submit" name="save" value="Сохранить">
        </div>
    </form>
</div>
<script>
    Livewire.emit('getLatitudeForInput', place.geometry['location'].lat());
</script>

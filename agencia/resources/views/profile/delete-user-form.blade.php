<x-jet-action-section>
    <x-slot name="title">
        {{ __('Eliminar Cuenta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Borrar cuenta de forma permanente.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Una vez su cuenta haya sido borrada, todos sus recursos y su información será borrada de manera permanente.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Borrar Cuenta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Eliminar Cuenta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('¿Estás seguro de eliminar tu cuenta? Una vez tu cuenta esté eliminada todos tus datos serán permanentemente borrados del sistema. Por favor ingresa tu contraseña para confirmar que deseas eliminar de forma permanentemente tu cuenta.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Contraseña') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Eliminar Cuenta') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>

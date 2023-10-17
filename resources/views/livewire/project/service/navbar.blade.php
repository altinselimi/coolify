<div x-init="$wire.checkStatus" wire:poll.2500ms='checkStatus'>
    <livewire:project.service.modal />
    <h1>Configuration</h1>
    <x-resources.breadcrumbs :resource="$service" :parameters="$parameters" />
    <x-services.navbar :service="$service" :parameters="$parameters" />
</div>

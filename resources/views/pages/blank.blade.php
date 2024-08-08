<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">
                    {{ __('Blank') }}
                </h4>

                <div class="page-title-right">
                    <x-breadcrumb :items="[
                        ['text' => 'Blank', 'active' => true]
                    ]" />
                </div>
            </div>
            <x-primary-button class="btn-primary">
                {{ __('Button Primary') }}
            </x-primary-button>
        </div>
    </div>
</x-app-layout>

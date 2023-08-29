<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


{{-- <!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        .font-semibold {
            font-weight: 600;
        }
        .text-xl {
            font-size: 1.25rem;
        }
        .text-gray-800 {
            color: #1f2937;
        }
        .leading-tight {
            line-height: 1.25;
        }
        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .max-w-7xl {
            max-width: 80rem;
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .space-y-6 > :not([hidden]) ~ :not([hidden]) {
            --space-y-reverse: 0;
            margin-top: calc(1.5rem * var(--space-y-reverse));
            margin-bottom: calc(1.5rem * var(--space-y-reverse));
        }
        .p-4 {
            padding: 1rem;
        }
        .p-8 {
            padding: 2rem;
        }
        .bg-white {
            background-color: #fff;
        }
        .shadow {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        .sm\:rounded-lg {
            border-radius: 0.5rem;
        }
        .max-w-xl {
            max-width: 36rem;
        }
    </style>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
 --}}

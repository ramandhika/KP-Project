<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <!-- Add Posts Button -->
                <div class="mb-4">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        {{ __('Add Posts') }}
                    </a>
                </div>

                <!-- Posts DataTable -->
                <table id="postsTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Content') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

@push('scripts')
<script>
$(document).ready(function() {
    $('#postsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('home') }}',
        columns: [
            { data: 'title', name: 'title' },
            { data: 'content', name: 'content' },
            { data: 'created_at', name: 'created_at' },
            { data: 'actions', name: 'actions' }
        ]
    });
});
</script>
@endpush

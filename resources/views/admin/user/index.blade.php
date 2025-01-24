<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Users
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <section>
                    <header class="mb-4">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Users List') }}
                        </h2>
                    </header>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">E-mail</th>
                                    <th scope="col" class="px-6 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('admin.user.toggle-status', $user->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-{{$user->status != 1 ? 'success' : 'warning'}} btn-sm" style="background-color:{{$user->status != 1 ? '#198754' : '#ffc107'}}">
                                                @if ($user->status != 1)
                                                    <i class="bi bi-check-circle-fill"></i>
                                                @else
                                                    <i class="bi bi-x-circle-fill"></i>
                                                @endif
                                            </button>
                                        </form>
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.user.edit', $user->id) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.role.edit', $user->id) }}">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" colspan="100" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        No user available in the list.
                                    </th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
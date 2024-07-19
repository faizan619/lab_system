@forelse ($data as $dd)
    <tr>
        <td class="border px-2 py-1 font-semibold">{{ $dd->id }}</td>
        <td class="border px-2 py-1 font-semibold w-full">{{ $dd->department_name }}</td>
        <td class="border px-3 font-semibold">
            <div class="flex gap-5">
                <button class="edit-button px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700 text-white"
                    type="button" title="Edit" data-id="{{ $dd->id }}" data-name="{{ $dd->department_name }}">
                    <i class="fa-solid fa-pen-to-square fa-lg"></i>
                </button>
                <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="px-5 rounded-sm text-sm py-1 bg-red-600 hover:bg-red-700 text-white">
                        <i title="Delete" class="fa-solid fa-trash fa-lg"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="3" class="text-center">No Department Data Available</td>
    </tr>
@endforelse

@if ($data->hasPages())
    <div class="mt-5">
        {{ $data->links() }}
    </div>
@endif

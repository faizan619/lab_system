@forelse ($data as $dd)
    <tr>
        <td class="border p-2 font-semibold">{{ $dd->id }}</td>
        <td class="border p-2 font-semibold">{{ $dd->department_name }}</td>
        <td class="border px-3 font-semibold">
            <div class="flex gap-5">
                <a href="{{ route('dept.edit', $dd->id) }}">
                    <button class="px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700 text-white">Edit</button>
                </a>
                <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="px-5 rounded-sm text-sm py-1 bg-red-600 hover:bg-red-700 text-white">Delete</button>
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
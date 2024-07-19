@forelse ($data as $dd)
    <tr>
        <td class="border p-2 font-semibold">{{ $dd->id }}</td>
        <td class="border p-2 font-semibold">{{ $dd->sub_department_name }}</td>
        <td class="border px-3 font-semibold flex gap-3">
            <button title="Edit Sub Department" class="px-3 rounded-sm text-sm py-1 bg-blue-800 text-white"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
            <button title="Delete Sub Department" class="px-3 rounded-sm text-sm py-1 bg-red-800 text-white"><i class="fa-solid fa-trash fa-lg"></i></button>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="3" class="text-center">No Department Data Available</td>
    </tr>
@endforelse

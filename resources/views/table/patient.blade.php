@forelse ($data as $dd)
    <tr>
        <td class="border px-1 ">{{ $dd->id }}</td>
        <td class="border px-1 ">{{ $dd->user_card_no }}</td>
        <td class="border px-1 ">{{ $dd->fname }} {{ $dd->mname }} {{ $dd->lname }}</td>
        <td class="border px-1 ">{{ $dd->register_date }}</td>
        <td class="border px-1 flex gap-3 flex justify-center items-center">
            <a href={{ route('dept.show', $dd->id) }}>
                <button class="px-3 border text-sm py-2 hover:bg-blue-800 rounded-md bg-blue-700 text-white"><i
                        class="fa-regular fa-address-card"></i></button>
            </a>
            <button class="px-3 border text-sm py-2 hover:bg-green-800 rounded-md bg-green-700 text-white"><i
                    class="fa-solid fa-inbox fa-xl"></i></button>
            <button class="px-3 border text-sm py-2 hover:bg-gray-800 rounded-md bg-gray-700 text-white"><i
                    class="fa-solid fa-receipt fa-lg"></i></button>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" class="text-center">No Patient Data Available</td>
    </tr>
@endforelse

@if ($data->hasPages())
    <div class="mt-5">
        {{ $data->links() }}
    </div>
@endif
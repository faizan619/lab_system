@forelse ($data as $dd)
    <tr>
        <td class="border p-2 font-semibold">{{ $dd->id }}</td>
        <td class="border p-2 font-semibold">{{ $dd->test_name }}</td>
        <td class="border p-2 font-semibold">{{ $dd->test_price }}</td>
        <td class="border px-3 font-semibold">
            <div class="flex gap-5">
                <a href="{{route('dept.edit',$dd->id)}}">
                    <button class="px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700  text-white"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                </a>
                <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p
                        class="px-5 rounded-sm text-sm py-1 bg-red-600 hover:bg-red-700 cursor-pointer  text-white">
                        <i class="fa-solid fa-trash"></i>
                    </p>
                </form>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">No Test Data Available</td>
    </tr>
@endforelse
@if ($data->hasPages())
    <div class="mt-5">
        {{ $data->links() }}
    </div>
@endif


{{-- @forelse ($data as $dd)
    <tr>
        <td class="border p-2 font-semibold">{{ $dd->id }}</td>
        <td class="border p-2 font-semibold">{{ $dd->test_name }}</td>
        <td class="border p-2 font-semibold">{{ $dd->sub_dept_id }}</td>
        <td class="border p-2 font-semibold">{{ $dd->center_id }}</td>
        <td class="border px-3 font-semibold">
            <div class="flex gap-5">
                <a href="{{route('dept.edit',$dd->id)}}">
                    <button class="px-5 rounded-sm text-sm py-1 bg-blue-600 hover:bg-blue-700  text-white"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                </a>
                <form action="{{ route('dept.destroy', $dd->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p
                        class="px-5 rounded-sm text-sm py-1 bg-red-600 hover:bg-red-700 cursor-pointer  text-white">
                        <i class="fa-solid fa-trash"></i>
                    </p>
                </form>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">No Test Data Available</td>
    </tr>
@endforelse
@if ($data->hasPages())
    <div class="mt-5">
        {{ $data->links() }}
    </div>
@endif --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($tests as $dd)
    <tr>
        <td class="border p-1 font-semibold">{{ $dd->id }}</td>
        <td class="border p-1 font-semibold">{{ $dd->test_name }}</td>
        <td class="border p-1 font-semibold">{{ $dd->test_price }}</td>
        <td class="border px-3 font-semibold">
            @include('component.button')
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">No Test Data Available</td>
    </tr>
@endforelse
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow">

            <div class="flex items-center justify-between p-2 px-5 border-b">
                <h3 class="text-xl font-semibold text-gray-900">Add New Test Parameter</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="default-modal">
                    <i class="fa-solid fa-xmark fa-lg"></i>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form id="edit-form" action="" method="POST" class="px-5 py-3 flex flex-col gap-3">
                @csrf
                <div class="flex gap-3">
                    <input type="text" name="test_id" value="" hidden>
                    <label for="test_name">
                        <p class="font-semibold">Test Name:</p>
                        <input type="text" name="test_name" id="test_name" class="p-1 rounded-md w-32 bg-gray-300"
                            readonly>
                    </label>
                    <label for="test_parameter">
                        <p class="font-semibold">Test Parameter:</p>
                        <input type="text" name="parameter" id="test_parameter" class="p-1 rounded-md"
                            placeholder="Enter Test Parameter">
                    </label>
                    <label for="unit">
                        <p class="font-semibold">Unit:</p>
                        <input type="text" name="unit" id="unit" class="p-1 w-32 rounded-md"
                            placeholder="Enter Test Unit">
                    </label>
                    <label for="decimal_point">
                        <p class="font-semibold">Decimal:</p>
                        <select name="decimal_point" id="decimal_point" class="p-1 rounded-md w-24">
                            <option value=".0">1</option>
                            <option value=".00">2</option>
                            <option value=".000">3</option>
                            <option value=".0000">4</option>
                        </select>
                    </label>
                </div>
                <div class="flex gap-3">
                    <label for="normal_range" class="w-full">
                        <p class="font-semibold">Normal Range</p>
                        <textarea name="normal_range" id="normal_range" class="p-1 rounded-md w-full"></textarea>
                    </label>
                </div>
                <div class="flex gap-3">
                    <label for="help_value">
                        <p class="font-semibold">Help Value</p>
                        <input type="text" name="help_value" id="help_value" placeholder="Help Value"
                            class="p-1 rounded-md">
                    </label>
                    <label for="min">
                        <p class="font-semibold">Minimum</p>
                        <input type="text" name="minimum" id="min" placeholder="Minimum:"
                            class="p-1 rounded-md">
                    </label>
                    <label for="max">
                        <p class="font-semibold">Maximum</p>
                        <input type="text" name="maximum" id="max" placeholder="Maximum:"
                            class="p-1 rounded-md">
                    </label>
                </div>
                <div class="flex gap-3">
                    <label for="test_footer" class="w-full">
                        <p class="font-semibold">Test Footer</p>
                        <textarea name="test_footer" id="test_footer" class="p-1 rounded-md w-full"></textarea>
                    </label>
                </div>

                <div class="flex items-center pt-3 border-t gap-5">
                    <button type="submit"
                        class="px-5 py-2 rounded-md bg-blue-700 hover:bg-blue-800 text-white">Add</button>
                    <button data-modal-hide="default-modal" type="button"
                        class="px-5 py-2 rounded-md border text-blue-700 border-dashed border-blue-700">Close
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>


</body>
</html>

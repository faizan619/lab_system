@extends('masterLayout')

@section('title')
    Add Parameter |
@endsection

@section('body')
    <div class="flex justify-center items-center">
        <div class="w-[70%] mt-5">
            <h1 class="text-center font-semibold text-xl">Test Parameter</h1>
            <hr class="border-blue-800" />
            <div class="mt-5 flex flex-col justify-center items-center" id="form-container">
                <form action="" method="POST" class="border flex flex-col gap-1 my-3 px-5 py-3 rounded-md shadow-md shadow-black" id="parameter-form">
                    @csrf
                    <div class="flex gap-3">
                        <input type="text" name="test_id" value="{{$tests->id}}" hidden>
                        <label for="test_name">
                            <p class="font-semibold">Test Name:</p>
                            <p class="border border-black cursor-not-allowed p-1 rounded-md bg-gray-300 w-32">{{$tests->test_name}}</p>
                        </label>
                        <label for="test_parameter">
                            <p class="font-semibold">Test Parameter:</p>
                            <input type="text" name="parameter" id="test_parameter" class="p-1 rounded-md" placeholder="Enter Test Parameter">
                        </label>
                        <label for="unit">
                            <p class="font-semibold">Unit:</p>
                            <input type="text" name="unit" id="unit" class="p-1 w-32 rounded-md" placeholder="Enter Test Unit">
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
                            <input type="text" name="help_value" id="help_value" placeholder="Help Value" class="p-1 rounded-md">
                        </label>
                        <label for="min">
                            <p class="font-semibold">Minimum</p>
                            <input type="text" name="minimum" id="min" placeholder="Minimum:" class="p-1 rounded-md">
                        </label>
                        <label for="max">
                            <p class="font-semibold">Maximum</p>
                            <input type="text" name="maximum" id="max" placeholder="Maximum:" class="p-1 rounded-md">
                        </label>
                    </div>
                    <div class="flex gap-3">
                        <label for="test_footer" class="w-full">
                            <p class="font-semibold">Test Footer</p>
                            <textarea name="test_footer" id="test_footer" class="p-1 rounded-md w-full"></textarea>
                        </label>
                    </div>
                    <div class="flex gap-3">
                        <button class="border px-3 py-1 rounded-md bg-blue-700 hover:bg-blue-800 text-white" type="submit">Save</button>
                        {{-- <button type="button" id="add-more" class="border px-3 py-1 rounded-md bg-green-700 hover:bg-green-800 text-white">Add More</button> --}}
                        {{-- <button type="submit" class="border px-3 py-1 rounded-md bg-green-700 hover:bg-green-800 text-white">Add More</button> --}}
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                            Add More
                          </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--model-->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">

                <div class="flex items-center justify-between p-2 px-5 border-b">
                    <h3 class="text-xl font-semibold text-gray-900">Add New Test Parameter</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="default-modal">
                        <i class="fa-solid fa-xmark fa-lg"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <form id="edit-form" action="" method="POST" class="px-5 py-3 flex flex-col gap-3">
                    @csrf
                    <div class="flex gap-3">
                        <input type="text" name="test_id" value="{{$tests->id}}" hidden>
                        <label for="test_name">
                            <p class="font-semibold">Test Name:</p>
                            <p class="border border-black cursor-not-allowed p-1 rounded-md bg-gray-300 w-32">{{$tests->test_name}}</p>
                        </label>
                        <label for="test_parameter">
                            <p class="font-semibold">Test Parameter:</p>
                            <input type="text" name="parameter" id="test_parameter" class="p-1 rounded-md" placeholder="Enter Test Parameter">
                        </label>
                        <label for="unit">
                            <p class="font-semibold">Unit:</p>
                            <input type="text" name="unit" id="unit" class="p-1 w-32 rounded-md" placeholder="Enter Test Unit">
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
                            <input type="text" name="help_value" id="help_value" placeholder="Help Value" class="p-1 rounded-md">
                        </label>
                        <label for="min">
                            <p class="font-semibold">Minimum</p>
                            <input type="text" name="minimum" id="min" placeholder="Minimum:" class="p-1 rounded-md">
                        </label>
                        <label for="max">
                            <p class="font-semibold">Maximum</p>
                            <input type="text" name="maximum" id="max" placeholder="Maximum:" class="p-1 rounded-md">
                        </label>
                    </div>
                    <div class="flex gap-3">
                        <label for="test_footer" class="w-full">
                            <p class="font-semibold">Test Footer</p>
                            <textarea name="test_footer" id="test_footer" class="p-1 rounded-md w-full"></textarea>
                        </label>
                    </div>

                    <div class="flex items-center pt-3 border-t gap-5">
                        <button type="submit" class="px-5 py-2 rounded-md bg-blue-700 hover:bg-blue-800 text-white">Add</button>
                        <button data-modal-hide="default-modal" type="button"
                                class="px-5 py-2 rounded-md border text-blue-700 border-dashed border-blue-700">Close
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script>
        // $(document).ready(function(){
        //     // $('#add-more').click(function(){
        //     //     var formClone = $('#parameter-form').clone();
        //     //     formClone.find('input').not('[name="test_id"]').val(''); 
        //     //     formClone.find('textarea').val(''); 
        //     //     formClone.find('#add-more').remove();
        //     //     formClone.find('.remove-form').remove(); // Remove the existing remove button from the clone
        //     //     formClone.find('.flex.gap-3').last().append('<button type="button" class="remove-form border px-3 py-1 rounded-md bg-red-700 hover:bg-red-800 text-white">X</button>'); // Add Remove button inside the correct div
        //     //     $('#form-container').append(formClone);
        //     // });

        //     // $(document).on('click', '.remove-form', function(){
        //     //     $(this).closest('form').remove();
        //     // });
        // });
    </script>
@endsection

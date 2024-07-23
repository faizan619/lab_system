<div class="max-w-80 w-72 h-screen overflow-y-auto border-r-2 border-blue-700">
    <div class="flex justify-center items-center py-5">
        <img src="/assets/logo.jpg" alt="company logo" class="w-24">
        <div class="flex flex-col text-xl italic font-bold">
            <p>Deltasoft</p>
            <p>System </p>
        </div>
    </div>
    <div class="">
        <ul class="px-1 font-semibold capitalize flex flex-col gap-3">
            <div>
                <details>
                    <summary
                        class="shadow-sm shadow-blue-300 flex justify-between items-center cursor-pointer py-2 rounded-md px-3 text-md bg-blue-900 text-white ">
                        <div class="flex gap-3">
                            <p><img src="/icons/reception.png" alt="icon1" class="w-6"></p>
                            <p>Reception Panel</p>
                        </div>
                        <img src="/icons/dropdown.png" alt="dropdown" class="w-5 h-5">
                    </summary>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('create') }}">Patient's Registration</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('index') }}">View Patient's Record</a></p>
                </details>
            </div>

            <div>
                <details>
                    <summary
                        class="shadow-sm shadow-blue-300 flex justify-between items-center cursor-pointer py-2 rounded-md px-3 text-md bg-blue-900 text-white">
                        <div class="flex gap-3">
                            <p><img src="/icons/search.png" alt="icon1" class="w-6"></p>
                            <p>Search Panel</p>
                        </div>
                        <img src="/icons/dropdown.png" alt="dropdown" class="w-5 h-5">
                    </summary>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search1')}}">Daily Collection Report</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search2')}}">Patient Register Report</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search3')}}">Patient Collection Report</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search4')}}">Patient Collection Report X-ray</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search5')}}">Patient Collection Report Sonography</a> </p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search5')}}">Reference Report X-Ray</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search6')}}">Reference Report Sonography</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('search7')}}">Summary Report</a></p>
                </details>
            </div>

            <div>
                <details>
                    <summary
                        class="shadow-sm shadow-blue-300 flex justify-between items-center cursor-pointer py-2 rounded-md px-3 text-md bg-blue-900 text-white ">
                        <div class="flex gap-3">
                            <p><img src="/icons/admin.png" alt="icon1" class="w-6"></p>
                            <p>Master Panel</p>
                        </div>
                        <img src="/icons/dropdown.png" alt="dropdown" class="w-5 h-5">
                    </summary>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('test.index')}}">Test Name</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('parameter.index')}}">Test Parameter</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('dept.index') }}">Main Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('subdept.index') }}">Sub Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('register')}}">User Registration</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('doc_ref_form') }}">Create Doctor Reference</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('center_ref_form') }}">Create Center Reference</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('dept.create') }}">Add Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{ route('subdept.create') }}">Add Sub Department</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('test.create')}}">Add New Test</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('parameter.create')}}">Add Test Parameter</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('help_value')}}">Add Help Value</a></p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer"><a href="{{route('rate')}}">Test Rate</a></p>
                </details>
            </div>

        </ul>
    </div>
</div>

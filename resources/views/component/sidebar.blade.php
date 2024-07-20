<div class="max-w-80 w-72 h-screen overflow-y-auto border-r-2 border-blue-700">
    <div class="flex justify-center items-center py-5">
        {{-- <h1 class="text-center uppercase font-bold text-2xl py-3 font-mono ">Lab System</h1> --}}
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
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Daily Collection Report</p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Patient Register Report</p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Patient Collection Report</p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Patient Collection Report X-ray</p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Patient Collection Report Sonography </p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Reference Report X-Ray</p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Reference Report Sonography</p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Summary Report</p>
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
                    {{-- <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">User Login Log</p> --}}
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
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Add Help Value</p>
                    <p class="py-2 ml-2 rounded-md hover:underline cursor-pointer">Test Rate</p>
                </details>
            </div>

        </ul>
    </div>
</div>

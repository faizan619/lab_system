<div class="max-w-80 w-72 h-screen overflow-y-auto">
    <div class="flex justify-center items-center py-5">
        {{-- <h1 class="text-center uppercase font-bold text-2xl py-3 font-mono ">Lab System</h1> --}}
        <img src="/assets/logo.jpg" alt="company logo" class="w-24">
        <div class="flex flex-col text-xl italic font-bold">
            <p>Deltasoft</p>
            <p>System </p>
        </div>
    </div>
    <div class="list-style-type:desc">
        <ul class="px-1 font-semibold capitalize flex flex-col gap-3">

            <div class="">
                <div class="shadow-sm shadow-blue-300 flex items-center gap-3 py-2 rounded-md px-5 text-xl bg-blue-900 text-white">
                    <p><img src="/icons/reception.png" alt="icon1" class="w-6"></p>
                    <p>Reception Panel</p>
                </div>

                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('create')}}">Patient's Registration</a></p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('index')}}">View Patient's Record</a></p>
                </div>
            </div>

            <div class="">
                <div class="shadow-sm shadow-blue-300 flex gap-3 py-2 rounded-md px-5 text-xl bg-blue-900 text-white">
                    <p><img src="/icons/search.png" alt="icon1" class="w-6"></p>
                    <p>Search Panel</p>
                </div>

                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Daily Collection Report</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Patient Register Report</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Patitent Collection Report</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Patitent Collection Report X-ray</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Patitent Collection Report Sonography</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Reference Report X-Ray</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Reference Report Sonography</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Summary Report</p>
                </div>
            </div>

            <div class="">
                <div class="shadow-sm shadow-blue-300 flex gap-3 py-2 rounded-md px-5 text-xl bg-blue-900 text-white ">
                    <p><img src="/icons/admin.png" alt="icon1" class="w-6"></p>
                    <p>Admin Panel</p>
                </div>

                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">User Login Log</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Test Name</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Test Parameter</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('dept.index')}}">Main Department</a></p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('subdept.index')}}">Sub Department</a></p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">User Registration</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('doc_ref_form')}}">Create Doctor Reference</a></p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('center_ref_form')}}">Create Center Reference</a></p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('dept.create')}}">Add Department</a></p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer"><a href="{{route('subdept.create')}}">Add Sub Department</a></p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Add New Test</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Add Test Parameter</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Add Help Value</p>
                </div>
                <div class="flex gap-2 ml-2 items-center">
                    <p class="py-2 rounded-md hover:underline cursor-pointer">Test Rate</p>
                </div>

            </div>

        </ul>
    </div>
</div>

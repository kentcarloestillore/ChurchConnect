<div class="w-fit h-screen flex mx-auto bg-white shadow-lg">
    <section class="text-white w-64 flex-shrink-0 flex flex-col h-full overflow-auto" style="background-color: #183F54;">
        <div id="brand" class="flex items-center justify-center text-xl font-medium h-16 px-6">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="h-10 inline-block mr-2 rounded-full"> Church Connect
        </div>
        <hr>
        <nav id="main-nav" class="flex flex-col">

            <div class="flex align-middle w-full text-lg">
                <a href="/dashboard" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/dashboard.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Dashboard
                </a>
            </div>

            <!-- Register Dropdown Trigger -->
            <div class="text-lg">
                <div class="py-3 px-6 hover:bg-blue-600 cursor-pointer w-full" onclick="toggleDropdownRegister()">
                    <img src="{{ asset('icons/register.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Register
                </div>
            </div>

            <!-- Register Dropdown Content -->
            <div id="registerdropdownContent" class="flex flex-col bg-gray-500 rounded-lg left-0 mt-2 z-10 hidden mx-2">
                <a href="/register/baptismal" class="hover:bg-blue-500 p-2">Baptismal</a>
                <a href="/register/confirmation" class="hover:bg-blue-500 p-2">Confirmation</a>
                <a href="/register/marriage" class="hover:bg-blue-500 p-2">Marriage</a>
                <a href="/register/death" class="hover:bg-blue-500 p-2">Death</a>
            </div>

            <!-- Retrieve Dropdown Trigger -->
            <div class="text-lg">
                <div class="py-3 px-6  hover:bg-blue-600 cursor-pointer" onclick="toggleDropdownRetrieve()">
                    <img src="{{ asset('icons/retrieve.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Retrieve
                </div>

            </div>

            <!-- Retrieve Dropdown Content -->
            <div id="retrievedropdownContent" class="flex flex-col bg-gray-500 rounded-lg left-0 mt-2 z-10 hidden mx-2">
                <a href="{{ route('baptismals.list') }}" class="hover:bg-blue-500 p-2">Baptismal</a>
                <a href="{{ route('confirmations.list') }}" class="hover:bg-blue-500 p-2">Confirmation</a>
                <a href="{{ route('marriages.list') }}" class="hover:bg-blue-500 p-2">Marriage</a>
                <a href="{{ route('deaths.list') }}" class="hover:bg-blue-500 p-2">Death</a>
            </div>

            <div class="flex align-middle w-full text-lg">
                <a href="/donations" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/donation.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Donations
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/pss" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/pss.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">PSS
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/receipts" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/receipts.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Receipts
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/schedule" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/schedule.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Schedule
                </a>

            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/earning" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/earning.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Earning
                </a>
            </div>
            <div class="flex align-middle w-full text-lg">
                <a href="/pamisa" class="py-3 px-6 hover:bg-blue-600 w-full">
                    <img src="{{ asset('icons/pamisa.svg') }}" alt="dashboard" class="h-10 inline-block mr-2 rounded-full">Pamisa
                </a>
            </div>
        </nav>
        {{-- <iframe width="478" height="849" src="https://www.youtube.com/embed/n9lEd_QdWsw" title="In 2011, Iran Captured a Stealth US Drone RQ-170" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
    </section>
</div>

<script>
    //function to show the register drop down content
    function toggleDropdownRegister() {
        const dropdown = document.getElementById('registerdropdownContent');
        dropdown.classList.toggle('hidden');
    }

    //function to show the retrieve drop down content
    function toggleDropdownRetrieve() {
        const dropdown = document.getElementById('retrievedropdownContent');
        dropdown.classList.toggle('hidden');
    }
</script>

<div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-6">
    <div class="mx-auto max-w-screen-md sm:text-center">
        <form>
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                <div class="relative w-full">
                    <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 ">Search</label>
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-blue-500 focus:border-blue-500 " placeholder="search blogs.." type="search" id="search" name="search" autocomplete="off">
                </div> 
                <div>
                    <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-[#1D503A]  shadow-md hover:bg-[#FAF5EE] hover:text-gray-700 border-[#1D503A] sm:rounded-none sm:rounded-r-lg focus:ring-4 focus:ring-blue-300">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
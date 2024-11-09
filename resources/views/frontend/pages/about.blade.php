<x-layouts.frontend>
    <div class="md:flex mt-10 pb-3 border-b">
        <div class="w-1/2 md:w-1/3 text-center m-auto">
            <img src="{{\App\Models\Config::getPath(\App\Models\Config::USER_PHOTO)}}"
                 alt="Girls Who Code"/>
        </div>
        <div class="w-full md:w-2/3 mt-10 md:ml-10">
            <h3>Welcome to Girls Who Code!</h3>
            <h1><span class="text-gray-500">We are </span>Girls Who Code</h1>
            <section class="text-gray-600">
                Dedicated to inspiring, educating, and equipping young women with the computing skills to pursue 21st century opportunities.
            </section>
            <x-frontend.social-links class="mt-3"/>
        </div>
    </div>
    <div class="md:flex justify-between mt-5 md:mt-20">
        <section>
            <h2>Our Mission</h2>
            <p>We strive to close the gender gap in technology and change the image of what a programmer looks like and does.</p>
        </section>
    </div>
</x-layouts.frontend>

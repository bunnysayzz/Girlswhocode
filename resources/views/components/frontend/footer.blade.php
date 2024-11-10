</div>
<div class="mt-4 p-4 border-t border-blue-200 md:flex md:justify-between text-center animate-pulse">
    <div class="text-lg font-semibold">
        <?php echo '&copy; ' . (new DateTime())->format('Y') . ' Girls Who Code' ?>
        <div class="mt-2">Proudly build by: <a href="https://github.com/bunnysayzz" class="text-indigo-600 hover:text-indigo-700" target="_blank">Bunnysayzz</a></div>
    </div>

    <x-frontend.social-links class="justify-center my-3 md:my-0 animate-bounce"/>

    <div class="text-lg font-semibold">
        <a href="{{route('contact')}}" class="border-b border-dotted border-indigo-600 hover:border-indigo-700">Contact</a>
    </div>
</div>

</body>
</html>

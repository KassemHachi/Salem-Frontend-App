<div {{$attributes->class(["flex items-center col-span-1 gap-3"])}} >
    <div class="">
        {{$slot}}
    </div>
    <div class="">
        <h2 class="text-lg font-semibold text-salem-dark-blue-500">
            {{$title}}
        </h2>
        <p class="text-sm font-normal text-[#192F43]">
            {{$description}}
        </p>
    </div>
</div>
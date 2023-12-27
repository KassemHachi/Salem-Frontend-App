<div {{$attributes->class(["flex items-center col-span-1 gap-3"])}} >
    <div class="">
        {{$slot}}
    </div>
    <div class="">
        <x-ui.heading.six>
            {{$title}}
        </x-ui.heading.six>

        </h2>
        <p class="text-lg font-normal text-[#192F43]">
            {{$description}}
        </p>
    </div>
</div>
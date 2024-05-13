@if ($errors->any())
    <div role="alert" class="alert relative border rounded-md px-5 py-4 border-danger text-danger dark:border-danger my-7 flex items-center rounded-[0.6rem] border-danger/20 bg-danger/5 px-4 py-3 leading-[1.7]">
        <div class="">
            <i data-tw-merge="" data-lucide="meh" class="mr-2 h-7 w-7 fill-danger/10 stroke-[0.8]"></i>
        </div>
        <div class="ml-4 mr-8">
            <span class="font-bold">Whoops! Something went wrong.</span>
             <ul class="list-disc">
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
        </div>
        <button data-tw-merge="" data-tw-dismiss="alert" type="button" aria-label="Close" class="py-2 px-3 absolute right-0 my-auto mr-2 btn-close text-danger"><i data-tw-merge="" data-lucide="x" class="stroke-[1] w-5 h-5"></i></button>
    </div>

@endif

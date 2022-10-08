{{-- <div id="modal-delete" uk-modal>
    <div class="rounded-md shadow-2xl uk-modal-body uk-modal-dialog">
        <h2 class="mb-2 uk-modal-title">
            {{ __('Are you sure about that ') }}</h2>
        <p class="text-red-500 " id="txt-alert-delete">
            {{ __('delete category : ') }} </p><span uk-icon="warning" class="uk-margin-small-right" u></span>
        <div class="px-0 mt-6 space-x-1 text-right uk-modal-footer">
            <form action="{{ route('category.delete') }}" method="POST" name="delete_category">
                @csrf
                @method('delete')

                <input type="hidden" name="ids" id="ids" value="">
                <button class="button gray uk-modal-close" type="button">{{ __('Cancel') }}</button>
                <button class="btn-danger " type="button"
                    onclick="document.forms['delete_category'].submit();">{{ __('Delete') }}</button>
            </form>
        </div>
    </div>
</div> --}}

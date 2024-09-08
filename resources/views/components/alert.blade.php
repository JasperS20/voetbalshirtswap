@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="w-full flex flex-row justify-between p-2 rounded-md z-10 mx-auto translate-y-1/2 bg-success-color text-white" role="alert">
        Success! {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">X</button>
    </div>
@endif

@push('scripts')
    <script type="module">
        $('.close').click(function () {
            $('.alert').hide();
        })
    </script>
@endpush

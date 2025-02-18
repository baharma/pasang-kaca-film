@push('script')
    <script>
function home() {
    return {
        data: {
            data:"ngentot"
        }, // Ensure data is defined
        init() {
            Alpine.store('profileStore').profile = this.data;
            console.log(this.data);
        }
    };
}
    </script>
@endpush

<x-app-layout>
    <div x-data="home()">
        <x-navbar.index />
    </div>
</x-app-layout>

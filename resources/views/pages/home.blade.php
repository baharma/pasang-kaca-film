@push('script')
    <script>
        function home() {
            return {
                init() {
                    Alpine.store('profileStore').profile = {
                            name: 'John Doe',
                            email: 'data'
                        }, // <- Perhatikan koma di sini
                }
            }
        }
    </script>
@endpush

<x-app-layout>
    <div x-data="home()">
        <x-navbar.index />
    </div>
</x-app-layout>

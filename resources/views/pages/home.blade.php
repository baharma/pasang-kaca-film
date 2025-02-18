@push('script')
    <script>
        function home() {
            return {
                async getApi() {
                    const response = await axios.get('https://api.apexhub.id/api/web-base/code/pasangkacafilm');
                    const data = response.data;
                    Alpine.store('profileStore').profile = data.data;
                    Alpine.store('profileStore').ourServices = data.data.hero[0];
                    Alpine.store('profileStore').ourPortfolio = data.data.hero[1];
                    Alpine.store('profileStore').aboutUs = data.data.hero[2];
                },
                init() {
                    this.getApi();
                }
            };
        }
    </script>
@endpush

<x-app-layout>
    <div x-data="home()">
    </div>
    <x-navbar.index />
    <x-main-hero.index />
    <x-our-service-hero.index />
    <x-our-portfolio.index />
    <x-about-us.index />
    <x-footer.index />

</x-app-layout>

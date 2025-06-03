@props([
    // Properti untuk WebPage Schema
    'pageName' => 'Jasa Pasang Kaca Film Profesional - pasangkacafilm',
    'pageDescription' => 'Kami menyediakan jasa pasang kaca film berkualitas untuk mobil dan gedung dengan harga terjangkau.',
    'canonicalUrl' => null,
    'image' => asset('image/Logo Pasangkacafilm.webp'), // Gambar utama untuk halaman dan bisa juga untuk provider

    // Properti untuk Service Schema
    'serviceName' => 'Pemasangan Kaca Film Mobil dan Gedung', // Deskripsi tekstual dari layanan yang ditawarkan
    'showServiceSchema' => true, // Kontrol untuk menampilkan Service schema atau tidak

    // Properti untuk Provider (LocalBusiness)
    'providerName' => 'pasangkacafilm', // Nama bisnis Anda
    'providerTelephone' => '+62-XXX-XXXX-XXXX', // Placeholder untuk nomor telepon bisnis
    'providerStreetAddress' => 'Jl. Contoh Kaca Film No. 123', // Alamat jalan bisnis Anda
    'providerAddressLocality' => 'Kota Anda', // Contoh: Denpasar
    'providerAddressRegion' => 'Bali', // Contoh: Bali (sesuai konteks proyek)
    'providerPostalCode' => '80XXX', // Kode pos bisnis Anda
    'providerAddressCountry' => 'ID', // Negara (Indonesia)

    'breadcrumb' => [], // format: [['name' => 'Home', 'url' => '...'], ...]
])

<!-- WebPage Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "{{ $pageName }}",
    "description": "{{ $pageDescription }}",
    "url": "{{ $canonicalUrl ?? url()->current() }}",
    "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "{{ $image }}"
    }
}
</script>

<!-- Service Schema (optional) -->
@if($showServiceSchema && $serviceName)
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "{{ $serviceName }}", // Kategori atau jenis layanan, misal: "Window tinting"
    "name": "{{ $serviceName }}", // Bisa juga nama spesifik untuk layanan ini
    "description": "{{ $pageDescription }}", // Atau deskripsi yang lebih spesifik untuk layanan
    "provider": {
        "@type": "LocalBusiness", // Atau "Organization" jika lebih umum
        "name": "{{ $providerName }}",
        "image": "{{ $image }}",
        "telephone": "{{ $providerTelephone }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ $providerStreetAddress }}",
            "addressLocality": "{{ $providerAddressLocality }}",
            "addressRegion": "{{ $providerAddressRegion }}",
            "postalCode": "{{ $providerPostalCode }}",
            "addressCountry": "{{ $providerAddressCountry }}"
        },
        "url": "{{ $canonicalUrl ?? url()->current() }}" // URL halaman yang menawarkan layanan, atau URL utama provider
    }
}
</script>
@endif

<!-- BreadcrumbList Schema (optional) -->
@if(!empty($breadcrumb))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        @foreach($breadcrumb as $index => $item)
        {
            "@type": "ListItem",
            "position": {{ $index + 1 }},
            "name": "{{ $item['name'] }}",
            "item": "{{ $item['url'] }}"
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endif

<!-- Google Tag Manager (noscript) - Ganti GTM-XXXXXXX dengan ID GTM Anda -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

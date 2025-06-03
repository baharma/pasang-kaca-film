@props([
    'canonicalUrl' => null,
    'metaRobots' => 'index, follow',
    'ogTitle' => 'Jasa Pasang Kaca Film Profesional - pasangkacafilm',
    'ogDescription' => 'Kami menyediakan jasa pasang kaca film berkualitas untuk mobil dan gedung dengan harga terjangkau.',
    'ogImage' => asset('img/default-og.jpg'),
    'keyword' => 'pasang kaca film, jasa kaca film, kaca film mobil, kaca film gedung, spesialis kaca film, harga kaca film',
    'description' => 'Kami menyediakan jasa pasang kaca film berkualitas untuk mobil dan gedung dengan harga terjangkau. Hubungi kami untuk penawaran terbaik!'
])

<!-- SEO Meta -->
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keyword }}">
<meta name="robots" content="{{ $metaRobots }}">

<!-- Canonical -->
@if($canonicalUrl)
    <link rel="canonical" href="{{ $canonicalUrl }}" />
@endif

<!-- Open Graph -->
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:url" content="{{ $canonicalUrl ?? url()->current() }}">
<meta property="og:type" content="website">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $ogTitle }}">
<meta name="twitter:description" content="{{ $ogDescription }}">
<meta name="twitter:image" content="{{ $ogImage }}">

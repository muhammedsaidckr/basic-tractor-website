<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $news = \App\Models\News::query()->orderBy('created_at', 'desc')->get()->take(3);
    $vehicles = \App\Models\Vehicle::query()->orderBy('created_at', 'desc')->get()->take(8);
    return view('welcome', compact('news', 'vehicles'));
})->name('welcome');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('araclar/{vehicle}', function ($slug) {
    $vehicle = \App\Models\Vehicle::query()->where('slug', $slug)->first();
    return view('front.vehicle', compact('vehicle'));
});

Route::get('/{link}', function ($link) {
    switch ($link) {
        case 'dernek-tuzugu':
            $header = 'Dernek Tüzüğü';
            return view('front.single', compact('header', 'link'));
            break;
        case 'kurumsal':
            $header = 'Kurumsal';
            return view('front.single', compact('header', 'link'));
            break;
        case 'yonetim-kurulu':
            $header = 'Yönetim Kurulu';
            $teachers = [
                [
                    'name' => 'MURAT GERENLİ',
                    'status' => 'Başkan',
                    'short_description' => 'Yargı Akademi KPSS Kursu-Değişim Özel Öğretim Kursu-English House Dil Okulu- Boğaziçi Şehir Koleji',
                    'description' => '
                        <p>Yargı Akademi KPSS Kursu-Değişim Özel Öğretim Kursu-English House Dil Okulu- Boğaziçi Şehir Koleji</p>
                        <p>01.03.1975 tarihinde Kütahya’nın Altıntaş ilçesi Zafertepeçalköy’ünde doğdum. İlk ve Ortaöğrenimimi Kütahya’da tamamladıktan sonra öğrencilik hayatıma Kayseri Erciyes Üniversitesi, Fen-Edebiyat Fakültesi Fizik Bölümünde devam ettim. Üniversiteden 1998 yılında mezun oldum. </p>
                        <p>Öğretmenlik mesleğine 1997 yılında stajyer öğretmen olarak “Boğaziçi Dershanesi”nde başladım. 2004 yılında askerlik vazifemi tamamladıktan sonra özel bir eğitim kurumunda 2 yıl görev yaptım. 2007 yılında ortaklarımla birlikte “Pi Analitik Dershanesi”ni kurduk. 2013 yılında kurumumuzu “Boğaziçi Dershanesi” ile birleştirerek eğitim-öğretim faaliyetlerimizi “Boğaziçi Eğitim Kurumları” çatısı altında devam ettirdik.</p>
                        <p>Günümüzde Yargı Akademi KPSS Kursu, Değişim Özel Öğretim Kursu, English House Dil Okulu ve Boğaziçi Şehir Koleji kurumlarında eğitim-öğretim faaliyetlerine aktif olarak devam etmekteyim.</p>
                    ',
                    'slug' => 'murat-gerenli'
                ],
                ['name' => 'KADİR KAPLAN', 'status' => 'Sekreter', 'short_description' => 'Kariyer Kurs Kişisel Gelişim Kursu',
                    'description' => '
                        <p>Kariyer Kurs Kişisel Gelişim Kursu</p>
                        <p>1988 tarihinde Kütahya Merkez’de doğdum. İlk ve Ortaöğrenimimi Kütahya Evliya Çelebi Okulu’nda Liseyi Kütahya Süper Lise’de tamamladıktan sonra öğrencilik hayatıma Doğu Akdeniz Üniversitesi, Türkçe öğretmeni aynı zamanda yabancılara Türkçe Öğretimi Uzman Öğretici  Bölümünden mezun oldum. </p>
                        <p>2015 yılında askerlik vazifemi tamamladıktan sonra 2012-2018 yılında özel  eğitim kurumlarında görev yaptım. 2019 yılında ortaklarımla birlikte “Kariyer Kurs Kişisel Gelişim Kursu ”nu kurduk.</p>
                        <p>Günümüzde Kariyer Kurs Kişisel Gelişim Kursu’ da eğitim-öğretim faaliyetlerine aktif olarak devam etmekteyim.</p>
                    ',
                    'slug' => 'kadir-kaplan'],
                ['name' => 'MEHMET OCAK', 'status' => 'Üye', 'short_description' => 'Özel Kütahya Dinamik Özel Eğitim Kursu',
                    'description' => '
                        <p>Özel Kütahya Dinamik Özel Eğitim Kursu</p>
                        <p>Özel Kütahya Derece Özel Eğitim Kursu</p>
                        <p>Doğum Tarihi ve Yeri: 07/05/1979 DİNAR </p>
                        <p>Mezuniyet Yeri: DUMLUPINAR ÜNV. FEN EDEBİYAT FAK. FİZİK BÖLÜMÜ / 2000 Yılı</p>
                        <p>2000-2004 Milli Eğitim Vekil Öğretmen</p>
                        <p>2004-2021 Özel Eğitim Kursu</p>
                    ',
                    'slug' => 'mehmet-ocak'],
                ['name' => 'İSMAİL YUMURTACI', 'status' => 'Üye', 'short_description' => 'Kütahya Elit Kişisel Gelişim Kursu',
                    'description' => '
                        <p>KÜTAHYA ELİT KİŞİSEL GELİŞİM KURSU</p>
                        <p>Tavşanlı / 07.11.1981</p>
                        <p>DOĞU AKDENİZ ÜNİVERSİTESİ TÜRK DİLİ ve EDEBİYATI</p>
                        <p>Mezuniyet 2006</p>
                        <p>2007-2014 KÜTAHYA AÇI DERSHANESİ</p>
                        <p>2014-2016 GERMİYAN KOLEJİ</p>
                        <p>2017-2021 ELİT KİŞİSEL GELİŞİM KURSU</p>
                    ',
                    'slug' => 'ismail-yumurtaci'
                ],
                ['name' => 'İLKER CEPKENLİOĞLU', 'status' => 'Üye', 'short_description' => 'Özel Kütahya Analitik Başarı Kişisel Gelişim Kursu - Kurucu Temsilcisi',
                    'description' => '
                                    <p>ÖZEL KÜTAHYA ANALİTİK BAŞARI KİŞİSEL GELİŞİM KURSU- KURUCU TEMSİLCİSİ</p>
                                    <p>05/07/1976 KÜTAHYA DOĞUMLUYUM.</p>
                                    <p>1999 TARİHİNDE ULUDAĞ ÜNİVERSİTESİ – FEN EDEBİYAT FAKÜLTESİ – MATEMATİK BÖLÜMÜ ANA BİLİM DALINDAN MEZUN OLDUM.</p>
                                    <p>1999 YILINDAN İTİBAREN KÜTAHYA İLİNDEKİ ÖZEL ÖĞRETİM KURUMLARINDA MATEMATİK ÖĞRETMENLİĞİ YAPMAKTAYIM</p>',
                    'slug' => 'ilker-cepkenlioglu'
                ],
                ['name' => 'AHMET MANAK', 'status' => 'Üye', 'short_description' => 'Özel Kütahya Son Kalem Kişisel Gelişim Kursu - Kurucu Müdür ve Kurum Müdürü',
                    'description' => '
                    <p>ÖZEL KÜTAHYA SON KALEM KİŞİSEL GELİŞİM KURSU- KURUCU MÜDÜR VE KURUM MÜDÜRÜ</p><p>15/07/1982 KÜTAHYA DOĞUMLUYUM.</p>
                    <p>13/07/2005 TARİHİNDE MARMARA ÜNİVERSİTESİ – ATATÜTK EĞİTİM FAKÜLTESİ – SOSYAL BİLGİLER ÖĞRETMENBLİĞİ ANA BİLİM DALINDAN MEZUN OLDUM.</p>
                    <p>ARALIK 2005-MAYIS 2006 DÖNEMİNDE ASKERLİK GÖREVİMİ YAPTIM.</p>
                    <p>ÖĞRETMENLİK GÖREVİME KÜTAHYA İL MİLLİ EĞİTİM MÜDÜRLÜĞÜ BÜNYESİNDE 2006-2011 YILLARI ARAINDA ÇEŞİTLİ OKULLARDA ÜCRETLİ ÖĞRETMENLİK VE OKUL MÜDÜR VEKİLLİĞİ YAPARAK BAŞLADIM. 2011 YILINDA ÖZEL ATLAS UĞUR DERSHANESİNDE BAŞLAYAN ÖZEL ÖĞRETİM KURUMLARI MACERAMA 2012 YILI İTİBARI İLE O ZAMAN Kİ İSMİYLE İHTİYAÇ AKADEMİDE ÖĞREMEN OLARAK BAŞLADIM. 2013 YILI ŞUBE AÇILIŞI İLE BERABER ŞU AN AKTİF OLARAK DEVAM ETTİĞİM KURUMDA ÖNCE KURUM MÜDÜRLÜĞÜ 2015 YILINDAN İTİBAREN İSE HEM KURUCU MÜDÜR, HEM DE KURUM MÜDÜRLÜĞÜ GÖREVLERİNİ YÜRÜTMEKTEYİM. </p>',
                    'slug' => 'ahmet-manak'
                ],
                ['name' => 'MUHAMMET BATUR', 'status' => 'Üye', 'short_description' => '',
                    'slug' => 'muhammet-batur'],
                ['name' => 'ÖMER GÜNYÜZ', 'status' => 'Üye', 'short_description' => '', 'slug' => 'omer-gunyuz'],

            ];
            return view('front.single', compact('header', 'link', 'teachers'));
            break;
        case 'araclar':
            $header = 'Araçlar';
            $vehicles = \App\Models\Vehicle::query()->orderBy('created_at', 'desc')->get()->take(8);
            return view('front.single', compact('header', 'link', 'vehicles'));
            break;
        case 'bizden-haberler':
            $header = 'Bizden Haberler';
            $news = \App\Models\News::query()->orderBy('created_at', 'desc')->get();
            return view('front.single', compact('header', 'link', 'news'));
            break;
        case 'iletisim':
            $header = 'İletişim';
            return view('front.single', compact('header', 'link'));
            break;

    }
})->name('front.single');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/vehicles', function () {
        return view('admin.video.index');
    })->name('admin.video.index');
    Route::get('/admin/vehicles/create', function () {
        return view('admin.video.create');
    })->name('admin.video.create');

    Route::get('/admin/haberler', function () {
        return view('admin.news.index');
    })->name('admin.news.index');
    Route::get('/admin/haberler/olustur', function () {
        return view('admin.news.create');
    })->name('admin.news.create');

});

<h1>Correct Word Form</h1>

<p>Package provides ability to get the correct word form depending on the number before this word.</p>

<p align="center">
  <a href="https://github.com/hivokas/correct-word-form">
    <img src="https://img.shields.io/github/stars/hivokas/correct-word-form.svg" alt="GitHub stars">
    <img src="https://img.shields.io/github/forks/hivokas/correct-word-form.svg" alt="GitHub forks">
    <img src="https://img.shields.io/github/issues/hivokas/correct-word-form.svg" alt="GitHub issues">
    <img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="GitHub license">
    <img src="https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat" alt="contributions welcome"></a>
  </a>
</p>

<h1>Installation</h1>


``` bash
composer require hivokas/correct-word-form
```

<h1>Usage examples</h1>

<h4>Russian</h4>

``` php
for ($i = 0; $i < 5; $i++) {
  $amount = rand(-20, 200) / 2;
  echo $amount . ' ' . Hivokas\CorrectWordForm\CorrectWordForm::ru($amount, 'яблоко', 'яблока', 'яблок') . PHP_EOL;
}
```
```
23.5 яблока
-7.5 яблок
33 яблока
2 яблока
41.5 яблоко
```

<h4>English</h4>

``` php
for ($i = 0; $i < 5; $i++) {
  $amount = rand(-20, 200) / 2;
  echo $amount . ' ' . Hivokas\CorrectWordForm\CorrectWordForm::en($amount, 'apple', 'apples') . PHP_EOL;
}
```
```
67.5 apples
1 apple
54.5 apples
33.5 apples
25 apples
```

<h1>Supported languages</h1>

<table>
  <tr>
    <th>Language name</th>
    <th>Language native name</th>
    <th>ISO</th>
  </tr>
  <tr>
    <td>Afrikaans</td>
    <td>Afrikaans</td>
    <td>af</td>
  </tr>
  <tr>
    <td>Amharic</td>
    <td>አማርኛ</td>
    <td>am</td>
  </tr>
  <tr>
    <td>Arabic</td>
    <td>العربية</td>
    <td>ar</td>
  </tr>
  <tr>
    <td>Aymara</td>
    <td>aymar aru</td>
    <td>ay</td>
  </tr>
  <tr>
    <td>Azerbaijani</td>
    <td>azərbaycan dili</td>
    <td>az</td>
  </tr>
  <tr>
    <td>Belarusian</td>
    <td>беларуская мова</td>
    <td>be</td>
  </tr>
  <tr>
    <td>Bulgarian</td>
    <td>български език</td>
    <td>bg</td>
  </tr>
  <tr>
    <td>Bengali</td>
    <td>বাংলা</td>
    <td>bn</td>
  </tr>
  <tr>
    <td>Bosnian</td>
    <td>bosanski jezik</td>
    <td>bs</td>
  </tr>
  <tr>
    <td>Catalan</td>
    <td>català</td>
    <td>ca</td>
  </tr>
  <tr>
    <td>Czech</td>
    <td>čeština</td>
    <td>cs</td>
  </tr>
  <tr>
    <td>Danish</td>
    <td>dansk</td>
    <td>da</td>
  </tr>
  <tr>
    <td>German</td>
    <td>Deutsch</td>
    <td>de</td>
  </tr>
  <tr>
    <td>Dzongkha</td>
    <td>རྫོང་ཁ</td>
    <td>dz</td>
  </tr>
  <tr>
    <td>Greek (modern)</td>
    <td>ελληνικά</td>
    <td>el</td>
  </tr>
  <tr>
    <td>English</td>
    <td>English</td>
    <td>en</td>
  </tr>
  <tr>
    <td>Spanish</td>
    <td>Español</td>
    <td>es</td>
  </tr>
  <tr>
    <td>Estonian</td>
    <td>eesti</td>
    <td>et</td>
  </tr>
  <tr>
    <td>Persian (Farsi)</td>
    <td>فارسی</td>
    <td>fa</td>
  </tr>
  <tr>
    <td>Fula</td>
    <td>Fulfulde</td>
    <td>ff</td>
  </tr>
  <tr>
    <td>Finnish</td>
    <td>suomi</td>
    <td>fi</td>
  </tr>
  <tr>
    <td>Faroese</td>
    <td>føroyskt</td>
    <td>fo</td>
  </tr>
  <tr>
    <td>French</td>
    <td>français</td>
    <td>fr</td>
  </tr>
  <tr>
    <td>Irish</td>
    <td>Gaeilge</td>
    <td>ga</td>
  </tr>
  <tr>
    <td>Hebrew (modern)</td>
    <td>עברית</td>
    <td>he</td>
  </tr>
  <tr>
    <td>Hindi</td>
    <td>हिन्दी</td>
    <td>hi</td>
  </tr>
  <tr>
    <td>Croatian</td>
    <td>hrvatski jezik</td>
    <td>hr</td>
  </tr>
  <tr>
    <td>Hungarian</td>
    <td>magyar</td>
    <td>hu</td>
  </tr>
  <tr>
    <td>Armenian</td>
    <td>Հայերեն</td>
    <td>hy</td>
  </tr>
  <tr>
    <td>Indonesian</td>
    <td>Bahasa Indonesia</td>
    <td>id</td>
  </tr>
  <tr>
    <td>Icelandic</td>
    <td>Íslenska</td>
    <td>is</td>
  </tr>
  <tr>
    <td>Italian</td>
    <td>Italiano</td>
    <td>it</td>
  </tr>
  <tr>
    <td>Japanese</td>
    <td>日本語 (にほんご)</td>
    <td>ja</td>
  </tr>
  <tr>
    <td>Georgian</td>
    <td>ქართული</td>
    <td>ka</td>
  </tr>
  <tr>
    <td>Kazakh</td>
    <td>қазақ тілі</td>
    <td>kk</td>
  </tr>
  <tr>
    <td>Kalaallisut</td>
    <td>kalaallisut</td>
    <td>kl</td>
  </tr>
  <tr>
    <td>Khmer</td>
    <td>ខ្មែរ</td>
    <td>km</td>
  </tr>
  <tr>
    <td>Korean</td>
    <td>한국어</td>
    <td>ko</td>
  </tr>
  <tr>
    <td>Kurdish</td>
    <td>Kurdî</td>
    <td>ku</td>
  </tr>
  <tr>
    <td>Kyrgyz</td>
    <td>Кыргызча</td>
    <td>ky</td>
  </tr>
  <tr>
    <td>Luxembourgish</td>
    <td>Lëtzebuergesch</td>
    <td>lb</td>
  </tr>
  <tr>
    <td>Lingala</td>
    <td>Lingála</td>
    <td>ln</td>
  </tr>
  <tr>
    <td>Lao</td>
    <td>ພາສາລາວ</td>
    <td>lo</td>
  </tr>
  <tr>
    <td>Lithuanian</td>
    <td>lietuvių kalba</td>
    <td>lt</td>
  </tr>
  <tr>
    <td>Latvian</td>
    <td>latviešu valoda</td>
    <td>lv</td>
  </tr>
  <tr>
    <td>Malagasy</td>
    <td>fiteny malagasy</td>
    <td>mg</td>
  </tr>
  <tr>
    <td>Māori</td>
    <td>te reo Māori</td>
    <td>mi</td>
  </tr>
  <tr>
    <td>Macedonian</td>
    <td>македонски јазик</td>
    <td>mk</td>
  </tr>
  <tr>
    <td>Mongolian</td>
    <td>Монгол хэл</td>
    <td>mn</td>
  </tr>
  <tr>
    <td>Malay</td>
    <td>bahasa Melayu</td>
    <td>ms</td>
  </tr>
  <tr>
    <td>Maltese</td>
    <td>Malti</td>
    <td>mt</td>
  </tr>
  <tr>
    <td>Burmese</td>
    <td>ဗမာစာ</td>
    <td>my</td>
  </tr>
  <tr>
    <td>Norwegian Bokmål</td>
    <td>Norsk bokmål</td>
    <td>nb</td>
  </tr>
  <tr>
    <td>Nepali</td>
    <td>नेपाली</td>
    <td>ne</td>
  </tr>
  <tr>
    <td>Dutch</td>
    <td>Nederlands</td>
    <td>nl</td>
  </tr>
  <tr>
    <td>Norwegian Nynorsk</td>
    <td>Norsk nynorsk</td>
    <td>nn</td>
  </tr>
  <tr>
    <td>Norwegian</td>
    <td>Norsk</td>
    <td>no</td>
  </tr>
  <tr>
    <td>(Eastern) Punjabi</td>
    <td>ਪੰਜਾਬੀ</td>
    <td>pa</td>
  </tr>
  <tr>
    <td>Polish</td>
    <td>język polski</td>
    <td>pl</td>
  </tr>
  <tr>
    <td>Pashto</td>
    <td>پښتو</td>
    <td>ps</td>
  </tr>
  <tr>
    <td>Portuguese</td>
    <td>Português</td>
    <td>pt</td>
  </tr>
  <tr>
    <td>Romanian</td>
    <td>Română</td>
    <td>ro</td>
  </tr>
  <tr>
    <td>Russian</td>
    <td>Русский</td>
    <td>ru</td>
  </tr>
  <tr>
    <td>Kinyarwanda</td>
    <td>Ikinyarwanda</td>
    <td>rw</td>
  </tr>
  <tr>
    <td>Sinhalese</td>
    <td>සිංහල</td>
    <td>si</td>
  </tr>
  <tr>
    <td>Slovak</td>
    <td>slovenčina</td>
    <td>sk</td>
  </tr>
  <tr>
    <td>Slovene</td>
    <td>slovenski jezik</td>
    <td>sl</td>
  </tr>
  <tr>
    <td>Somali</td>
    <td>Soomaaliga</td>
    <td>so</td>
  </tr>
  <tr>
    <td>Albanian</td>
    <td>Shqip</td>
    <td>sq</td>
  </tr>
  <tr>
    <td>Serbian</td>
    <td>српски језик</td>
    <td>sr</td>
  </tr>
  <tr>
    <td>Swedish</td>
    <td>svenska</td>
    <td>sv</td>
  </tr>
  <tr>
    <td>Swahili</td>
    <td>Kiswahili</td>
    <td>sw</td>
  </tr>
  <tr>
    <td>Tamil</td>
    <td>தமிழ்</td>
    <td>ta</td>
  </tr>
  <tr>
    <td>Tajik</td>
    <td>тоҷикӣ</td>
    <td>tg</td>
  </tr>
  <tr>
    <td>Thai</td>
    <td>ไทย</td>
    <td>th</td>
  </tr>
  <tr>
    <td>Tigrinya</td>
    <td>ትግርኛ</td>
    <td>ti</td>
  </tr>
  <tr>
    <td>Turkmen</td>
    <td>Türkmen</td>
    <td>tk</td>
  </tr>
  <tr>
    <td>Turkish</td>
    <td>Türkçe</td>
    <td>tr</td>
  </tr>
  <tr>
    <td>Ukrainian</td>
    <td>Українська</td>
    <td>uk</td>
  </tr>
  <tr>
    <td>Urdu</td>
    <td>اردو</td>
    <td>ur</td>
  </tr>
  <tr>
    <td>Uzbek</td>
    <td>Oʻzbek</td>
    <td>uz</td>
  </tr>
  <tr>
    <td>Vietnamese</td>
    <td>Tiếng Việt</td>
    <td>vi</td>
  </tr>
  <tr>
    <td>Chinese</td>
    <td>中文 (Zhōngwén)</td>
    <td>zh</td>
  </tr>
</table>

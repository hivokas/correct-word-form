<?php

namespace Hivokas\CorrectWordForm;

class CorrectWordForm
{
    /**
     * Getting the correct word form for Afrikaans language (Afrikaans) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function af(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Amharic language (አማርኛ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function am(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Arabic language (العربية) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @param string $d
     * @param string $e
     * @param string $f
     * @return string
     */
    public static function ar(float $amount, string $a, string $b, string $c, string $d, string $e, string $f): string
    {
        $n = abs($amount);

        return [$a, $b, $c, $d, $e, $f][($n == 0 ? 0 : ($n == 1 ? 1 : ($n == 2 ? 2 : ($n % 100 >= 3 && $n % 100 <= 10 ? 3 : ($n % 100 >= 11 ? 4 : 5)))))];
    }

    /**
     * Getting the correct word form for Aymara language (aymar aru) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function ay(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Azerbaijani language (azərbaycan dili) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function az(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Belarusian language (беларуская мова) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function be(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n % 10 == 1 && $n % 100 != 11 ? 0 : ($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Bulgarian language (български език) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function bg(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Bengali language (বাংলা) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function bn(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Bosnian language (bosanski jezik) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function bs(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n % 10 == 1 && $n % 100 != 11 ? 0 : ($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Catalan language (català) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ca(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Czech language (čeština) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function cs(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n == 1) ? 0 : (($n >= 2 && $n <= 4) ? 1 : 2)];
    }

    /**
     * Getting the correct word form for Danish language (dansk) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function da(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for German language (Deutsch) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function de(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Dzongkha language (རྫོང་ཁ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function dz(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Greek (modern) language (ελληνικά) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function el(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for English language (English) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function en(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Spanish language (Español) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function es(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Estonian language (eesti) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function et(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Persian (Farsi) language (فارسی) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function fa(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Fula language (Fulfulde) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ff(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Finnish language (suomi) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function fi(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Faroese language (føroyskt) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function fo(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for French language (français) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function fr(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Irish language (Gaeilge) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @param string $d
     * @param string $e
     * @return string
     */
    public static function ga(float $amount, string $a, string $b, string $c, string $d, string $e): string
    {
        $n = abs($amount);

        return [$a, $b, $c, $d, $e][($n == 1 ? 0 : ($n == 2 ? 1 : (($n > 2 && $n < 7) ? 2 : (($n > 6 && $n < 11) ? 3 : 4))))];
    }

    /**
     * Getting the correct word form for Hebrew (modern) language (עברית) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function he(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Hindi language (हिन्दी) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function hi(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Croatian language (hrvatski jezik) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function hr(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n % 10 == 1 && $n % 100 != 11 ? 0 : ($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Hungarian language (magyar) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function hu(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Armenian language (Հայերեն) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function hy(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Indonesian language (Bahasa Indonesia) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function id(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Icelandic language (Íslenska) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function is(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][(($n % 10 != 1 || $n % 100 == 11) ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Italian language (Italiano) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function it(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Japanese language (日本語 (にほんご)) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function ja(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Georgian language (ქართული) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function ka(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Kazakh language (қазақ тілі) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function kk(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Kalaallisut language (kalaallisut) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function kl(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Khmer language (ខ្មែរ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function km(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Korean language (한국어) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function ko(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Kurdish language (Kurdî) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ku(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Kyrgyz language (Кыргызча) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ky(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Luxembourgish language (Lëtzebuergesch) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function lb(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Lingala language (Lingála) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ln(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Lao language (ພາສາລາວ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function lo(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Lithuanian language (lietuvių kalba) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function lt(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n % 10 == 1 && $n % 100 != 11 ? 0 : (($n % 10 >= 2 && ($n % 100 < 10 || $n % 100 >= 20)) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Latvian language (latviešu valoda) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function lv(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][(($n % 10 == 1 && $n % 100 != 11) ? 0 : ($n != 0 ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Malagasy language (fiteny malagasy) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function mg(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Māori language (te reo Māori) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function mi(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Macedonian language (македонски јазик) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function mk(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][(($n == 1 || $n % 10 == 1) ? 0 : 1)];
    }

    /**
     * Getting the correct word form for Mongolian language (Монгол хэл) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function mn(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Malay language (bahasa Melayu) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function ms(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Maltese language (Malti) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @param string $d
     * @return string
     */
    public static function mt(float $amount, string $a, string $b, string $c, string $d): string
    {
        $n = abs($amount);

        return [$a, $b, $c, $d][($n == 1 ? 0 : (($n == 0 || ($n % 100 > 1 && $n % 100 < 11)) ? 1 : (($n % 100 > 10 && $n % 100 < 20) ? 2 : 3)))];
    }

    /**
     * Getting the correct word form for Burmese language (ဗမာစာ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function my(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Norwegian Bokmål language (Norsk bokmål) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function nb(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Nepali language (नेपाली) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ne(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Dutch language (Nederlands) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function nl(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Norwegian Nynorsk language (Norsk nynorsk) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function nn(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Norwegian language (Norsk) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function no(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for (Eastern) Punjabi language (ਪੰਜਾਬੀ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function pa(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Polish language (język polski) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function pl(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n == 1 ? 0 : (($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20)) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Pashto language (پښتو) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ps(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Portuguese language (Português) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function pt(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Romanian language (Română) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function ro(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n == 1 ? 0 : (($n == 0 || ($n % 100 > 0 && $n % 100 < 20)) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Russian language (Русский) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function ru(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][(($n % 10 == 1 && $n % 100 != 11) ? 0 : (($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20)) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Kinyarwanda language (Ikinyarwanda) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function rw(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Sinhalese language (සිංහල) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function si(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Slovak language (slovenčina) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function sk(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][($n == 1 ? 0 : (($n >= 2 && $n <= 4) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Slovene language (slovenski jezik) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @param string $d
     * @return string
     */
    public static function sl(float $amount, string $a, string $b, string $c, string $d): string
    {
        $n = abs($amount);

        return [$a, $b, $c, $d][($n % 100 == 1 ? 0 : ($n % 100 == 2 ? 1 : (($n % 100 == 3 || $n % 100 == 4) ? 2 : 3)))];
    }

    /**
     * Getting the correct word form for Somali language (Soomaaliga) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function so(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Albanian language (Shqip) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function sq(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Serbian language (српски језик) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function sr(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][(($n % 10 == 1 && $n % 100 != 11) ? 0 : (($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20)) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Swedish language (svenska) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function sv(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Swahili language (Kiswahili) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function sw(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Tamil language (தமிழ்) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ta(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Tajik language (тоҷикӣ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function tg(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Thai language (ไทย) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function th(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Tigrinya language (ትግርኛ) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ti(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Turkmen language (Türkmen) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function tk(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Turkish language (Türkçe) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function tr(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Ukrainian language (Українська) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @param string $c
     * @return string
     */
    public static function uk(float $amount, string $a, string $b, string $c): string
    {
        $n = abs($amount);

        return [$a, $b, $c][(($n % 10 == 1 && $n % 100 != 11) ? 0 : (($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20)) ? 1 : 2))];
    }

    /**
     * Getting the correct word form for Urdu language (اردو) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function ur(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n != 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Uzbek language (Oʻzbek) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function uz(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }

    /**
     * Getting the correct word form for Vietnamese language (Tiếng Việt) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @return string
     */
    public static function vi(float $amount, string $a): string
    {
        $n = abs($amount);

        return [$a][0];
    }

    /**
     * Getting the correct word form for Chinese language (中文 (Zhōngwén)) depending on the number before this word.
     *
     * @param float $amount
     * @param string $a
     * @param string $b
     * @return string
     */
    public static function zh(float $amount, string $a, string $b): string
    {
        $n = abs($amount);

        return [$a, $b][($n > 1 ? 1 : 0)];
    }
}

<?php
  $pagename = 'Bengali Phonetic (ITRANS) Help';
  $pagetitle = 'Bengali Phonetic (ITRANS) Help';
  $pagestyle = <<<END
    samp {font-family: Siddhanta; font-size:20pt;   }
    kbd {color:black; font: 0.8em sans-serif; border:solid 1px grey; background:#ccc; margin:2px 1px; padding:2px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
    .inputSequences {border-collapse: collapse;font-size: 14px;min-width: 592px;}
    .inputSequences th, .inputSequences td {padding: 7px 17px;}
    .inputSequences thead th {border-bottom: 2px solid #6ea1cc;text-transform: uppercase;}
    .inputSequences tbody td {border-bottom: 1px solid #e1edff;color: #353535;text-align: center;}
    .inputSequences tbody tr:nth-child(odd) td {background-color: #f4fbff;}
    .inputSequences tbody tr:hover td {background-color: #ffffa2;border-color: #ffff0f;}
END;
  require_once('header.php');
?>

<h2>Bengali Phonetic (ITRANS) Help</h2>
<h2><span style="color: chocolate;">Bengali Phonetic (ITRANS)</span> Keyboard Version 1.0.0</h2>

<p>This is a phonetic (ITRANS) keyboard layout for Bengali. It is based on 
<strong><a href="https://www.aczoom.com/itrans/">ITRANS</a></strong> 
transliteration scheme with some modifications. You can type using the modified ITRANS scheme 
on a regular QWERTY keyboard and get Bengali script as output.</p>
<p> In Bengali, the inherent vowel অ is pronouned as <strong>ô</strong> rather than <strong>a</strong>. 
However, for consistency in ITRANS scheme, <strong>a</strong> is used in this keyboard.</p>
<p>For example, the keys 
<kbd>s</kbd><kbd>a</kbd><kbd>M</kbd><kbd>s</kbd><kbd>k</kbd><kbd>R</kbd><kbd>t</kbd><kbd>a</kbd> 
will output the word <strong>সংস্কৃত</strong>, 
<kbd>l</kbd><kbd>a</kbd><kbd>x</kbd><kbd>m</kbd><kbd>I</kbd> will output the word <strong>লক্ষ্মী</strong>.</p>

<h3>Keyboard layouts</h3>
<p>The default and shifted layouts cover digits, consonants, vowels and other commonly used characters.</p>
<center>
<h3>Default (unshifted)</h3>
<p>      <img src="itrans_bengaliU_.png" alt="Default (unshifted) state" />    </p>
<h3>Shift</h3>
<p>      <img src="itrans_bengaliU_S.png" alt="Shift state" />    </p>
</center>
<p>Consonant conjuncts and consonants with combining marks are generated by a combination of keys as described in the tables below.</p>

<h3>Consonants</h3>
<p>The following table shows the English letters to type to get consonants.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>ক</td> <td>ka</td> <td>|</td>
<td>খ</td> <td>Ka/kha</td> <td>|</td>
<td>গ</td> <td>ga</td> <td>|</td>
<td>ঘ</td> <td>Ga/gha</td> <td>|</td>
<td>ঙ</td> <td>~Na/Nga</td>
</tr>
<tr>
<td>চ</td> <td>ca/cha</td> <td>|</td>
<td>ছ</td> <td>Ca/Cha</td> <td>|</td>
<td>জ</td> <td>ja</td> <td>|</td>
<td>ঝ</td> <td>Ja/jha</td> <td>|</td>
<td>ঞ</td> <td>~na/Ya</td>
</tr>
<tr>
<td>ট</td> <td>Ta</td> <td>|</td>
<td>ঠ</td> <td>Tha</td> <td>|</td>
<td>ড</td> <td>Da</td> <td>|</td>
<td>ঢ</td> <td>Dha</td> <td>|</td>
<td>ণ</td> <td>Na</td>
</tr>
<tr>
<td>ত</td> <td>ta</td> <td>|</td>
<td>থ</td> <td>tha</td> <td>|</td>
<td>দ</td> <td>da</td> <td>|</td>
<td>ধ</td> <td>dha</td> <td>|</td>
<td>ন</td> <td>na</td>
</tr>
<tr>
<td>প</td> <td>pa</td> <td>|</td>
<td>ফ</td> <td>pha</td> <td>|</td>
<td>ব</td> <td>ba</td> <td>|</td>
<td>ভ</td> <td>bha</td> <td>|</td>
<td>ম</td> <td>ma</td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td>য</td> <td>ya</td> <td>|</td>
<td>র</td> <td>ra</td> <td>|</td>
<td>ল</td> <td>la</td> <td>|</td>
<td>শ</td> <td>sha</td> <td>|</td>
<td></td> <td></td>
</tr>
<tr>
<td>ষ</td> <td>Sa/Sha</td> <td>|</td>
<td>স</td> <td>sa</td> <td>|</td>
<td>হ</td> <td>ha</td> <td>|</td>
<td></td> <td></td><td>|</td>
<td>ক্</td> <td>k</td>
</tr>
<tr>
<td>ক্ষ</td> <td>xa/kSa</td> <td>|</td>
<td>ত্র</td> <td>tra</td> <td>|</td>
<td>জ্ঞ</td> <td>GYa/j~na</td> <td>|</td>
<td>ৰ</td> <td>qa</td> <td>|</td>
<td>ৱ</td> <td>wa</td>
</tr>
</tbody>
</table>

<h3>Consonants with nuktas</h3>
<p>The following table shows the English letters to type to get consonants with nuktas.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>ড়</td> <td>.Da</td>
<td>|</td>
<td>ঢ়</td> <td>.Dha</td>
 <td>|</td>
<td>য়</td> <td>.ya</td>
</tr>
</tbody>
</table>

<h3>Vowels and Vowel Signs</h3>
<p>In the following table, independent vowels, dependent vowel signs and vowel signs combined with the 
consonant `k` are shown in ITRANS transliteration scheme on the top two rows. 
The third row shows Vowels in their independent form on the left and their corresponding dependent 
form (maatraa or vowel sign) on the right. The fourth row shows the vowel sign combined with the consonant `k`. 
`ka` is without any added vowel sign, where the vowel `a` is inherent. Please note that there is no
independent vowel for Bengali AU length mark, <samp>ৗ</samp>.</p>
<p>If there is a need to type ONLY the vowel signs, it can be done 
    using `@` instead of a consonant. e.g. @A will output া, @ai will output ৈ.</p>

<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th colspan="2">a</th>
<th colspan="2">aa/A</th>
<th colspan="2">i</th>
<th colspan="2">ii/I/ee</th>
<th colspan="2">u</th>
<th colspan="2">uu/U/oo</th>
<th colspan="2">R</th>
<th colspan="2">e</th>
<th colspan="2">ai/ei</th>
<th colspan="2">o</th>
<th colspan="2">au/ou</th>
<th  colspan="2"></th>
</tr>
<tr>
<th>a</th> <th>ka</th>
<th>aa</th> <th>kA</th>
<th>i</th> <th>ki</th>
<th>ii</th> <th>kI</th>
<th>u</th> <th>ku</th>
<th>uu</th> <th>kU</th>
<th>R</th> <th>kR</th>
<th>e</th> <th>ke</th>
<th>ai</th> <th>kai</th>
<th>o</th> <th>ko</th>
<th>au</th> <th>kau</th>
<th>O</th> <th>kO</th>
</tr>
</thead>
<tr>
<td>অ</td> <td></td>
<td>আ</td> <td>া</td>
<td>ই</td> <td>ি</td>
<td>ঈ</td> <td>ী</td>
<td>উ</td> <td>ু</td>
<td>ঊ</td> <td>ূ</td>
<td>ঋ</td> <td>ৃ</td>
<td>এ</td> <td>ে</td>
<td>ঐ</td> <td>ৈ</td>
<td>ও</td> <td>ো</td>
<td>ঔ</td> <td>ৌ</td>
<td></td> <td>ৗ</td>
</tr>
<tr>
<td></td> <td>ক</td>
<td>আ</td> <td>কা</td>
<td>ই</td> <td>কি</td>
<td>ঈ</td> <td>কী</td>
<td>উ</td> <td>কু</td>
<td>ঊ</td> <td>কূ</td>
<td>ঋ</td> <td>কৃ</td>
<td>এ</td> <td>কে</td>
<td>ঐ</td> <td>কৈ</td>
<td>ও</td> <td>কো</td>
<td>ঔ</td> <td>কৌ</td>
<td></td> <td>কৗ</td>
</tr>
</table>

<h3>Consonantal Diacritics</h3>
<p>Arranged with the vowels are two consonantal diacritics, the final nasal anusvāra ং 
<kbd>M</kbd> and the final fricative visarga ঃ 
<kbd>H</kbd> (called অং aṁ and অঃ aḥ). Another diacritic is the candrabindu/anunāsika ঁ 
<kbd>MM</kbd> (অঁ). These consonantal diacritics follow the vowel signs including the implicit ’a’. 
The following table shows consonant ’k’ followed by
various dependent vowel signs and consonantal diacritics ং <kbd>M</kbd>, ঃ <kbd>H</kbd> and ঁ <kbd>MM</kbd>.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th></th>
<th>ka</th>
<th>kA</th>
<th>ki</th>
<th>kI</th>
<th>ku</th>
<th>kU</th>
<th>kR</th>
<th>ke</th>
<th>kai</th>
<th>ko</th>
<th>kau</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<strong>M</strong>
</td>
<td>কং</td>
<td>কাং</td>
<td>কিং</td>
<td>কীং</td>
<td>কুং</td>
<td>কূং</td>
<td>কৃং</td>
<td>কেং</td>
<td>কৈং</td>
<td>কোং</td>
<td>কৌং</td>
</tr>
<tr>
<td>
<strong>H</strong>
</td>
<td>কঃ</td>
<td>কাঃ</td>
<td>কিঃ</td>
<td>কীঃ</td>
<td>কুঃ</td>
<td>কূঃ</td>
<td>কৃঃ</td>
<td>কেঃ</td>
<td>কৈঃ</td>
<td>কোঃ</td>
<td>কৌঃ</td>
</tr>
<tr>
<td>
<strong>MM</strong>
</td>
<td>কঁ</td>
<td>কাঁ</td>
<td>কিঁ</td>
<td>কীঁ</td>
<td>কুঁ</td>
<td>কূঁ</td>
<td>কৃঁ</td>
<td>কেঁ</td>
<td>কৈঁ</td>
<td>কোঁ</td>
<td>কৌঁ</td>
</tr>
</tbody>
</table>

<h3>Conjuncts</h3>
<p>
Consonant conjuncts are automatically formed, e.g. <kbd>k</kbd> <kbd>t</kbd> produces 
<samp>ক্ত্‌</samp>. The inherent <strong>a</strong> is only applied when followed by 
<kbd>space</kbd>. e.g. <kbd>k</kbd> <kbd>t</kbd> <kbd>a</kbd> or <kbd>k</kbd> <kbd>t</kbd> 
<kbd>space</kbd> produces <samp>ক্ত</samp>. To force an explicit virama at end of word, use 
<kbd>^</kbd> e.g. <kbd>k</kbd> <kbd>t</kbd> <kbd>^</kbd> <kbd>space</kbd> produces 
<samp>ক্ত্‌</samp> .</kbd>
</p>
<p>A full (live) consonant with visible virama in middle of words can be typed using 
<kbd>^</kbd>, e.g. <kbd>k</kbd> <kbd>^</kbd> <kbd>S</kbd> produces 
<samp>ক্‌ষ্</samp>, when followed by <kbd>space</kbd> it will be <samp>ক্‌ষ</samp>.</p>

<h3>Zero Width Non Joiner (ZWNJ)</h3>
<p>To type a Zero Width Non Joiner, <kbd>_</kbd> can be typed between the letters, for example: 
<kbd>a</kbd> <kbd>_</kbd> <kbd>i</kbd> will generate <samp>অ‌ই</samp>.</p>

<h3>Punctuation</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Keys Input</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr><td><kbd>,</kbd></td><td><samp>,</samp></td><td>Comma</td></tr>
<tr> <td><kbd>,</kbd><kbd>,</kbd></td> <td><samp>૰</samp></td> <td>Bengali Abbreviation Sign</td></tr>
<tr><td><kbd>.</kbd></td><td><samp>.</samp></td><td>Period</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd></td> <td><samp>।</samp></td> <td>DanDaa</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td> <td>॥</samp></td> <td>Double DanDaa</td></tr>
<tr><td><kbd>-</kbd></td><td><samp>-</samp></td><td>Dash</td></tr>
<tr><td><kbd>-</kbd><kbd>-</kbd></td><td><samp>–</samp></td><td>En Dash</td></tr>
<tr><td><kbd>-</kbd><kbd>-</kbd><kbd>-</kbd></td><td><samp>—</samp></td><td>Em Dash</td></tr>
</tbody>
</table>

<h3>Numbers</h3>
<ol>
<li>Press the number keys to type Bengali digits. for example <kbd>9</kbd> produces 
<samp>৯</samp>.</li>
<li>For typing the Arabic digits, press the number keys and then the backspace key, for example 
<kbd>9</kbd> <kbd>Back space</kbd> produces <samp>9</samp>.</li>
</ol>

<h3>Special Bengali Signs</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Key</th><th>Output Character</th><th>Comment</th></tr>
</thead>
<tbody>
<tr> <td><kbd>v</kbd></td> <td><samp>ৎ</samp></td> <td> Bengali Letter Khanda Ta</td></tr>
<tr> <td><kbd>O</kbd></td> <td><samp>ৗ</samp></td> <td> Bengali AU Length Mark</td></tr>
<tr> <td><kbd>V</kbd></td> <td><samp>ঽ</samp></td> <td> Bengali Avagraha</td></tr>
<tr> <td><kbd>Q</kbd></td> <td><samp>৺</samp></td> <td> Bengali Isshar</td></tr>
<tr> <td><kbd>W</kbd></td> <td><samp>ঀ</samp></td> <td> Bengali Anji</td></tr>
<tr> <td><kbd>E</kbd></td> <td><samp>◌৾</samp></td> <td> Bengali Sandhi Mark - not supported in Fonts</td></tr>
<tr> <td><kbd>Z</kbd></td> <td><samp>৲</samp></td> <td> Bengali Rupee Mark (historic usage)</td></tr>
<tr> <td><kbd>X</kbd></td> <td><samp>৻</samp></td> <td> Bengali Ganda Mark (historic usage)</td></tr>
<tr> <td><kbd>F</kbd></td> <td><samp>৳</samp></td> <td> Bangladeshi taka</td></tr>
</tbody>
</table>

<h3>Special Symbols</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Key</th><th>Output Character</th><th>Comment</th></tr>
</thead>
<tbody>
<tr> <td><kbd>#</kbd></td> <td><samp>ওঁ</samp></td> <td>OM SIGN</td></tr>
<tr> <td><kbd>$</kbd></td> <td><samp>₹</samp></td> <td>RUPEE SIGN</td></tr>
<tr> <td><kbd>%</kbd></td> <td><samp>࿕</samp></td> <td>U+0FD5  RIGHT-FACING SVASTI SIGN</td></tr>
<tr> <td><kbd>*</kbd></td> <td><samp>❀</samp></td> <td>U+2740 WHITE FLORETTE UNICODE CHARACTER</td></tr>
<tr> <td><kbd>&</kbd></td> <td><samp>☸</samp></td> <td>U+2638 WHEEL OF DHARMA UNICODE CHARACTER </td></tr>
</tbody>
</table>

<h3>Commonly used Vedic Accents</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr><th>Key</th><th>Output Character</th><th>Comment</th></tr>
</thead>
<tbody>
<tr> <td><kbd>'</kbd><kbd>'</kbd></td> <td><samp>॑</samp></td> <td>DEVANAGARI STRESS SIGN UDATTA - SVARITA</td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳚</samp></td> <td>VEDIC TONE DOUBLE SVARITA </td></tr>
<tr> <td><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd><kbd>'</kbd></td> <td><samp>᳛</samp></td> <td>VEDIC TONE TRIPLE SVARITA</td></tr>
<tr> <td><kbd>`</kbd><kbd>`</kbd></td> <td><samp>॒</samp></td> <td>DEVANAGARI STRESS SIGN ANUDATTA</td></tr>
<tr> <td><kbd>M</kbd><kbd>M</kbd><kbd>^</kbd></td> <td><samp>ꣳ</samp></td> <td> CANDRABINDU VIRAMA</td></tr>
<tr> <td><kbd>=</kbd><kbd>=</kbd></td> <td><samp>ᳶ</samp></td> <td> VEDIC SIGN UPADHMANIYA</td></tr>
</tbody>
</table>

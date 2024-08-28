<?php
  $pagename = 'Hindi Devanagari Phonetic (ITRANS) ';
  $pagetitle = 'Hindi Devanagari Phonetic (ITRANS) ';
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


<p>This is a phonetic Devanagari (ITRANS) keyboard layout for Hindi. 
    It is based on <strong><a href="https://www.aczoom.com/itrans/">ITRANS</a></strong> 
    transliteration scheme with some modifications. You can phonetically type Hindi 
    using the modified ITRANS transliteration scheme on a regular QWERTY keyboard
    and get Devanagari Hindi output. 
</p>
<p>For example, the keys <kbd>s</kbd> <kbd>a</kbd> <kbd>M</kbd> <kbd>s</kbd> <kbd>k</kbd> 
    <kbd>R</kbd> <kbd>t</kbd> <kbd>a</kbd> will output the word <strong>संस्कृत</strong>, 
    <kbd>l</kbd> <kbd>a</kbd> <kbd>x</kbd> <kbd>m</kbd> <kbd>I</kbd> 
    will output the word <strong>लक्ष्मी</strong>.</p>


<h2>Desktop Keyboard Layout</h2>
<p>The default and shifted layouts cover Devanagari digits, consonants, vowels and other commonly used characters.</p>

<div id='osk' data-states='default shift rightalt rightalt-shift'>
</div>

<p>Consonant conjuncts and consonants with the combining marks are generated by a combination of keys 
    as described in the tables below.</p>
<h3>Consonants</h3>
<p>The following table shows the English letters to type to get Devanagari consonants.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>क</td><td>ka</td><td></td>
<td>ख</td><td>Ka/kha</td><td></td>
<td>ग</td><td>ga</td><td></td>
<td>घ</td><td>Ga/gha</td><td></td>
<td>ङ</td><td>~Na/Nga</td>
</tr>
<tr>
<td>च</td><td>ca/cha</td><td></td>
<td>छ</td><td>Ca/Cha</td><td></td>
<td>ज</td><td>ja</td><td></td>
<td>झ</td><td>Ja/jha</td><td></td>
<td>ञ</td><td>~na/Ya</td>
</tr>
<tr>
<td>ट</td><td>Ta</td><td></td>
<td>ठ</td><td>Tha</td><td></td>
<td>ड</td><td>Da</td><td></td>
<td>ढ</td><td>Dha</td><td></td>
<td>ण</td><td>Na</td>
</tr>
<tr>
<td>त</td><td>ta</td><td></td>
<td>थ</td><td>tha</td><td></td>
<td>द</td><td>da</td><td></td>
<td>ध</td><td>dha</td><td></td>
<td>न</td><td>na</td>
</tr>
<tr>
<td>प</td><td>pa</td><td></td>
<td>फ</td><td>pha</td><td></td>
<td>ब</td><td>ba</td><td></td>
<td>भ</td><td>bha</td><td></td>
<td>म</td><td>ma</td>
</tr>
<tr>
</tr>
<tr>
<td>य</td><td>ya</td><td></td>
<td>र</td><td>ra</td><td></td>
<td>ल</td><td>la</td><td></td>
<td>ळ</td><td>La</td><td></td>
<td>व</td><td>va/wa</td>
</tr>
<tr>
<td>श</td><td>sha</td><td></td>
<td>ष</td><td>Sa/Sha</td><td></td>
<td>स</td><td>sa</td><td></td>
<td>ह</td><td>ha</td><td></td>
<td>क्</td><td>k</td>
</tr>
<tr>
<td></td><td></td><td></td>
<td>क्ष</td><td>xa/kSa</td><td></td>
<td>त्र</td><td>tra</td><td></td>
<td>ज्ञ</td><td>GYa/j~na</td><td></td>
<td>र्‍</td><td>R (eyelash Ra - Marathi)</td>
</tr>
</tbody>
</table>


<h3>Consonants with nuktas</h3>
<p>The following table shows the English letters to type to get Devanagari consonants  with nuktas.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>क़</td><td>.ka</td><td></td>
<td>ख़</td><td>.kha</td><td></td>
<td>ग़</td><td>.ga</td><td></td>
<td>ज़</td><td>.ja</td><td></td>
<td>झ़</td><td>.jha</td><td></td>
<td>ड़</td><td>.Da</td><td></td>
<td>ढ़</td><td>.Dha</td><td></td>
<td>फ़</td><td>.fa</td><td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>ऩ</td><td>.na</td><td></td>
<td>ऱ</td><td>.ra</td><td></td>
<td>ऴ</td><td>.La</td><td></td>
<td>य़</td><td>.ya</td><td></td>
<td></td><td></td><td></td>
<td>च़</td><td>.ca</td><td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<h3>Vowels and Vowel Signs</h3>
<p>In the following table, independent vowels, dependent vowel signs and vowel signs combined
    with the consonant 'k' are shown in the top
    two rows. The third row shows Devanagari Vowels in their independent form. 
    The fourth row shows the     vowel sign combined with the consonant 'k' in Devanagari. 
    'ka' is without any added vowel sign, where the vowel 'a' is inherent.</p>
<p>The last row shows their corresponding dependent form (maatraa or vowel sign).
    If there is a need to type ONLY the vowel signs, it can be done 
    using `@` instead of a consonant. e.g. @A will output ा, @ai will output ै.</p>
<table class="inputSequences" style="margin-left: auto; margin-right: auto; text-align: center;">
<tbody>
<thead>
<tr>
<th  style="width:8%;"></th>
<th  style="width:8%;">a</th>
<th  style="width:8%;">aa/A</th>
<th  style="width:8%;">i</th>
<th  style="width:8%;">ii/I/ee</th>
<th  style="width:8%;">u</th>
<th  style="width:8%;">uu/U/oo</th>
<th  style="width:8%;">RR</th>
<th  style="width:8%;">e</th>
<th  style="width:8%;">ai/ei</th>
<th  style="width:8%;">o</th>
<th  style="width:8%;">au/ou</th>
</tr>
<tr>
<th>k</th>
<th>ka</th>
<th>kaa/kA</th>
<th>ki</th>
<th>kii/kI</th>
<th>ku</th>
<th>kuu/kU/koo</th>
<th>kRR</th>
<th>ke</th>
<th>kai/kei</th>
<th>ko</th>
<th>kau/kou</th>
</tr>
</thead>
<tr>
<td></td>
<td>अ</td>
<td>आ</td>
<td>इ</td>
<td>ई</td>
<td>उ</td>
<td>ऊ</td>
<td>ऋ</td>
<td>ए</td>
<td>ऐ</td>
<td>ओ</td>
<td>औ</td>
</tr>
<tr>
<td><strong>k</strong></td>
<td>क</td>
<td>का</td>
<td>कि</td>
<td>की</td>
<td>कु</td>
<td>कू</td>
<td>कृ</td>
<td>के</td>
<td>कै</td>
<td>को</td>
<td>कौ</td>
</tr>
<tr>
<td><strong>@</strong></td>
<td></td>
<td>ा</td>
<td>ि</td>
<td>ी</td>
<td>ु</td>
<td>ू</td>
<td>ृ</td>
<td>े</td>
<td>ै</td>
<td>ो</td>
<td>ौ</td>
</tr>
</tbody>
</table>


<p>The following table shows additional vowel signs used in Devanagari script. 
<table class="inputSequences" style="margin-left: auto; margin-right: auto; text-align: center;">
<tbody>
<thead>
<tr>
<th>\</th>
<th>E/ae</th>
<th>O/aw</th>
<th>W</th>
<th>[</th>
<th>]</th>
<th>{</th>
<th>}</th>
<th>q</th>
<th>Q</th>
<th>z</th>
<th>Z</th>
</tr>
<tr>
<th>k\</th>
<th>kE/kae</th>
<th>kO/kaw</th>
<th>kW</th>
<th>k[</th>
<th>k]</th>
<th>k{</th>
<th>k}</th>
<th>kq</th>
<th>kQ</th>
<th>kz</th>
<th>kZ</th>
</tr>
</thead>
<tr>
<td>ॲ</td>
<td>ऍ</td>
<td>ऑ</td>
<td>ऄ</td>
<td>ऎ</td>
<td>ऒ</td>
<td>ꣾ</td>
<td>ॵ</td>
<td>ॳ</td>
<td>ॴ</td>
<td>ॶ</td>
<td>ॷ</td>
</tr>
<tr>
<td>ॅ</td>
<td>ॅ</td>
<td>ॉ</td>
<td>ॆ</td>
<td>ॆ</td>
<td>ॊ</td>
<td>ꣾ</td>
<td>ॏ</td>
<td>ऺ</td>
<td>ऻ</td>
<td>ॖ</td>
<td>ॗ</td>
</tr>
<tr>
<td>कॅ</td>
<td>कॅ</td>
<td>कॉ</td>
<td>कॆ</td>
<td>कॊ</td>
<td>कॊ</td>
<td>कꣾ</td>
<td>कॏ</td>
<td>कऺ</td>
<td>कऻ</td>
<td>कॖ</td>
<td>कॗ</td>
</tr>
</tbody>
</table>

<p>The following table shows additional vowels for Sanskrit. 
    <table class="inputSequences" style="margin-left: auto; margin-right: auto; text-align: center;">
    <tbody>
    <thead>
    <tr>
    <th>RR^</th>
    <th>LL^</th>
    <th>@L</th>
    <th>@L^</th>
    </tr>
    </thead>
    <tr>
    <td>ॠ</td>
    <td>ॡ</td>
    <td>ॢ</td>
    <td>ॣ</td>
    </tr>
    </tbody>
    </table>
    
<h3>Consonantal Diacritics</h3>
<p>The consonantal diacritics or vowel modifiers are the final nasal anusvāra <samp>ं</samp> <kbd>M</kbd>, 
    the final fricative visarga <samp>ः</samp> <kbd>H</kbd> (called अं aṃ and अः aḥ) and 
    candrabindu/anunāsika ँ <kbd>M</kbd><kbd>M</kbd> (अँ). These consonantal diacritics follow the vowel signs 
    including the implicit `a`. The following table shows consonant `k` followed by various dependent vowel signs 
    and consonantal diacritics <samp>ं</samp>, <samp>ः</samp> and <samp>ँ</samp>. </p>
    
<table class="inputSequences" style="margin-left: auto; margin-right: auto; text-align: center;">
<tbody>
<thead>
<tr>
<th  style="width:8%;"></th>
<th  style="width:8%;">ka</th>
<th  style="width:8%;">kaa/kA</th>
<th  style="width:8%;">ki</th>
<th  style="width:8%;">kii/kI/kee</th>
<th  style="width:8%;">ku</th>
<th  style="width:8%;">kuu/kU/koo</th>
<th  style="width:8%;">kR/kRR</th>
<th  style="width:8%;">ke</th>
<th  style="width:8%;">kai/kei</th>
<th  style="width:8%;">ko</th>
<th  style="width:8%;">kau/kou</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>M/.n/.m</strong></td>
<td>कं</td>
<td>कां</td>
<td>किं</td>
<td>कीं</td>
<td>कुं</td>
<td>कूं</td>
<td>कृं</td>
<td>कें</td>
<td>कैं</td>
<td>कों</td>
<td>कौं</td>
</tr>
<tr>
<td><strong>H</strong></td>
<td>कः</td>
<td>काः</td>
<td>किः</td>
<td>कीः</td>
<td>कुः</td>
<td>कूः</td>
<td>कृः</td>
<td>केः</td>
<td>कैः</td>
<td>कोः</td>
<td>कौः</td>
</tr>
<tr>
<td><strong>MM</strong></td>
<td>कँ</td>
<td>काँ</td>
<td>किँ</td>
<td>कीँ</td>
<td>कुँ</td>
<td>कूँ</td>
<td>कृँ</td>
<td>केँ</td>
<td>कैँ</td>
<td>कोँ</td>
<td>कौँ</td>
</tr>
</tbody>
</table>

<h3>Conjuncts</h3>
<p>Consonant conjuncts are automatically formed,  e.g. <kbd>k</kbd> <kbd>t</kbd> 
    produces <samp>क्त्‌</samp>. The inherent <strong>a</strong> is only applied when followed 
    by <kbd>space</kbd>. e.g. <kbd>k</kbd> <kbd>t</kbd> <kbd>a</kbd> or 
    <kbd>k</kbd> <kbd>t</kbd> <kbd>space</kbd> produces <samp>क्त</samp>. 
    To force an explicit virama at end of word, use <kbd>^</kbd> 
    e.g. <kbd>k</kbd> <kbd>t</kbd> <kbd>^</kbd> <kbd>space</kbd> produces <samp>क्त्‌ </samp>.</p>
<p>A full (live) consonant with visible virama in middle of words can be typed using <kbd>^</kbd>, 
    e.g. <kbd>k</kbd> <kbd>^</kbd> <kbd>S</kbd> produces <samp>क्‌ष</samp>.</p>

<p>To type a Zero Width Non Joiner, <kbd>_</kbd> can be typed between the letters, 
for example: <kbd>a</kbd> <kbd>_</kbd> <kbd>i</kbd> will generate <samp>अ‌इ
</samp>, <kbd>k</kbd> <kbd>_</kbd> <kbd>S</kbd> will generate <samp>क्‌ष
</samp>.</p>

<h3>Zero Width Joiner (ZWJ)</h3>

<p>To type a Zero Width Joiner, <kbd>+</kbd> can be typed between the letters, 
for example: <kbd>k</kbd> <kbd>+</kbd> <kbd>S</kbd> will generate <samp>क्‍ष
</samp>, while <kbd>k</kbd><kbd>S</kbd> generates <samp>क्ष</samp>.</p>

<h3>Punctuation</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>,</kbd><kbd>,</kbd></td> <td><samp>॰</samp></td> <td>Devanagari Abbreviation Sign</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd></td> <td><samp>।</samp></td> <td>DanDaa</td></tr>
<tr> <td><kbd>.</kbd><kbd>.</kbd><kbd>.</kbd></td> <td>॥</samp></td> <td>Double DanDaa</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd></td> <td><samp>–</samp></td> <td>En Dash</td></tr>
<tr> <td><kbd>-</kbd><kbd>-</kbd><kbd>-</kbd></td> <td><samp>—</samp></td> <td>Em Dash</td></tr>
</tbody>
</table>
<h3>Numbers</h3>
<ol>
<li>Press the number keys to type Devanagari digits. for example <kbd>9</kbd> produces <samp>९</samp>.</li>
<li>For typing the Arabic digits, press the number keys and then the backspace key, for example <kbd>9</kbd> <kbd>Back space</kbd> produces <samp>9</samp>.</li>
</ol>
<h3>Special Symbols</h3>
<table class="inputSequences" style="margin-left: auto; margin-right: auto;">
<thead>
<tr>
<th>Key</th>
<th>Output Character</th>
<th>Comment</th>
</tr>
</thead>
<tbody>
<tr> <td><kbd>#</kbd></td> <td><samp>ॐ</samp></td> <td>DEVANAGARI OM SIGN</td></tr>
<tr> <td><kbd>$</kbd></td> <td><samp>₹</samp></td> <td>RUPEE SIGN</td></tr>
<tr> <td><kbd>%</kbd></td> <td><samp>࿕</samp></td> <td>U+0FD5  RIGHT-FACING SVASTI SIGN</td></tr>
<tr> <td><kbd>*</kbd></td> <td><samp>❀</samp></td> <td>U+2740 WHITE FLORETTE UNICODE CHARACTER</td></tr>
<tr> <td><kbd>&</kbd></td> <td><samp>☸</samp></td> <td>U+2638 WHEEL OF DHARMA UNICODE CHARACTER </td></tr>
<tr> <td><kbd>V</kbd></td> <td><samp>ऽ</samp></td> <td> AVAGRAHA</td></tr>
</tbody>
</table>

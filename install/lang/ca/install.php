<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle 2.0 installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['admindirname'] = 'Directori d\'administració';
$string['availablelangs'] = 'Llista d\'idiomes disponibles';
$string['chooselanguagehead'] = 'Trieu un idioma';
$string['chooselanguagesub'] = 'Trieu un idioma NOMÉS per a la instal·lació. En una pantalla posterior podreu triar idiomes per al lloc i per als usuaris.';
$string['databasehost'] = 'Servidor de base de dades:';
$string['databasename'] = 'Nom de la base de dades:';
$string['dataroot'] = 'Directori de dades';
$string['dbprefix'] = 'Prefix de taules';
$string['dirroot'] = 'Directori de Moodle';
$string['environmenthead'] = 'S\'està comprovant el vostre entorn';
$string['errorsinenvironment'] = 'Hi ha errors en l\'entorn.';
$string['installation'] = 'Instal·lació';
$string['langdownloaderror'] = 'Dissortadament l\'idioma "{$a}" no està instal·lat. La instal·lació prosseguirà en anglès.';
$string['memorylimithelp'] = '<p>El límit de memòria del PHP del vostre servidor actualment està definit en {$a}.</p>

<p>Això pot causar que Moodle tingui problemes de memòria més endavant, especialment si teniu molts mòduls habilitats i/o molts usuaris.</p>

<p>És recomanable que configureu el PHP amb un límit superior, com ara 40 MB, sempre que sigui possible. Hi ha diverses maneres de fer això:</p>
<ol>
<li>Si podeu, recompileu el PHP amb <i>--enable-memory-limit</i>. Això permetrà que Moodle defineixi el límit de memòria per si mateix.</li>
<li>Si teniu accés al fitxer php.ini, podeu canviar el paràmetre <b>memory_limit</b> a 40 MB. Si no hi teniu accés podeu demanar al vostre administrador que ho faci ell.</li>
<li>En alguns servidors PHP podeu crear un fitxer .htaccess dins del directori de Moodle amb aquesta línia:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Tanmateix, en alguns servidors això farà que no funcioni <b>cap</b> pàgina PHP (es visualitzaran errors) en el qual cas hauríeu de suprimir el fitxer .htaccess.</p></li>
</ol>';
$string['phpversion'] = 'Versió PHP';
$string['phpversionhelp'] = '<p>Moodle necessita la versió de PHP 4.1.0 o posterior.</p>
<p>A hores d\'ara esteu utilitzant la versió {$a}.</p>
<p>Us caldrà actualitzar el PHP o traslladar Moodle a un ordinador amb una versió de PHP més recent.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Esteu veient aquesta pàgina perquè heu instal·lat amb èxit i heu executat el paquet <strong>{$a->packname} {$a->packversion}</strong>. Felicitacions!';
$string['welcomep30'] = 'Aquesta versió de <strong>{$a->installername}</strong> inclou les aplicacions necessàries per crear un entorn en el qual funcioni <strong>Moodle</strong>:';
$string['welcomep40'] = 'El paquet inclou també <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'L\'ús de totes les aplicacions d\'aquest paquet és governat per les seves llicències respectives. El paquet <strong>{$a->installername}</strong> complet és 
<a href="http://www.opensource.org/docs/definition_plain.html">codi font obert</a> i es distribueix 
sota llicència <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Les pàgines següents us guiaran per una sèrie de passos fàcils de seguir per configurar <strong>Moodle</strong> en el vostre ordinador. Podeu acceptar els paràmetres per defecte o, opcionalment, modificar-los perquè s\'ajustin a les vostres necessitats.';
$string['welcomep70'] = 'Feu clic en el botó "Següent" per continuar la configuració de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adreça web';
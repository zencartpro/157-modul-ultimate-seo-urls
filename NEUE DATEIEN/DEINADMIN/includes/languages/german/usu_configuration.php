<?php
/**
 * Part of Ultimate URLs for Zen Cart.
 *
 * Note: For versions prior to v3.0.0, these language values were present in /admin/includes/languages/english/modules/plugin/usu.php.
 *
 * @copyright Copyright 2019        Cindy Merkin (vinosdefrutastropicales.com)
 * @copyright Copyright 2013 - 2015 Andrew Ballanger
 * @license http://www.gnu.org/licenses/gpl.txt GNU GPL V3.0
 */
// -----
// These _TITLE/_DESCRIPTION values are recorded in the database for an initial installation of the USU plugin.
//
define('USU_ENABLED_TITLE', 'Ultimate SEO aktivieren?');
define('USU_ENABLED_DESCRIPTION', 'Dies ist der Hauptschalter, um das Modul aus- und einzuschalten (true = ein, false = aus)');

define('USU_DEBUG_TITLE', 'Debugging Logfile aktivieren?');
define('USU_DEBUG_DESCRIPTION', 'Wollen Sie Logfiles schreiben lassen, um Debugging Informationen zu erhalten? <br/>Wenn diese Option aktiviert wird, dann werden zahlreiche Logfiles geschrieben, was die Performance beeinträchtigen kann. Nur zur Fehlersuche aktivieren!<br/>Die Logfile werden im logs Verzeichnis folgendermassen geschrieben: (<code>/logs/usu-{adm-}yyyymmmdd-hhmmss.log</code>.');

define('USU_CPATH_TITLE', 'cPath anhängen');
define('USU_CPATH_DESCRIPTION', 'Zen Cart hängt an Artikel den cPath an (Kategorie ID), damit sichergestellt ist, dass verlinkte Artikel in der korrekten Kategorie erscheinen. Im Modus auto wird der cPath entfernt, falls er nicht nötig ist, wird aso nur angehängt bei verlinkten Artikeln. Um das Anhängen des cPath komplett zu deaktivieren auf disable stellen.<br/><br/>Voreinstellung (empfohlen): auto');

define('USU_END_TITLE', 'Endung der SEO URLs');
define('USU_END_DESCRIPTION', 'URLs können auf .html enden oder auf .htm. Wenn Sie gar keine Endung wollen, Feld leer lassen');

define('USU_FORMAT_TITLE', 'Format der SEO URLs');
define('USU_FORMAT_DESCRIPTION', 'Sie können aus folgenden voreingestellten Formaten wählen.<br /><br/><b>original:</b><br /><i>Kategorien:</i> kategoriename-c-34<br /><i>Artikel:</i> artikelname-p-54<br /><br /><b>parent:</b><br /><i>Kategorien:</i> oberkategorie-kategorie-name-c-34<br /><i>Artikel:</i> oberkategorie-artikelname-p-54');

define('USU_CATEGORY_DIR_TITLE', 'Kategorien als Verzeichnisse');
define('USU_CATEGORY_DIR_DESCRIPTION', 'Sie können aus folgenden voreingestellten Formaten wählen:<br /><br/><b>off:</b><br/>Kategorien werden nicht als Verzeichnisse dargestellt<br /><br /><b>short:</b><br/>Verwendet die Einstellung unter Format der SEO URLs<br/><br/><b>full:</b><br/>Verwendet den kompletten Kategoriepfad<br /><br />');

define('USU_REMOVE_CHARS_TITLE', 'Problematische Zeichen aus URL entfernen');
define('USU_REMOVE_CHARS_DESCRIPTION', 'Hiermit können bestimmte problematische Zeichen aus den URLs entfernt werden.<br/><br/>non-alphanumerical: entfernt alle nicht alphanumerischen Zeichen<br/><br/>punctuation: entfernt Punkte');

define('USU_FILTER_PCRE_TITLE', 'Umlaute umschreiben');
define('USU_FILTER_PCRE_DESCRIPTION', 'Wollen Sie Umlaute in den URLs umschreiben, z.B. ae statt ä?. <br/>Diese Umschreibungen greifen bevor irgendetwas anderes umgeschrieben oder gefiltert wird. Wenn Sie die Umschreibungen vornehmen lassen. dann <b>MUSS</b> das Format Ihrer Liste so sein:<br/><b>find1=>replace1,find2=>replace2</b><br/><br/>Beispiel:<br/>ä=>ae,ö=>oe,ü=>ue,ß=>ss,é=>e,Ö=>Oe,Ä=>ae,Ü=>Ue,è=>e<br/><br/>');

define('USU_FILTER_SHORT_WORDS_TITLE', 'Kurze Worte ausfiltern');
define('USU_FILTER_SHORT_WORDS_DESCRIPTION', 'Mit dieser Einstellung werden Worte kürzer als der hier eingestellte Wert aus den URLs entfernt. Wenn Sie hier <b>0</b> einstellen, wird nichts gefiltert und <em>alle</em> Worte werden enthalten sein.');

define('USU_FILTER_PAGES_TITLE', 'Seiten, die umgeschrieben werden sollen');
define('USU_FILTER_PAGES_DESCRIPTION', 'Geben Sie hier die Seiten an, die umgeschrieben werden sollen. Es sind bereits alle nötigen voreingestellt. Wenn Sie z.B. eigene neue Define Pages anlegen, und auch die umschreiben wollen, dann müssen sie die hier ergänzen. Wird hier alles rausgelöscht, dann werden alle Seiten umgeschrieben.<br /><br />Das Format ist eine kommagetrennte Liste (Leerzeichen darin sind OK) und <b>muss</b> diese Form haben: <b>page1,page2,page3</b> oder <b>page1, page2, page3</b>');

define('USU_ENGINE_TITLE', 'Umschreibungsart');
define('USU_ENGINE_DESCRIPTION', 'Derzeit wird nur rewrite unterstützt.');

define('USU_REDIRECT_TITLE', 'Automatische Redirects?');
define('USU_REDIRECT_DESCRIPTION', 'Veraltete/Umbenannte URLs werden per 301 Redirect automatisch auf die neuen URLs weitergeleitet');

define('USU_CACHE_GLOBAL_TITLE', 'SEO URL Cache aktivieren?');
define('USU_CACHE_GLOBAL_DESCRIPTION', 'Um Datenbankabfragen zu reduzieren, können die SEO URLs in der Tabelle usu_cache gespeichert werden und müssen dann nicht bei jedem Aufruf neu generiert werden. Wenn Sie dieses Feature nutzen wollen, stellen Sie hier auf true. Bitte beachten Sie, dass Sie bei Änderungen an der URL-Struktur dann immer den Cache zurücksetzen müssen!<br/><br/>Voreinstellung (empfohlen): true');
define('USU_CACHE_PRODUCTS_TITLE', 'Cache für Artikel aktivieren?');
define('USU_CACHE_PRODUCTS_DESCRIPTION', 'Caching für Artikel');
define('USU_CACHE_CATEGORIES_TITLE', 'Cache für Kategorien aktivieren?');
define('USU_CACHE_CATEGORIES_DESCRIPTION', 'Caching für Kategorien');
define('USU_CACHE_MANUFACTURERS_TITLE', 'Cache für Hersteller aktivieren?');
define('USU_CACHE_MANUFACTURERS_DESCRIPTION', 'Caching für Hersteller');
define('USU_CACHE_EZ_PAGES_TITLE', 'Cache für EZ Pages aktivieren?');
define('USU_CACHE_EZ_PAGES_DESCRIPTION', 'Caching für Hersteller');
define('USU_CACHE_RESET_TITLE', 'Cache zurücksetzen');
define('USU_CACHE_RESET_DESCRIPTION', 'Hiermit leeren Sie die Tabelle usu_cache<br/>Falls Sie Artikeln neue Namen gegeben haben oder Grundeinstellungen von Ultimate SEO geändert haben, dann ist das nötig, sonst weden weiterhin alte gecachte URLs angezeigt.<br/><br/>Stellen Sie auf true und clicken auf Aktualisieren. Dadurch wird die Tabelle usu_cache geleert und die Einstellung springt wieder auf false.');

define('USU_VERSION_TITLE', 'Ultimate SEO Version');
define('USU_VERSION_DESCRIPTION', 'Version des derzeit installierten Moduls');

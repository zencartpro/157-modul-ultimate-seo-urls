<?php
/**
 * Part of Ultimate URLs for Zen Cart.
 *
 * @copyright Copyright 2019-2022  Cindy Merkin (vinosdefrutastropicales.com)
 * @copyright Copyright 2013 - 2015 Andrew Ballanger
 * @license http://www.gnu.org/licenses/gpl.txt GNU GPL V3.0
 */
define('BOX_CONFIGURATION_USU', 'Ultimate SEO URLs');
define('BOX_CONFIGURATION_USU_UNINSTALL', 'Ultimate SEO URLs deinstallieren');
// Messages used on the configuration page
define('USU_PLUGIN_WARNING_GLOBAL_DISABLED', 'Der globale USU-Cache wurde deaktiviert. Dies wird nicht empfohlen und setzt das Caching von <em>allen</em> URL-Typen durch USU außer Kraft.');

define('USU_PLUGIN_WARNING_SHORT_WORDS', 'Der Wert, der für die Einstellung <em>kurze Worte ausfiltern</em> (<b>%s</b>) eingegeben wurde, ist keine positive ganze Zahl; die Einstellung wurde auf <b>0</b> zurückgesetzt.');
define('USU_PLUGIN_WARNING_CATEGORY_DIR', 'Die Einstellung für <em>Kategorien als Verzeichnisse anzeigen</em> wurde auf <code>short</code> geändert, da die Einstellung <code>full</code> nicht mit der Einstellung <em>Format der alternativen URLs</em> von <code>parent</code> kompatibel ist.');
define('USU_PLUGIN_WARNING_FORMAT', 'Die Einstellung für <em>Format der alternativen URLs</em> wurde auf <code>original</code> geändert, da die Einstellung <code>parent</code> nicht mit der Einstellung <em>Kategorien als Verzeichnisse anzeigen</em> von <code>full</code> kompatibel ist.');

define('USU_PLUGIN_CACHE_RESET', 'Der USU Cache (%s) wurde geleert.');

// General warning messages
define('USU_PLUGIN_WARNING_TABLE', 'WARNUNG: Die Datenbanktabelle \'%s\' existiert nicht!<ul><li>Das SQL Caching für \'Ultimate SEO URLs\' wurde deaktiviert um Fehler zu vermeiden.</li><li>Das kann zu Performanceeinbußen beim Laden der Seiten führen.</li><li><b>Empfehlung:</b> Führen Sie den Installer erneut aus, der mit dem \'Ultimate SEO URLs\' Modul mitgeliefert wurde.</li></ul>');
define('USU_INSTALLED_SUCCESS', BOX_CONFIGURATION_USU . ' v%s, wurde erfolgreich installiert.');
define('USU_UPDATED_SUCCESS', BOX_CONFIGURATION_USU . ' wurde erfolgreich aktualisiert von v%1$s auf v%2$s.');
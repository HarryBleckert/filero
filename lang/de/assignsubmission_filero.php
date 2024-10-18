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
 * Strings for component 'assignsubmission_filero', language 'en'
 *
 * @package assignsubmission_filero
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @copyright 2023 DHBW {@link https://DHBW.de/}
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GNU GPL v3 or later
 * @author    Harry@Bleckert.com für LIB-IT DMS GmbH {@link https://www.LIB-IT.de/}
 */

$string['location'] = 'FILERO SOAP URL';
$string['location_help'] = 'Hier muss die vollständige FILERO SOAP URL angegeben werden';
$string['username'] = 'FILERO Anmeldename';
$string['username_help'] = 'Der Anmeldename für das FILERO Konto';
$string['username'] = 'FILERO Anmeldename';
$string['password'] = 'FILERO Passwort';
$string['password_help'] = 'Passwort des FILERO Kontos';
$string['productkey'] = 'FILERO product key';
$string['productkey_help'] = 'Der sogenannte "product key" wird von FILERO vergeben';
$string['multiple_graders'] = 'Mehrere Gutachter_innen';

$string['multiple_graders_help'] = 'Wenn festgelegt, werden Abgaben für Aufgaben mit dem Tag „Prüfungsabgaben“ '
         . 'in alle Aufgaben desselben Benutzers kopiert, die als "Gutachteraufgaben" getaggt sind.';
$string['exam_submission'] = 'Prüfungsabgabe';
$string['exam_grading'] = 'Prüfungsbewertung';
$string['submission_title_tag'] = 'Bitte geben Sie ein Text-Tag für Prüfungsabgaben ein';
$string['submission_title_tag_help'] =
         'Aufgaben für Prüfungsabgaben können nicht bewertet werden. Alle Prüfungsabgaben werden in bestehende Bewerteraufgaben desselben Kurses oder Kursbereichs dupliziert';
$string['grading_title_tag'] = 'Bitte geben Sie einen Text-Tag für die Aufgaben zur Prüfungsbewertung ein';
$string['grading_title_tag_help'] =
         'In Aufgaben zur Prüfungsbewertung sind keine Abgaben möglich. '
         .'Es werden Duplikate der Prüfungsabgaben aus der Aufgabe zur Prüfungsabgabe angzeigt';
$string['grader_roles'] = 'Zulässige Rollen für Gutachter_innen/Bewerter_innen';
$string['grader_roles_help'] = 'Bitte wählen Sie eine oder mehrere Rollen für Gutachter_innen/Bewerter_innen';
$string['archive_feedback_after_grading'] = 'Feedbacks erst nach Bewertung archivieren';
$string['archive_feedback_after_grading_help'] = 'Wenn aktiviert, dann werden Feedbacks des Bewerters erst nach Bewertung der Abgabe archiviert.';
$string['submission_statement'] = 'Eigenständigkeitserklärung';
$string['use_archiving'] = 'Archivierung aktivieren';
$string['use_archiving_help'] = 'FILERO Archivierung aktivieren/deaktivieren';

$string['uploaded'] = 'Hochgeladen am';
$string['autocreated'] = 'Autom. angelegt am';
$string['annotated_submissions'] = 'Annotierte Abgabedatei(en). Letzte Änderung gespeichert am';
$string['filesubmission'] = 'Dateiabgabe';
$string['feedback'] = 'Feedback';

$string['countfiles'] = '{$a} Dateien';
$string['default'] = 'Standardmäßig aktiviert';
$string['default_help'] = 'Wenn festgelegt, wird diese Abgabemethode standardmäßig für alle neuen Aufgaben aktiviert.';
$string['enabled'] = 'Archivierung';
$string['enabled_help'] = 'Wenn aktiviert werden Daten und Dateien von Abgaben und Feedbacks rechtssicher archiviert.';
$string['eventfileroarchived'] = 'Eine Datei wurde mit FILERO archiviert.';
$string['filero'] = 'Archivierung';
$string['fileroenabled'] = 'FILERO Archivierung aktivieren';
$string['fileroenabled_help'] = 'Auswählen um rechtssichere Archivierung mit FILERO zu aktivieren';
$string['filerofilename'] = 'FILERO.html';
$string['memory_limit'] = 'PHP Memory Limit';
$string['memory_limit_help'] = 'PHP memory limit für die FILERO Archivierung. Bite beachten dass alle Dateien gemeinsam gestreamed werden. Speicherbedarf bis zu 2.5 x alle Dateien';
$string['numfilesforlog'] = 'Anzahl der Dateien: {$a}.';
$string['pluginname'] = 'FILERO Archivierung';
$string['privacy:metadata:filepurpose'] = 'Die für diese Aufgabe geladenen Dateien';


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
 * Additional strings for thelanguage pack of the plugin 'adaptivequiz' in German language added by Konstanze Mehmedovski, Hochschule für Technik Stuttgart, Germany
 * The second part line 94 ff. contains necessary corrections/modifications of the strings in the German/Deutsch 'de' language pack for the component 'adaptivequiz' in version '4.1'
 *
 * @copyright  2013 onwards Remote-Learner {@link http://www.remote-learner.ca/}
 * @copyright  2022 onwards Vitaly Potenko <potenkov@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Geschätzte Fähigkeit';
$string['abilityestimated_help'] = 'Die geschätzte Fähigkeit eines Testteilnehmers entspricht der Schwierigkeitstufe von Fragen, bei denen der Testteilnehmer eine 50%-ige Wahrscheinlichkeit hat, die Frage richtig zu beantworten. Die Leistungsstufe eines Testteilnehmers wird dabei durch Vergleich des geschätzten Fähigkeitswertes mit dem Gesamtbereich der Fragen-Schwierigkeitstufen ermittelt (siehe den Bereich nach dem \'/\' Symbol).';
$string['attemptfeedbackdefaulttext'] = 'Sie haben den Versuch abgeschlossen, danke für die Teilnahme am Test!';
$string['attemptquestionsprogress'] = 'Fragenfortschritt: {$a}';
$string['attemptquestionsprogress_help'] = 'Die hier angezeigte maximale Anzahl von Fragen ist nicht unbedingt die Anzahl der Fragen, die Sie während des Quizs beantworten müssen. Es ist die MAXIMALE MÖGLICHE Anzahl von Fragen, die Sie vorgelegt bekommen könnten. Das Quiz kann früher enden, wenn die Fähigkeitsmessung ausreichend definiert ist.';
$string['attemptsusernoprevious'] = 'Sie haben diesen Test noch nicht versucht.';
$string['attemptsuserprevious'] = 'Ihre vorherigen Versuche';
$string['attemptnofirstquestion'] = 'Es tut uns leid, aber die erste Frage konnte zu Testbeginn nicht definiert werden, das Quiz ist möglicherweise falsch konfiguriert.';
$string['completionattemptcompletedcminfo'] = 'Abschluss eines Versuchs';
$string['completionattemptcompletedform'] = 'Der Testnutzer muss mindestens einen abgeschlossenen Versuch in dieser Aktivität haben';
$string['eventattemptcompleted'] = 'Versuch abgeschlossen';
$string['modformshowattemptprogress'] = 'Quizfortschritt für Testnutzer anzeigen';
$string['modformshowattemptprogress_help'] = 'Wenn ausgewählt, wird ein Testnutzer während des Versuchs eine Fortschrittsanzeige sehen, die zeigt, wie viele Fragen beantwortet wurden im Vergleich zur maximal möglichen Anzahl.';
$string['showabilitymeasure'] = 'Zeige dem Testnutzer sein Fähigkeitsmaß an';
$string['showabilitymeasure_help'] = 'Es kann möglicherweise vorteilhaft sein, den Testnutzern nach einem adaptiven Testlauf ihre Fähigkeitsschätzungen offenzulegen. Wenn diese Einstellung aktiviert ist, kann ein Testnutzer sein geschätztes Fähigkeitsmaß im Versuchskurzüberblick und unmittelbar nach Beendigung des Versuchs sehen.';
$string['questionspoolerrornovalidstartingquestions'] = 'Die ausgewählten Fragenkategorien enthalten keine Fragen, die ordnungsgemäß mit dem ausgewählten Anfangslevel der Schwierigkeit markiert sind.';
$string['reportattemptanswerdistributiontab'] = 'Antwortverteilung';
$string['reportattemptanswerdistributiontabletitle'] = 'Tabellenansicht der Antwortverteilung';
$string['reportattemptgraphtab'] = 'Versuchsgrafik';
$string['reportattemptgraphtabletitle'] = 'Tabellenansicht der Versuchsgrafik';
$string['reportattemptquestionsdetailstab'] = 'Fragen-Details';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - Überprüfung des Versuchs von {$a->fullname}, eingereicht am {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'alle Benutzer, die jemals Versuche unternommen haben';
$string['reportattemptsdownloadfilename'] = '{$a}_Versuchsbericht';
$string['reportattemptsenrolledwithattempts'] = 'Teilnehmer, die Versuche unternommen haben';
$string['reportattemptsenrolledwithnoattempts'] = 'Teilnehmer ohne Versuche';
$string['reportattemptsfilterformsubmit'] = 'Filter';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Benutzer mit inaktiven Anmeldungen einbeziehen';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Ob Benutzer mit ausgesetzten Anmeldungen eingeschlossen werden sollen.';
$string['reportattemptsfilterusers'] = 'Zeigen';
$string['reportattemptsfilterformheader'] = 'Filtern';
$string['reportattemptsnotenrolled'] = 'Nicht angemeldete Benutzer, die Versuche unternommen haben';
$string['reportattemptspersistentfilter'] = 'Bestehender Filter';
$string['reportattemptspersistentfilter_help'] = 'Wenn aktiviert, werden die Filtereinstellungen unten gespeichert, wenn sie abgeschickt werden und dann jedes Mal angewendet, wenn Sie die Berichtsseite besuchen.';
$string['reportattemptsprefsformheader'] = 'Berichtseinstellungen';
$string['reportattemptsprefsformsubmit'] = 'Anwenden';
$string['reportattemptsresetfilter'] = 'Filter zurücksetzen';
$string['reportattemptsshowinitialbars'] = 'Initialien-Leiste anzeigen';
$string['reportattemptsusersperpage'] = 'Angezeigte Anzahl von Benutzern:';
$string['reportattemptsummarytab'] = 'Zusammenfassung des Versuchs';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - Einzelbenutzer-Versuchsbericht für {$a->username}';
$string['reportuserattemptstitleshort'] = '{$a}s Versuche';
$string['reportquestionanalysispageheading'] = '{$a} - Fragenbericht';

$string['answerdistgraph_right'] = 'Richtig';
$string['answerdistgraph_wrong'] = 'Falsch';

$string['modulename_help'] = 'Die Aktivität Adaptiver Test ermöglicht es Lehrenden, Tests zu erstellen, die die Fähigkeiten der Teilnehmer effizient messen. Adaptive Tests bestehen aus Fragen, die aus einer Fragenbank ausgewählt werden und mit einer Schwierigkeitsnote versehen sind. Die Fragen werden an die geschätzte Fähigkeitsstufe des aktuellen Testteilnehmers angepasst. Wenn der Testteilnehmer eine Frage erfolgreich beantwortet, wird nachfolgend eine schwierigere Frage gestellt. Wenn der Testteilnehmer eine Frage falsch beantwortet, wird eine weniger anspruchsvolle Frage gestellt. Dieser Prozess erzeugt einer Abfolge von Fragen, die auf die tatsächliche Fähigkeitsstufe des Testteilnehmers zusteuert. Der Test endet, wenn die Fähigkeit des Testteilnehmers mit der erforderlichen Genauigkeit bestimmt wurde.

Diese Aktivität eignet sich am besten zur Bestimmung einer Fähigkeitsmessung entlang einer eindimensionalen Skala. Obwohl die Skala sehr breit sein kann, müssen alle Fragen dennoch eine Messung der Fähigkeit oder Begabung auf der gleichen Skala ermöglichen. In einem Einstufungstest sollten beispielsweise alle Fragen, die Anfänger richtig beantworten können, auch von Experten korrekt beantwortet werden können, während Fragen, die höher auf der Skala liegen, nur von Experten oder durch Zufall beantwortet werden können. Fragen, die keinen Unterschied zwischen Testern unterschiedlicher Fähigkeiten abbilden, machen den Test unwirksam und können zu unklaren Ergebnissen führen.

Die im Adaptiven Quiz verwendeten Fragen müssen:

* automatisch als richtig/falsch bewertet werden

* mit ihrem Schwierigkeitsniveau durch ein Tag gekennzeichnet sein, das mit dem Präfix "adpq_" beginnt, gefolgt von einer positiven Zahl, die im Bereich des Quiz liegt.

Das Adaptive Quiz kann konfiguriert werden, um folgendes festzulegen:

* den Bereich der Fragenschwierigkeit/Nutzerfähigkeit, der gemessen werden soll (Beispiele für gültige Bereiche sind 1-10, 2-16 oder 1-100)
* die erforderliche Präzision, bevor der Test endet (oft ist ein Fehler von 5% in der Fähigkeitsmessung eine angemessene Stoppregel)
* die Mindestanzahl der zu beantwortenden Fragen
* die maximale Anzahl der zu beantwortenden Fragen.

Diese Beschreibung und der Testprozess in dieser Aktivität basieren auf <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';


$string['startinglevel'] = 'Anfängliches Schwierigkeitsniveau';
$string['startinglevel_help'] = 'Wenn der Schüler einen Versuch beginnt, wählt die Aktivität zufällig eine Frage aus, die diesem Schwierigkeitsniveau entspricht';
$string['standarderror'] = 'Standardfehler, der Testende bewirkt';
$string['standarderror_help'] = 'Wenn der Fehlerwert in der Messung der Nutzerfähigkeit unter diesen Wert fällt, wird der Testversuch beendet. Justieren Sie diesen Wert (Voreinstellung 5%) entsprechend, um eine höhere oder geringere Genauigkeit in der Fähigkeitsmessung zu erreichen';
$string['attemptfeedback'] = 'Rückmeldung zum Versuch';
$string['attemptfeedback_help'] = 'Die Rückmeldung zum Versuch wird dem Benutzer angezeigt, sobald der Versuch beendet ist';
$string['startattemptbtn'] = 'Versuch starten';
$string['leveloutofbounds'] = 'Die angeforderte Schwierigkeitsstufe {$a->level} liegt außerhalb des zulässigen Bereichs';
$string['nopermission'] = 'Sie haben keine Berechtigung, um diese Ressource anzuzeigen';
$string['standarderrorhdr'] = 'Standardfehler';
$string['attemptstopcriteria'] = 'Grund für das Beenden des Versuchs';
$string['reviewattemptreport'] = 'Überprüfung des Versuchs von {$a->fullname} eingereicht am {$a->finished}';
$string['confirmdeleteattempt'] = 'Bestätigung der Löschung des Versuchs von {$a->name} eingereicht am {$a->timecompleted}';
$string['confirmcloseattempt'] = 'Sind Sie sicher, dass Sie diesen Versuch von {$a->name} beenden und schließen möchten?';
$string['attemptquestion_abilitylogits'] = 'Gemessene Fähigkeit (logits)';
$string['questionanalysisbtn'] = 'Fragenauswertung';

$string['modulenameplural'] = 'Adaptive Tests';







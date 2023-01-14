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
 * Strings for the German language added by Konstanze Mehmedovski, Hochschule für Technik Stuttgart
 *
 * @copyright  2013 onwards Remote-Learner {@link http://www.remote-learner.ca/}
 * @copyright  2022 onwards Vitaly Potenko <potenkov@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Geschätzte Fähigkeit';
$string['abilityestimated_help'] = 'Die geschätzte Fähigkeit eines Testteilnehmers entspricht der Schwierigkeit der Frage, bei der der Testteilnehmer eine 50% ige Wahrscheinlichkeit hat, die Frage richtig zu beantworten. Um die Leistungsstufe zu identifizieren, wird der Fähigkeitswert mit dem Fragen-Stufenbereich abgeglichen (siehe den Bereich nach dem '/' Symbol).';
$string['attemptfeedbackdefaulttext'] = 'Sie haben den Versuch abgeschlossen, danke für die Teilnahme am Quiz!';
$string['attemptquestion_ability'] = 'Fähigkeitsmessung';
$string['attemptquestionsprogress'] = 'Fragenfortschritt: {$a}';
$string['attemptquestionsprogress_help'] = 'Die hier angezeigte maximale Anzahl von Fragen ist nicht unbedingt die Anzahl der Fragen, die Sie während des Quizs beantworten müssen. Es ist die MAXIMALE MÖGLICHE Anzahl von Fragen, die Sie beantworten könnten, das Quiz kann früher enden, wenn die Fähigkeitsmessung ausreichend definiert ist.';
$string['attempt_summary'] = 'Versuch Zusammenfassung';
$string['attemptsusernoprevious'] = 'Sie haben dieses Quiz noch nicht versucht.';
$string['attemptsuserprevious'] = 'Ihre vorherigen Versuche';
$string['attemptnofirstquestion'] = 'Es tut uns leid, aber die erste Frage konnte nicht definiert werden, um den Versuch zu starten, das Quiz ist möglicherweise falsch konfiguriert.';
$string['completionattemptcompletedcminfo'] = 'Abschluss eines Versuchs';
$string['completionattemptcompletedform'] = 'Der Schüler muss mindestens einen abgeschlossenen Versuch in dieser Aktivität haben';
$string['eventattemptcompleted'] = 'Versuch abgeschlossen';
$string['modformshowattemptprogress'] = 'Quizfortschritt für Schüler anzeigen';
$string['modformshowattemptprogress_help'] = 'Wenn ausgewählt, wird ein Schüler während des Versuchs eine Fortschrittsanzeige sehen, die zeigt, wie viele Fragen beantwortet wurden im Vergleich zur maximalen Anzahl.';
$string['showabilitymeasure'] = 'Zeige Fähigkeitsmessung an Schüler';
$string['showabilitymeasure_help'] = 'Manchmal ist es nützlich, die Fähigkeitsschätzungen der Schüler nach einem adaptiven Quiz zu offenbaren. Wenn diese Einstellung aktiviert ist, kann ein Schüler die Fähigkeitsschätzung im Versuchskurzüberblick und unmittelbar nach Beendigung des Versuchs sehen.';
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
$string['reportattemptsshowinitialbars'] = 'Initialleisten anzeigen';
$string['reportattemptsusersperpage'] = 'Angezeigte Anzahl von Benutzern:';
$string['reportattemptsummarytab'] = 'Zusammenfassung des Versuchs';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - Einzelbenutzer-Versuchsbericht für {$a->username}';
$string['reportuserattemptstitleshort'] = '{$a}'s Versuche';
$string['reportquestionanalysispageheading'] = '{$a} - Fragenbericht';
$string['modulenameplural'] = 'Adaptiver Quiz';
$string['modulename'] = 'Adaptiver Quiz';
$string['modulename_help'] = 'Die Aktivität Adaptiver Quiz ermöglicht es Lehrern, Quizze zu erstellen, die die Fähigkeiten der Teilnehmer effizient messen. Adaptive Quizze bestehen aus Fragen, die aus der Fragenbank ausgewählt werden und mit einer Schwierigkeitsnote versehen sind. Die Fragen werden an die geschätzte Fähigkeitsstufe des aktuellen Testteilnehmers angepasst. Wenn der Testteilnehmer eine Frage erfolgreich beantwortet, wird eine schwierigere Frage gestellt. Wenn der Testteilnehmer eine Frage falsch beantwortet, wird eine weniger anspruchsvolle Frage gestellt. Diese Technik entwickelt sich zu einer Reihe von Fragen, die auf die wirksame Fähigkeitsstufe des Testteilnehmers zusteuern. Das Quiz endet, wenn die Fähigkeit des Testteilnehmers mit der erforderlichen Genauigkeit bestimmt wurde.';


Diese Aktivität eignet sich am besten zur Bestimmung einer Fähigkeitsmessung entlang einer eindimensionalen Skala. Obwohl die Skala sehr breit sein kann, müssen alle Fragen eine Messung der Fähigkeit oder Begabung auf der gleichen Skala bereitstellen. In einem Platzierungstest zum Beispiel sollten Fragen, die Anfänger richtig beantworten können, auch von Experten beantwortet werden können, während Fragen, die höher auf der Skala liegen, nur von Experten oder durch Zufall beantwortet werden können. Fragen, die keinen Unterschied zwischen Testern unterschiedlicher Fähigkeiten aufweisen, machen den Test unwirksam und können zu unklaren Ergebnissen führen.

Die im Adaptiven Quiz verwendeten Fragen müssen:

automatisch als richtig/falsch bewertet werden

mit ihrer Schwierigkeit mithilfe des Präfixes "adpq_" gekennzeichnet sein, gefolgt von einer positiven Zahl, die im Bereich des Quiz liegt.

Das Adaptive Quiz kann konfiguriert werden, um folgendes festzulegen:

den Bereich der Schwierigkeit der Fragen/Fähigkeiten des Benutzers, die gemessen werden sollen. Beispiele für gültige Bereiche sind 1-10, 1-16 und 1-100.
die erforderliche Präzision, bevor das Quiz gestoppt wird. Oft ist ein Fehler von 5% in der Fähigkeitsmessung eine angemessene Stoppregel
die Mindestanzahl der zu beantwortenden Fragen
die maximale Anzahl der zu beantwortenden Fragen.

Diese Beschreibung und der Testprozess in dieser Aktivität basieren auf <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';

$string['pluginadministration'] = 'Adaptives Quiz';
$string['pluginname'] = 'Adaptives Quiz';
$string['nonewmodules'] = 'Keine Adaptive Quiz Instanzen gefunden';
$string['adaptivequizname'] = 'Name';
$string['adaptivequizname_help'] = 'Geben Sie den Namen der Adaptive Quiz Instanz ein';
$string['adaptivequiz:addinstance'] = 'Fügen Sie ein neues adaptives Quiz hinzu';
$string['adaptivequiz:viewreport'] = 'Adaptives Quiz Berichte ansehen';
$string['adaptivequiz:reviewattempts'] = 'Adaptives Quiz Einreichungen überprüfen';
$string['adaptivequiz:attempt'] = 'Adaptives Quiz versuchen';
$string['attemptsallowed'] = 'Erlaubte Versuche';
$string['attemptsallowed_help'] = 'Die Anzahl der Male, die ein Schüler diese Aktivität versuchen darf';
$string['requirepassword'] = 'Erforderliches Passwort';
$string['requirepassword_help'] = 'Schüler müssen vor Beginn ihres Versuchs ein Passwort eingeben';
$string['browsersecurity'] = 'Browser-Sicherheit';
$string['browsersecurity_help'] = 'Wenn "Vollbild-Pop-up mit einiger JavaScript-Sicherheit" ausgewählt ist, startet das Quiz nur, wenn der Schüler einen JavaScript-fähigen Webbrowser hat. Das Quiz erscheint in einem Vollbild-Popup-Fenster, das alle anderen Fenster bedeckt und keine Navigationssteuerelemente hat und Schüler werden, soweit möglich, daran gehindert, Funktionen wie Kopieren und Einfügen zu verwenden';
$string['minimumquestions'] = 'Minimum Anzahl der Fragen';
$string['minimumquestions_help'] = 'Die Mindestanzahl der Fragen, die der Schüler versuchen muss';
$string['maximumquestions'] = 'Maximale Anzahl der Fragen';
$string['maximumquestions_help'] = 'Die maximale Anzahl der Fragen, die der Schüler versuchen kann';
$string['startinglevel'] = 'Startniveau der Schwierigkeit';
$string['startinglevel_help'] = 'Wenn der Schüler einen Versuch beginnt, wählt die Aktivität zufällig eine Frage aus, die dem Schwierigkeitsniveau entspricht';
$string['lowestlevel'] = 'Niedrigstes Schwierigkeitsniveau';
$string['lowestlevel_help'] = 'Das niedrigste oder am wenigsten schwierige Niveau, auf dem die Bewertung Fragen auswählen kann. Während eines Versuchs wird die Aktivität dieses Schwierigkeitsniveau nicht überschreiten.';
$string['highestlevel'] = 'Höchstes Schwierigkeitsniveau';
$string['highestlevel_help'] = 'Das höchste oder schwierigste Niveau, auf dem die Bewertung Fragen auswählen kann. Während eines Versuchs wird die Aktivität dieses Schwierigkeitsniveau nicht überschreiten.';
$string['questionpool'] = 'Fragenpool';
$string['questionpool_help'] = 'Wählen Sie die Fragenkategorie(n), aus der die Aktivität während eines Versuchs Fragen ziehen wird.';
$string['formelementempty'] = 'Geben Sie eine positive Ganzzahl von 1 bis 999 ein';
$string['formelementnumeric'] = 'Geben Sie einen numerischen Wert von 1 bis 999 ein';
$string['formelementnegative'] = 'Geben Sie eine positive Zahl von 1 bis 999 ein';
$string['formminquestgreaterthan'] = 'Die Mindestanzahl der Fragen muss geringer sein als die maximale Anzahl der Fragen';
$string['formlowlevelgreaterthan'] = 'Das niedrigste Niveau muss geringer sein als das höchste Niveau';
$string['formstartleveloutofbounds'] = 'Das Startniveau muss eine Zahl sein, die zwischen dem niedrigsten und höchsten Niveau liegt';
$string['standarderror'] = 'Standardfehler zum Stoppen';
$string['standarderror_help'] = 'Wenn der Fehler in der Messung der Fähigkeit des Benutzers unter diesem Wert fällt, wird der Quiz gestoppt. Stimmen Sie diesen Wert von der Standardeinstellung von 5% ab, um mehr oder weniger Genauigkeit in der Fähigkeitsmessung zu erfordern';
$string['formelementdecimal'] = 'Geben Sie eine Dezimalzahl ein. Maximale Länge von 10 Ziffern und maximal 5 Ziffern rechts vom Dezimalpunkt';
$string['attemptfeedback'] = 'Rückmeldung zum Versuch';
$string['attemptfeedback_help'] = 'Die Rückmeldung zum Versuch wird dem Benutzer angezeigt, sobald der Versuch beendet ist';
$string['formquestionpool'] = 'Wählen Sie mindestens eine Fragenkategorie aus';
$string['submitanswer'] = 'Antwort einreichen';
$string['startattemptbtn'] = 'Versuch starten';
$string['errorfetchingquest'] = 'Kann keine Frage für Schwierigkeitsstufe {$a->level} finden';
$string['leveloutofbounds'] = 'Die angeforderte Schwierigkeitsstufe {$a->level} ist für den Versuch außerhalb des zulässigen Bereichs';
$string['errorattemptstate'] = 'Es gab einen Fehler bei der Bestimmung des Zustands des Versuchs';
$string['nopermission'] = 'Sie haben keine Berechtigung, um diese Ressource anzuzeigen';
$string['maxquestattempted'] = 'Maximale Anzahl der versuchten Fragen';
$string['notyourattempt'] = 'Dies ist nicht Ihr Versuch in der Aktivität';
$string['noattemptsallowed'] = 'Keine weiteren Versuche in dieser Aktivität erlaubt';
$string['updateattempterror'] = 'Fehler beim Versuch, den Versuchsdatensatz zu aktualisieren';
$string['numofattemptshdr'] = 'Anzahl der Versuche';
$string['standarderrorhdr'] = 'Standardfehler';
$string['errorlastattpquest'] = 'Fehler beim Überprüfen des Antwortwerts für die letzte versuchte Frage';
$string['errornumattpzero'] = 'Fehler bei Anzahl der versuchten Fragen gleich Null, aber der Benutzer hat eine Antwort auf die vorherige Frage abgegeben';
$string['errorsumrightwrong'] = 'Summe der richtigen und falschen Antworten entspricht nicht der Gesamtzahl der versuchten Fragen';
$string['calcerrorwithinlimits'] = 'Der berechnete Standardfehler von {$a->calerror} ist innerhalb der von der Aktivität festgelegten Grenzen von {$a->definederror}';
$string['missingtagprefix'] = 'Fehlendes Tag-Präfix';
$string['recentactquestionsattempted'] = 'Versuchte Fragen: {$a}';
$string['recentattemptstate'] = 'Zustand des Versuchs:';
$string['recentinprogress'] = 'In Bearbeitung';
$string['notinprogress'] = 'Dieser Versuch ist nicht in Bearbeitung.';
$string['recentcomplete'] = 'Abgeschlossen';
$string['functiondisabledbysecuremode'] = 'Diese Funktionalität ist derzeit deaktiviert';
$string['enterrequiredpassword'] = 'Erforderliches Passwort eingeben';
$string['requirepasswordmessage'] = 'Um dieses Quiz zu versuchen, müssen Sie das Quiz-Passwort kennen';
$string['wrongpassword'] = 'Passwort ist falsch';
$string['attemptstate'] = 'Zustand des Versuchs';
$string['attemptstopcriteria'] = 'Grund für das Beenden des Versuchs';
$string['questionsattempted'] = 'Summe der versuchten Fragen';
$string['attemptfinishedtimestamp'] = 'Zeitstempel des Versuchsendes';
$string['reviewattempt'] = 'Versuch überprüfen';
$string['indvuserreport'] = 'Individueller Benutzerversuch Bericht für {$a}';
$string['activityreports'] = 'Versuch Berichte';
$string['stopingconditionshdr'] = 'Stoppbedingungen';
$string['reviewattemptreport'] = 'Überprüfung des Versuchs von {$a->fullname} eingereicht am {$a->finished}';
$string['deleteattemp'] = 'Versuch löschen';
$string['confirmdeleteattempt'] = 'Bestätigung der Löschung des Versuchs von {$a->name} eingereicht am {$a->timecompleted}';
$string['attemptdeleted'] = 'Versuch gelöscht für {$a->name} eingereicht am {$a->timecompleted}';
$string['closeattempt'] = 'Versuch schließen';
$string['confirmcloseattempt'] = 'Sind Sie sicher, dass Sie diesen Versuch von {$a->name} schließen und abschließen möchten?';
$string['confirmcloseattemptstats'] = 'Dieser Versuch wurde am {$a->started} gestartet und zuletzt am {$a->modified} aktualisiert.';
$string['confirmcloseattemptscore'] = '{$a->num_questions} Fragen wurden beantwortet und die bisherige Punktzahl beträgt {$a->measure} {$a->standarderror}.';
$string['attemptclosedstatus'] = 'Manuell geschlossen von {$a->current_user_name} (Benutzer-ID: {$a->current_user_id}) am {$a->now}.';
$string['attemptclosed'] = 'Der Versuch wurde manuell geschlossen.';
$string['errorclosingattempt_alreadycomplete'] = 'Dieser Versuch ist bereits abgeschlossen und kann nicht manuell geschlossen werden.';
$string['formstderror'] = 'Es muss ein Prozentwert kleiner als 50 und größer oder gleich 0 eingegeben werden.';
$string['score'] = 'Punktzahl';
$string['bestscore'] = 'Beste Punktzahl';
$string['bestscorestderror'] = 'Standardfehler';
$string['attempt_questiondetails'] = 'Frage Details';
$string['attemptstarttime'] = 'Startzeit des Versuchs';
$string['attempttotaltime'] = 'Gesamtzeit (hh:mm:ss)';
$string['attempt_user'] = 'Benutzer';
$string['attempt_state'] = 'Versuchsstatus';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_level'] = 'Frageniveau';
$string['attemptquestion_rightwrong'] = 'Richtig/Falsch';
$string['attemptquestion_error'] = 'Standardfehler (± x%)';
$string['attemptquestion_difficulty'] = 'Fragen Schwierigkeit (logits)';
$string['attemptquestion_diffsum'] = 'Schwierigkeit Summe';
$string['attemptquestion_abilitylogits'] = 'Gemessene Fähigkeit (logits)';
$string['attemptquestion_stderr'] = 'Standardfehler (± logits)';
$string['graphlegend_target'] = 'Zielniveau';
$string['graphlegend_error'] = 'Standardfehler';
$string['answerdistgraph_title'] = 'Antwortverteilung für {$a->firstname} {$a->lastname}';
$string['answerdistgraph_questiondifficulty'] = 'Fragenniveau';
$string['answerdistgraph_numrightwrong'] = 'Anzahl falsch (-) / Anzahl richtig (+)';
$string['answerdistgraph_right'] = 'Richtig';
$string['answerdistgraph_wrong'] = 'Falsch';
$string['numright'] = 'Anzahl richtig';
$string['numwrong'] = 'Anzahl falsch';
$string['questionnumber'] = 'Frage #';
$string['na'] = 'n/a';
$string['downloadcsv'] = 'CSV herunterladen';

$string['grademethod'] = 'Bewertungsmethode';
$string['gradehighest'] = 'Höchste Note';
$string['attemptfirst'] = 'Erster Versuch';
$string['attemptlast'] = 'Letzter Versuch';
$string['grademethod_help'] = 'Wenn mehrere Versuche erlaubt sind, stehen die folgenden Methoden zur Verfügung, um die endgültige Quiznote zu berechnen:

Höchste Note aller Versuche
Erster Versuch (alle anderen Versuche werden ignoriert)
Letzter Versuch (alle anderen Versuche werden ignoriert)';
$string['resetadaptivequizsall'] = 'Alle Adaptive Quiz-Versuche löschen';
$string['all_attempts_deleted'] = 'Alle Adaptive Quiz-Versuche wurden gelöscht';
$string['all_grades_removed'] = 'Alle Adaptive Quiz-Noten wurden entfernt';
$string['questionanalysisbtn'] = 'Fragenauswertung';
$string['id'] = 'ID';
$string['name'] = 'Name';
$string['questions_report'] = 'Fragenauswertung';
$string['question_report'] = 'Fragenauswertung';
$string['times_used_display_name'] = 'Anzahl der Nutzungen';
$string['percent_correct_display_name'] = '% Richtig';
$string['discrimination_display_name'] = 'Diskriminationskraft';
$string['back_to_all_questions'] = '« Zurück zu allen Fragen';
$string['answers_display_name'] = 'Antworten';
$string['answer'] = 'Antwort';
$string['statistic'] = 'Statistik';
$string['value'] = 'Wert';
$string['highlevelusers'] = 'Benutzer über dem Fragenniveau';
$string['midlevelusers'] = 'Benutzer in der Nähe des Frage-Levels';
$string['lowlevelusers'] = 'Benutzer unter dem Frage-Level';
$string['user'] = 'Benutzer';
$string['result'] = 'Ergebnis';


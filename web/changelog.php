<? include ("frame.inc"); ?>
    <h1>Changelog</h1>
    <ul>
    	<li>Version 1.1.2 vom&nbsp;? (noch nicht freigegeben)
    		<ul>
    			<li>Mitglied: Name, Vorname und Stra�e als Suchfelder</li>
    			<li>Bugfix: L�schen von Mitgliedern mit Zusatzfeldern.</li>
    			<li>Neu: Juristische Personen (Firmen, Organisationen, Beh�rden) k�nnen als Mitglied gespeichert werden.</li>
    			<li>Neu: <a href="lehrgaenge.php">Lehrg�nge</a> </li>
    			<li>Zus�tzliche Felder zur Rechnungserstelltung. 
    				Siehe #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=15062&amp;group_id=7335">15062</a></li>
    			<li>Bugfix "Fehler nach L�schung einer Beitragsgruppe". Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=15301&amp;group_id=7335">15301</a></li>
    			<li>Mitgliederstatistik: Bugfix Altersgruppen und Ber�cksichtigung des Eintrittsdatums.</li>
    			<li>Konfiguration: EMail-Adresse kann als Spalte ausgew�hlt werden.</li>
    			<li>Abrechnung: Formularwerte speichern und wiederherstellen.</li>
    			<li>Anrede in die Spaltenauswahl aufgenommen.</li>
    			<li>Bugfix Zusatzbetr�ge</li>
    			<li>Silbentrennung in Reports aufgenommen</li>
    			<li>Icons auf Buttons</li>
    			<li>Spendenbescheinigung um 'Ersatz f�r Aufwendungen' erweitert</li>
    			<li>Mitglieder ohne Eintrittsdatum werden jetzt ber�cksichtigt. 
    			    Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=15132&amp;group_id=7335">15132</a></li>
    		</ul>
    	</li>
    	<li>Version 1.1.1 vom 19.1.2009
    		<ul>
    			<li>07.01.2009
    				<ul>
    					<li>Unter MySQL kam es zu einem Fehler beim L�schen von Zusatzfeldern. 
    						Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=15024&amp;group_id=7335">15024</a></li>
    				</ul>
    			</li>
    			<li>04.01.2009
					<ul>
						<li>Mehreren Buchungen kann gleichzeitig eine Buchungsart zugeordnet werden.</li>
					</ul>
				</li>
				<li>03.01.2009
					<ul>
						<li>Abrechnung erfolgt irrt�mlicherweise auch f�r ausgetretene Mitglieder (da hatte 
							ich einen Bug entfernt und gleichzeitig einen neuen eingebaut ;-) 
							Bug #<a href="http://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=14996&amp;group_id=7335">14996</a>
						</li>
					</ul>
				</li>
				<li>02.01.2009
					<ul>
						<li>Rechnungen auch f�r Zusatzbetr�ge</li>
					</ul>
				</li>
				<li>01.01.2009
					<ul>
						<li>Beim L�schen von Rechnungen wurde eine NullPointerException geworfen. 
							Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=14989&amp;group_id=7335">14989</a></li>
					</ul>
				</li>
				<li>30.12.2008
					<ul>
						<li>Icons auf 16x16 Pixel skaliert. 
							Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=14979&amp;group_id=7335">14979</a></li>
						<li>Fehlende Icons in Kontextmen�s erg�nzt. 
							Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=14980&amp;group_id=7335">14980</a></li>
						<li>Summenzeilen in der Buchungsliste korrekt ausgeben. 
							Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=14978&amp;group_id=7335">14978</a></li>
						<li>Anpassung an neue Jameica-Versionierung.</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>Version 1.1.0.1 vom 29.12.2008
			<ul>
				<li>Korrekte Verarbeitung wenn Eintritts- und/oder Geburtsdatum des Mitglieds fehlen. 
					Bug #<a href="http://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=14975&amp;group_id=7335">14975</a></li>
				<li>Bugfix Foreign Key unter MySQL</li>
				<li>Bugfix Formularanzeige</li>
				<li>Bugfix Tabelle buchungsart f�r MySQL</li>
			</ul>
		</li>
		<li>Version 1.1 vom 28.12.2008
	<ul>
	<li>27.12.2008
		<ul>
			<li>Bugfix Booleans aus MySQL-DB lesen</li>
			<li>About-Dialog gibt jetzt auch Build-Datum und -Nummer aus.</li>
			<li>JVerein pr�ft, ob die passende Jameica-Version installiert wurde.</li>
		</ul>
	</li>
	<li>24.12.2008
		<ul>
			<li>Bei Altersjubil�en wird jetzt das Geburtsdatum anstatt des Eintrittsdatums ausgegeben.</li>
		</ul>
	</li>
	<li>23.12.2008
		<ul>
			<li>Vermeidung von NullpointerExceptions nach Import von leeren Kommunikationsdaten</li>
		</ul>
	</li>
	<li>22.12.2008
		<ul>
			<li>Beta3 herausgegeben.</li>
			<li>Zusatzabbuchungen-&gt;Zusatzbetrag</li>
			<li>Icons ins Men� und in die Kontextmen�s aufgenommen.</li>
			<li>Telefonnummern auf 20 Stellen verl�ngert.</li>
			<li>Bugfix MySQL-Support. Siehe auch ge�nderte 
				<a href="dokumentationmysql.php">Installationsbeschreibung</a></li>
		</ul>
	</li>
	<li>19.12.2008
		<ul>
			<li>Bugfix F�lligkeitsberechnung Zusatzabbuchungen</li>
		</ul>
	</li>
	<li>18.12.2008
		<ul>
			<li>Bugfix Import: Adressierungszus�tze</li>
			<li>Bugfix Dropdown-Box Zahlungsweg</li>
			<li>Abrechnung: Mitglieder mit einem Eintrittsdatum in der Zukunft bleiben unber�cksichtigt.</li>
			<li>Abrechnung: Beim Beitragsmodell 'monatlich mit monatl., viertel-, halb- oder j�hrlicher 
				Zahlungsweise' wird jetzt auch 'eingetretene Mitglieder' angeboten.</li>
		</ul>
	</li>
	<li>14.12.2008
		<ul>
			<li>Bug im Zusammenhang mit Drop-Down-Boxen gefixed.</li>
			<li>Beta2 herausgegeben.</li>
		</ul>
	</li>
	<li>11.12.2008
		<ul>
			<li>Beta-Phase er�ffnet. Zwischen den Feiertagen wird, sofern keine schwerwiegenden Fehler 
				auftreten, die Version 1.1 freigegeben.</li>
			<li>Redaktionelle �nderung an der Buchungsliste.</li>
		</ul>
	</li>
	<li>04.12.2008
		<ul>
			<li>Handy in den CSV-Export aufgenommen.</li>
		</ul>
	</li>
	<li>03.12.2008
		<ul>
			<li>Buchungen der Buchf�hrung um Auszugs- und Blattnummer erweitert.</li>
		</ul>
	</li>
	<li>30.11.2008
		<ul>
			<li>Spalten der Mitglieder�bersicht sind jetzt konfigurierbar. Die Konfiguration f�r alle 
				�bersichten ist vorgesehen und wird sp�ter realisiert.</li>
			<li>Bugfix: F�r die Auswertung Zusatzabrechnungen erfolgt jetzt auch der Aufruf des 
				Anzeigeprogrammes.</li>
		</ul>
	</li>
	<li>16.11.2008
		<ul>
			<li>Verschiebung der Speicherung der Programmeinstellungen von einer Property-Datei in 
				die Datenbank zur Vermeidung von Problemen in Multi-User-Umgebungen.</li>
		</ul>
	</li>
	<li>13.11.2008
		<ul>
			<li>Mitglied: Adressierungszusatz aufgenommen (Mitgliedsdaten, PDF-Liste, CSV-Export, Import)</li>
		</ul>
	</li>
	<li>11.11.2008
		<ul>
			<li>Einstellungen: Neu gruppiert und mit Scrollbars versehen.</li>
			<li>Mitglieder: Suche nach Geschlecht im Dialog und in den Auswertungen implementiert. 
				Such-Masken 2spaltig formatiert.</li>
		</ul>
	</li>
	<li>30.09.2008
		<ul>
			<li>Kursteilnehmer k�nnen nach Namen oder Eingabedatum gefiltert werden.</li>
			<li>Abrechnungsinformationen k�nnen nach Datum oder Verwendungszweck gefiltert werden.</li>
		</ul>
	</li>
	<li>29.09.2008
		<ul>
			<li>Unter Plugins|JVerein|Erweitert kann jetzt ein Backup im XML-Format erzeugt und anschlie�end 
				in eine leere Datenbank importiert werden. Ben�tigt Jameica-Nightly-Build &gt;= 30.9.2008</li>
		</ul>
	</li>
	<li>28.09.2008
		<ul>
			<li>Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=14496&amp;group_id=7335">14496</a> gefixed.</li>
		</ul>
	</li>
	<li>21.09.2008
		<ul>
			<li>Beim Start wird gepr�ft, ob die korrekten Versionen von Jameica und Hibiscus installiert sind.</li>
			<li>Bei den <a href="dokumentationauswertungjubilaeen.php">Jubil�en</a> k�nnen jetzt Altersjubilare 
				ausgewertet werden. Unter <a href="administration_stammdaten.php"> Stammdaten</a> 
				werden die Geburtstage konfiguriert.</li>
		</ul>
	</li>
	<li>16.09.2008
		<ul>
			<li>Neu: <a href="rechnungen.php">Rechnung</a></li>
			<li>Abbuchung hei�t jetzt Abrechnung.</li>
		</ul>
	</li>
	<li>04.09.2008
		<ul>
			<li>SearchProvider f�r die neue Jameica-Suchmaschine (Mitglieder und Kursteilnehmer)</li>
		</ul>
	</li>
	<li>19.07.2008
		<ul>
			<li>Neu: <a href="administration_formulare.php">Formulare</a></li>
			<li>Neu: <a href="spendenbescheinigung.php">Spendenbescheinigung</a></li>
		</ul>
	</li>
	<li>12.07.2008
		<ul>
			<li>Bugfix beim CSV-Export mit leeren Zusatzfeldern</li>
		</ul>
	</li>
	<li>10.07.2008
		<ul>
			<li>PDF-Export der Buchungen jetzt entweder als Einzelbuchungen oder als Summen</li>
			<li>Optimierung der internen Reporter-Klasse</li>
			<li>Mitgliederliste auf den Reporter umgestellt. Kommunikationsdaten aufgenommen.</li>
			<li>Bugfix im Script zur Erzeugung der Datenbank</li>
		</ul>
	</li>
	<li>09.07.2008
		<ul>
			<li>Abbuchung: Fehlermeldungen von <a href="http://obantoo.berlios.de/">OBanToo</a> werden 
				an die Oberfl�che gebracht</li>
		</ul>
	</li>
	<li>09.07.2008
		<ul>
			<li>Freigabe der Buchf�hrung zum allgemeinen Test</li>
		</ul>
	</li>
	<li>29.06.2008
		<ul>
			<li>Alpha-Version der neuen Buchf�hrung</li>
			<li>Neues Datenfeld zur Speicherung der Handy-Nummer des Mitglieds. Import angepasst.</li>
		</ul>
	</li>
	<li>21.06.2008
		<ul>
			<li>Bugfix: "von-Datum" bei der Abbuchung wird jetzt korrekt dargestellt</li>
		</ul>
	</li>
	<li>07.05.2008
		<ul>
			<li>Beim wiederholten Import werden jetzt alle notwendigen Tabellen gel�scht</li>
		</ul>
	</li>
	<li>05.05.2008
		<ul>
			<li>Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=13726&amp;group_id=7335">13726</a> gefixed</li>
			<li>Bugfix NPE bei Zusatzfeldern</li>
		</ul>
	</li>
	<li>10.04.2008
		<ul>
			<li>Speicherung von Zusatzfeldern bei den Mitgliedern 
				(<a href="administration_felddefinitionen.php">Definition</a>, 
				<a href="mitglied.php#Zusatzfelder">Mitglied</a>, 
				<a href="administration_import.php">Import</a>, 
				 <a href="dokumentationauswertungmitglieder.php">Export</a>).</li>
		</ul>
	</li>
	<li>04.04.2008
		<ul>
			<li>L�nge des Feldes Titel auf 20 verl�ngert, L�nge des Feldes PLZ auf 10 verl�ngert.</li>
			<li>Bugfix: Anzeige der Hilfe unter Windows.</li>
		</ul>
	</li>
	<li>03.04.2008: Scrollbars in der Mitglieder-Detail-Ansicht von Olaf �bernommen. Neues Nightly von 
		Jameica erforderlich.</li>
</ul>
</li>
<li>Version 1.0 vom 25.03.2008
	<ul>
		<li>Import des Zahlungsrhytmusses implementiert.</li>
		<li>Neu: In die Jameica-Startseite kann eine �bersicht �ber die Wiedervorlagen eingeblendet werden.</li>
		<li>Die Statistik bezieht sich jetzt auf einen Stichtag. Mitglieder, die nach dem Stichtag 
			ausgetreten sind, werden noch als Mitglieder gewertet.</li>
		<li>In der Statistik wird jetzt die Anzahl der Anmeldungen und Abmeldungen zwischen dem 1.1. und 
			dem eingegebenen Stichtag ausgegeben.</li>
		<li>Bei der Abbuchung kann jetzt die DTAUS-Datei ins PDF-Format konvertiert werden.</li>
		<li>PDF-Dokumentation durch Link zu diesem Wiki ersetzt.</li>
		<li>Neu: Jubil�umsliste</li>
		<li>Direkte �bernahme der Lastschriften als Einzel- oder Sammellastschriften in 
			<a href="http://www.willuhn.de/products/hibiscus/">Hibiscus</a>.</li>
		<li>Bei den <a href="administration_einstellungen.php">Einstellungen</a> k�nnen jetzt 
			Dateinamenmuster vorgegeben werden. Dieses Muster wird bei der Erzeugung von Dateinamen 
			verwendet.</li>
		<li>Erweiterung um Hilfefunktion.</li>
		<li>Bei Neuinstallationen wird jetzt standardm��ig die H2-Datenbank installiert.</li>
		<li>Bug #<a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=12860&amp;group_id=7335">12860</a>
			gefixed </li>
		<li>Zu jedem Mitglied k�nnen Eigenschaften gespeichert werden. Diese Eigenschaften k�nnen im Dialog 
			und bei der Auswertung in die Selektion einbezogen werden. 
			Siehe <a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=12862&amp;group_id=7335">#12862</a></li>
		<li>Erweiterung der Filterkriterien bei der Mitgliedersuche.</li>
		<li>h2.jar entfernt. Wird durch Jameica mitgeliefert.</li>
		<li><a href="dokumentationmysql.php">MySQL-Support</a> von Michael Trapp �bernommen.</li>
		<li>Bei der Abbuchung wird jetzt ein Stichtag abgefragt. Dieser Stichtag wird zur Pr�fung herangezogen, 
			ob ein ausgetretenes Mitglied noch zahlen muss. 
			Siehe <a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=12861&amp;group_id=7335">#12861</a></li>
		<li>Bei der Abbuchung k�nnen jetzt die Jahres-, Halbjahres- und Vierteljahresabbuchungen auch separat 
			ausgef�hrt werden. Siehe <a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=12861&amp;group_id=7335">#12861</a> 
			und <a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=13021&amp;group_id=7335">#13021</a>.</li>
		<li>Bugfix bei der Ber�cksichtigung des Austrittsdatums bei der Mitgliederauswertung.</li>
		<li>Bugfix bei der Abbuchung: Zusatzabbuchung und Kursteilnehmer nur abbuchen, wenn entsprechendes 
			H�kchen gesetzt ist.</li>
		<li>MySQL-Treiber entfernt. Wird jetzt von Jameica mitgeliefert.</li>
		<li>CSV-Export erweitert um die Bezeichnung der Beitragsgruppe.</li>
		<li>Bugfix: Bei der Mitgliedersuche wurden auch Eintritts- und Austrittsdaten der Auswertung 
			ber�cksichtigt.</li>
		<li>Workaround f. Bug in Jameica</li>
	</ul>
</li>
<li>Version 0.9.4 vom 16.12.2007
	<ul>
		<li>Bugfix Update-Mimik/Migration. Update und Migration '�berholten sich'.</li>
	</ul>
</li>
<li>Version 0.9.3 vom 03.12.2007
	<ul>
		<li>Deployment-Bug: Es wurde nicht alles komplett ausgeliefert.</li>
	</ul>
</li>
<li>Version 0.9.2 vom 02.12.2007
	<ul>
		<li>Mitgliedersuche: Einschr�nkung auf angemeldete oder abgemeldete Mitgliedschaft</li>
		<li>Umstellung auf die H2-Datenbank</li>
		<li>Bugfix bei Zusatzabbuchungen ohne Interval</li>
		<li>Dokumentation: SPG-Export-Hardcopy auf Forderung von SPG durch textuelle Beschreibung ersetzt.</li>
		<li>Wegfall der Einstellung "Standardtab bei Mitgliedersuche". Es wird immer der zuletzt ausgew�hlte 
			Tab angezeigt.</li>
		<li>Neu: Geburtstagsliste bei der Auswertung der Mitglieder</li>
		<li>Intern: Neue Mimik f�r das Update der Datenbankstruktur</li>
		<li>Neues Beitragsmodell</li>
		<li>Bugfix wiederkehrende Zusatzabbuchungen</li>
	</ul>
</li>
<li>Version 0.9.1 vom 04.09.2007
	<ul>
		<li>Beschr�nkung der L�nge des Vereinsnamens auf 27 Stellen wegen Problemen mit der Abbuchung</li>
		<li>Bugfix bei der Abbuchung, wenn es keine beitragsfreie Beitragsgruppe gibt</li>
		<li>Neuer Konfigurationsbildschirm im Plugins-Men�: Es kann bestimmt werden, ob das Geburtsdatum 
			und das Eintrittsdatum ein Pflichtfeld ist und ob die Reiter Kommunikationsdaten, 
			Zusatzabbuchungen, Vermerke und Wiedervorlage sowie die Kursteilnehmer angezeigt werden. 
			Bug #11762</li>
		<li>Einstellungsdialog erweitert um den Standard-Tab f�r die Mitglieder-Suche</li>
		<li>Bug <a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=11763&amp;group_id=7335">#11763</a> gefixed</li>
		<li>Bug <a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=11764&amp;group_id=7335">#11764</a> gefixed</li>
		<li>Bug <a href="https://developer.berlios.de/bugs/?func=detailbug&amp;bug_id=11819&amp;group_id=7335">#11819</a> gefixed</li>
		<li>Korrekte Anzeige der Pflichtfelder beim Mitglied. Achtung! Wer Wert auf dieses Feature legt, 
			muss ein Jameica- Nighly-Build &gt;= 30.8.2007 einsetzen. Ansonsten werden BLZ und Kontonummer 
			nicht als Pflichtfeld angezeigt.</li>
		<li>Mitglieder k�nnen jetzt �ber das Context-Men� bearbeitet und gel�scht werden</li>
		<li>Beitragsgruppen k�nnen jetzt �ber das Context-Men� mit einem rechten Mausklick oder einen 
			Button gel�scht werden.</li>
	</ul>
</li>
<li>Version 0.9 vom 20.07.2007
	<ul>
		<li>�berpr�fung der Datenbank-Struktur beim Startup.</li>
		<li>Wiederkehrende Zusatzabbuchungen</li>
		<li>Bei der Neuerfassung von Mitgliedern wird nach der Eingabe der PLZ der Ort automatisch ermittelt, 
			sofern er bereits bei mindestens einem Mitglied gespeichert ist</li>
		<li>Bugfix in der SQL-DDL-Update-Routine</li>
		<li>Vermeidung ClassNotFoundException</li>
		<li>Bugfix bei der Abbuchung mit mehr als einer beitragsfreien Beitragsgruppe</li>
		<li>Neu: Wiedervorlagetermin bei jedem Mitglied und �bersicht �ber alle Termine</li>
		<li>Neu: Auswertung Kursteilnehmer</li>
		<li>Bugfix: Stammdatenverwaltung</li>
		<li>Neu: Handbuch im PDF-Format</li>
		<li>Neu: Handbuch kann �ber Plugins|JVerein|Handbuch aufgerufen werden</li>
	</ul>
</li>
<li>Version 0.7 vom 27.03.2007
	<ul>
		<li>Zeit-Optimierung bei der Anzeige der Mitglieder-Suche</li>
		<li>Neu: Bei der Suche der Mitglieder gibt es jetzt einen Tab mit allen Mitgliedern</li>
		<li>Kursteilnehmer: Abbuchungsdatum kann zur�ckgesetzt werden</li>
		<li>Beitragsgruppe: Beitragsart kann jetzt festgelegt werden</li>
		<li>Bugfix Import. Jetzt k�nnen, wie dokumentiert, beliebige Dateinamen verwenden werden</li>
		<li>Erweiterung Import um Zahlungsweg</li>
		<li>Zus�tzliche Plausibilit�tspr�fung der Import-Datei</li>
		<li>Herstellung von Familienverb�nden f�r Familientarife</li>
		<li>Zus�tzliche Plausi bei der Abbuchung</li>
	</ul>
</li>
<li>Version 0.6 vom 18.03.2007
	<ul>
		<li>Neu: Zahlungsweg beim Mitglied</li>
		<li>Neu: Tabelle zur �berwachung der manuellen Zahlungseing�nge</li>
		<li>Bugfix: Bei der Abbuchung von Kursteilnehmern wird das Abbuchungsdatum jetzt korrekt gesetzt</li>
		<li>Anpassung an Jameica/Hibiscus: Kennzeichnung der Pflichtfelder</li>
	</ul>
</li>
<li>Version 0.5 vom 10.03.2007
	<ul>
		<li>Neu: Kursteilnehmer</li>
		<li>Bugfix Mitgliederstatistik. Nur aktive Mitglieder werden ber�cksichtigt.</li>
		<li>Randeinstellungen der Mitgliederliste ge�ndert.</li>
		<li>Konfiguration aus dem Extras-Men� zur Jameica-Konformit�t in das Plugins-Men� am oberen 
			Rand verschoben</li>
		<li>Buchf�hrung entfernt. Mit dem aktuellen Nightly-Build von Jameica und Hibiscus kann diese 
			Aufgabe viel besser erledigt werden</li>
		<li>Zus�tzliche Vermerkfelder bei den Mitgliedern</li>
	</ul>
</li>
<li>Version 0.4a vom 27.01.2007
	<ul>
		<li>Installationsproblem beseitigt.</li>
	</ul>
</li>
</ul>
    <!-- 
    $Log$
    Revision 1.3  2009/05/13 20:47:53  jost
    *** empty log message ***

    Revision 1.2  2009/05/08 15:39:55  jost
    *** empty log message ***

    Revision 1.1  2009/05/08 14:46:22  jost
    shtml - php

    Revision 1.34  2009/05/03 15:33:30  jost
    Neue Homepage

    -->

<? include ("footer.inc"); ?>

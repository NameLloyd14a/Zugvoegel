-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 18. Mrz 2024 um 21:53
-- Server-Version: 5.7.24
-- PHP-Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `zugvoegel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_subbed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vogel`
--

CREATE TABLE `vogel` (
  `vgl_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `beschreibung` text,
  `land` text NOT NULL COMMENT 'Land/Region',
  `bild` varchar(500) DEFAULT NULL COMMENT 'Url Von Bild',
  `lebenserwartung` int(10) UNSIGNED DEFAULT NULL COMMENT 'Lebenserwartung in Jahren',
  `gewicht` int(100) UNSIGNED DEFAULT NULL COMMENT 'in g',
  `lateinname` varchar(500) DEFAULT NULL,
  `groesse` int(100) UNSIGNED DEFAULT NULL COMMENT 'in cm',
  `mahlzeit` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `vogel`
--

INSERT INTO `vogel` (`vgl_id`, `name`, `beschreibung`, `land`, `bild`, `lebenserwartung`, `gewicht`, `lateinname`, `groesse`, `mahlzeit`) VALUES
(2, 'Uferschwalbe', 'Die Uferschwalbe brütet in Kolonien in Kiesgruben, früher hingegen in Steilufern von unverbauten Flüssen. In den Brutkolonien, die bis über 100 Paare beherbergen können, herrscht ein reges An- und Abfliegen. Meist ist die Luft von den Rufen zahlreicher Uferschwalben erfüllt, die sich geschwätzig unterhalten oder zu ihren Nesteingängen fliegen. Die bis über einen Meter langen Brutröhren werden nur mit den Füssen gegraben. Sind die Röhren unbewacht, wird das Nistmaterial in grossen Kolonien häufig von den Nachbarn gestohlen.', 'Nordamerika, Europa', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3650_0.jpg', 10, 15, 'Riparia riparia', 12, 'Insekten'),
(1, 'Wendehals', 'Der wärmeliebende Wendehals mit dem ausgezeichneten Tarngefieder ist in mehrfacher Hinsicht einzigartig: Obschon er zu den Spechten gehört, zimmert er keine eigene Bruthöhle, sondern übernimmt eine Baumhöhle oder einen Nistkasten. Auch dass der Wendehals aufrecht auf Ästen sitzt und gelegentlich zweimal im Jahr brütet, ist untypisch für Spechte. Er ist kein Standvogel wie seine Verwandten, sondern überwintert vorwiegend in der Sahelzone.', 'Westeuropa', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3370_0.jpg', 10, 37, 'Jynx torquilla', 16, 'Insekten'),
(3, 'Rotmilan', 'Der Rotmilan ist nach Bartgeier und Steinadler der drittgrösste einheimische Greifvogel. Die Vögel können stundenlang auf ihren schmalen, langen Flügeln kreisen und steuern dabei unablässig mit dem langen Gabelschwanz. Zur Balzzeit vollführen die Paare richtige Kunstflüge und äussern häufig ein wieherndes Trillern. Der Rotmilan hat sich in der Schweiz in den letzten Jahrzehnten deutlich ausbreiten können. Der Schweizer Brutbestand ist zunehmend von internationaler Bedeutung, denn in vielen Regionen Europas sind die Vorkommen rückläufig.', 'Europa', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/1090_0.jpg', 25, 1300, 'Milvus', 73, 'Kleinsäuger, Vögel, Aas, Abfall, Würmer'),
(4, 'Kiebitz', 'Der Kiebitz ist wohl die bekannteste Limikolenart und einer der auffälligsten Bewohner offener Landschaften. Er ist dank seiner Silhouette mit der einzigartigen, langen Federholle, dem violetten Glanz der dunklen Gefiederpartien und seiner Stimme unverkennbar. Den Rufen verdankt er seinen deutschen Namen. Besonders die Männchen sind bei ihren akrobatischen Balzkapriolen sehr stimmfreudig.', 'Paläarktis', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/1850_0.jpg', 18, 230, 'Vanellus', 31, 'Insekten, Samen, Würmer'),
(5, 'Star', 'Der Star ist ein munterer Geselle, der vor allem ausserhalb der Brutzeit oft in grossen Ansammlungen auftritt. Schwärme von lärmigen Staren, die zu Tausenden kurz vor Einbruch der Dunkelheit zu ihren Schlafplätzen ziehen, sind vielerorts ein gewohnter Anblick. Durch die gesellige Lebensweise profitieren die Vögel voneinander, indem sie sich an die günstigen Nahrungsgebiete führen und sich gegenseitig vor Feinden warnen. Bei Flugmanövern über Schlafplätzen sowie beim Angriff von Greifvögeln ziehen sich Schwärme schnell zu Bändern oder kugelförmigen Haufen zusammen, die sich extrem koordiniert bewegen. In Obstkulturen, Weinbergen und im Winter in Olivenhainen können Starenschwärme aber Schäden anrichten.', 'Europa', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/5180_0.jpg', 22, 80, 'Sturnus vulgaris', 20, 'Früchte, Insekten, Samen, Beeren, Würmer'),
(6, 'Ringeltaube', 'Die Ringeltaube ist die grösste und häufigste in der Schweiz vorkommende Taubenart. Auf ihrem Zug meiden die Vögel die Alpen grösstenteils und fliegen deshalb vorwiegend dem Jura entlang und durchs Mittelland. An gewissen Stellen konzentriert sich der Taubenzug, so dass im Oktober oft riesige Verbände beobachtet werden können. In ganz Europa sind Ringeltauben eine begehrte Jagdbeute. Auch Wanderfalke und Habicht versuchen oft in rasanten Jagdflügen, ein Tier aus den grossen, dicht fliegenden Trupps zu erbeuten.', 'Europa, Afrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/2990_0.jpg', 17, 500, 'Columba palumbus', 41, 'Samen'),
(7, 'Weissstorch', 'Der Weissstorch ist als Kinder bringender Klapperstorch und als Glücksbringer «Adebar» wohlbekannt. Seit der Antike wurde der Storch als Botschafter der Fruchtbarkeit von einigen Völkern vergöttert und geschützt. Die Intensivierung und moderne Methoden der Landwirtschaft sind verantwortlich, dass diese Stelzvögel heute Probleme haben, ihre Jungen mit ausreichend Nahrung zu versorgen. Weitere Schwierigkeiten ergeben sich durch ihre Vorliebe für feuchte Wiesen, die zunehmend entwässert wurden, durch Kollisionen mit Freileitungen, den Einsatz von Schädlingsbekämpfungsmitteln und den Jagddruck in den Durchzugs- und Winterquartieren. Mittlerweile geht es mit dem Storchenbestand in der Schweiz dank dem ehrgeizigen Wiederansiedlungsprojekt von Max Bloesch wieder aufwärts. Sollen die stolzen Vögel bei uns auch in Zukunft ein Auskommen haben, müssen wir für sie geeignete Lebensräume erhalten und aufwerten.', 'Paläarktis', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/0500_0.jpg', 39, 3300, 'Ciconia ciconia', 115, 'Insekten, Kleinsäuger, Amphibien, Würmer'),
(8, 'Singdrossel', 'Der Gesang der Singdrossel vermittelt Vorfrühlingsstimmung. Bereits früh im März hallen die Wälder in der Dämmerung von den Wiederholungen der lauten und klaren Motive wider. Bekannt ist die Singdrossel vor allem wegen ihrer Drosselschmieden: An geeigneten, regelmässig genutzten Steinen zertrümmert sie das Gehäuse von Schnecken, um an den weichen Körper zu gelangen.', 'Nord und Osteuropa; im Winter Nord-Afrika und Iran', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4310_0.jpg', 17, 80, 'Turdus philomelos', 22, 'Insekten, Schnecken, Beeren, Würmer\r\n'),
(9, 'Bachstelze', 'Die Bachstelze ist als zutrauliche Kulturfolgerin und Bewohnerin offener Landschaften weit verbreitet und kaum zu übersehen. Zwar findet man sie oft in der Nähe eines Gewässers, doch ist sie nicht ans Wasser gebunden, wie man aus ihrem deutschen Namen schliessen könnte. Ihre Nahrung sucht sie hauptsächlich auf vegetationsfreien oder wenig bewachsenen Flächen im Kulturland, an Strassen und auf Hausdächern. Sie gehört zu den wenigen Vogelarten, die von den menschlichen Eingriffen in die Kulturlandschaft profitieren.', 'Südostgrönland, Island bis Färöer, Europa, Südural, Kleinasien', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/5030_0.jpg', 12, 25, 'Motacilla alba', 18, 'Insekten, Spinnen'),
(10, 'Feldlerche', 'Die Dichter haben die Feldlerche wegen ihres Gesangs – ein endloser Fluss trillernder oder jubilierender Töne – als Frühlingsbotin und Minnesängerin der Lüfte gepriesen. Ein Frühlingsmorgen in der offenen Kulturlandschaft, in der die Luft vom Lied der Feldlerche erfüllt ist, bleibt unvergesslich. Singend steigt das Männchen in immer kleiner werdenden Spiralen steil empor, meist bis in 60 Meter Höhe. Dann «hängt» es singend mehr oder weniger auf der Stelle. Da es beim Ein- und Ausatmen nicht absetzt, kann es fünf Minuten und länger singen.', 'Azoren; Europa von Wales bis Norwegen, Uralgebirge und Alpen', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3570_0.jpg', 10, 40, 'Alauda arvensis', 19, 'Insekten, Samen'),
(11, 'Schwarzmilan', 'Der Schwarzmilan ist im Gegensatz zum Rotmilan ein ausgesprochener Zugvogel und stärker ans Wasser gebunden. Nach der Ankunft ab März beginnen die Paare mit der Balz. Dabei sind die typischen wiehernden und trillernden Rufreihen zu hören. Als gewandter Flieger greift der Schwarzmilan oft auf dem Wasser treibende Fische in elegantem Sturzflug, schwingt sich wieder in die Höhe und kröpft seine Beute gleich im Flug. Nicht selten sucht er auch Autobahnen und Müllplätze nach Nahrung ab.', 'NW-Afrika und Europa bis Süd-Zentralasien; überwintert in Süd-Afrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/1100_0.jpg', 23, 800, 'Milvus migrans', 60, 'Fische, Aas, Abfall'),
(12, 'Hausrotschwanz', 'Ursprünglich war der Hausrotschwanz ein reiner Felsenbewohner, der aber als Kulturfolger von der zunehmenden Verstädterung und der Ausdehnung der Siedlungen profitierte und vermutlich im 18. und 19. Jahrhundert in unsere Städte und Dörfer vordrang. Hier ersetzen ihm Gebäude und andere Bauten die felsige Bergwelt. Er brütet auch weiterhin in Höhen bis zu 3200 m und ist unsere am weitesten verbreitete Brutvogelart. Der gepresst knirschende Gesang setzt meist lange vor Sonnenaufgang ein und ist der Auftakt für das Vogelkonzert.', 'West- und Mitteleuropa bis zur Krim und Nordafrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4060_0.jpg', 10, 19, 'Phoenicurus ochruros', 15, 'Insekten, Spinnen'),
(13, 'Zilpzalp', 'Mit einem deutlichen, oft wiederholten «zilp zalp» stellt sich der unscheinbare Laubsänger gleich selber vor. Als einer der ersten Zugvögel ist sein Gesang bereits Mitte März in der Schweiz zu hören. Regelmässig versuchen einige Vögel in der Schweiz zu überwintern, vor allem in Gewässernähe. Bei der Wahl des Reviers ist der Zilpzalp wenig wählerisch und besiedelt fast jeden Wald bis zur Baumgrenze. Er ist einer unserer verbreitetsten Brutvögel. Das kugelige Nest wird vom Weibchen allein gebaut, wozu es mindestens 1200 Transportflüge benötigt.', 'Dänemark bis Pyrenäen, Polen und Rumänien; überwintert in Afrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4730_0.jpg', 7, 8, 'Phylloscopus collybita', 11, 'Insekten, Spinnen'),
(14, 'Stieglitz', 'Der bunte Stieglitz war schon seit der Römerzeit wegen seiner Farbenpracht, seines Gesangs, seiner Verträglichkeit und weil er sich leicht mit Kanarienvögeln kreuzen lässt, ein beliebter Käfigvogel. Seinen Namen hat er vom oft zu hörenden Kontaktruf «stiglit». Den anderen gängigen Namen Distelfink erhielt er, weil er im Sommer und Herbst oft auf Disteln sitzt und mit dem relativ langen und spitzen Schnabel die Samen aus den Fruchtständen klaubt. Geeignete Nahrungspflanzen sind für den Stieglitz jedoch oft Mangelware, was nicht zuletzt durch unseren «Sauberkeitsfimmel» mitverursacht wird.', 'Skandinavischen Halbinsel östlich bis zum mittleren Ural, südlich bis zu den östlichen Niederlanden, Mittelfrankreich, Italien, Nordwestrumänien, Moldawien und der nördlichen Ukraine; teilweise wandernd, überwinternd von Mittel- und Südeuropa', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/5350_0.jpg', 11, 15, 'Carduelis carduelis', 13, 'Samen'),
(15, 'Alpensegler', 'Wenn ab Ende Juli die Mauersegler weggezogen sind, haben die Alpensegler den Luftraum über unseren Städten für sich. Trupps aus Altvögeln und ihrem Nachwuchs jagen sich in rasanten Flugspielen laut trillernd in grosser Höhe nach. Die grossen, falkenähnlichen Alpensegler besiedeln bei uns zwei unterschiedliche Lebensräume: Ursprünglich brüteten sie an Felswänden in den Alpen und lokal im Jura. Sie haben sich zudem auch in Siedlungsgebiete und Städte gewagt, wo ihnen hohe Gebäude weitere Brutplätze bieten.', 'Südeuropa bis Kleinasien und Nordiran; überwintert in den afrikanischen Tropen', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3260_0.jpg', 27, 100, 'Tachymarptis melba', 22, 'Insekten, Spinnen'),
(16, 'Mönchsgrasmücke', 'Aufgrund ihrer Anpassungsfähigkeit sieht die Mönchsgrasmücke einer günstigen Zukunft entgegen. Sie gehört bei uns zu den häufigsten Brutvögeln und bereichert mit ihren klaren, volltönenden Flötenstrophen sogar gebüschreiche Parks und Gärten in Grossstädten. Die Art ist ein beliebtes Studienobjekt für die Vogelzugforschung, denn seit einigen Jahrzehnten hat sich bei einem Teil der Brutvögel eine neue Wegzugstrategie nach Nordwesten in Richtung der Nordsee und auf die Britischen Inseln etabliert.', 'Europa bis W-Sibirien und Nordwestafrika; überwintert in Südafrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4570_0.jpg', 8, 17, 'Sylvia atricapilla', 14, 'Insekten, Spinnen, Beeren'),
(17, 'Girlitz', 'Noch im Mittelalter war der Girlitz auf das Mittelmeergebiet beschränkt. Später, vor allem im Verlauf des 19. und 20. Jahrhunderts, stiess er mehr und mehr nach Norden vor und ist heute ein recht häufiger Brutvogel in Mittel- und Osteuropa. Ohne Mithilfe des Menschen hätte der Girlitz nicht so rasch vordringen können, denn die Nadelgehölze, für die dieser kleine gelbe Vogel eine Vorliebe hat, findet er vor allem in der Nähe menschlicher Siedlungen.', 'Paläarktis', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/5460_0.jpg', 7, 13, 'Serinus serinus', 12, 'Samen'),
(18, 'Rauchschwalbe', 'Im Sprichwort «Eine Schwalbe macht noch keinen Sommer» hat sich die Beobachtung niedergeschlagen, dass einzelne Rauchschwalben bereits ab Mitte März aus den afrikanischen Winterquartieren zurückkehren. In grösserer Zahl kommen sie erst ab Mitte April an, wenn der Sommer vor der Tür steht. Die Rauchschwalbe lebt seit Jahrhunderten in engster Nachbarschaft mit dem Menschen und gilt als Frühlings- und Glücksbringerin. Sie brütet meist in Ställen und Scheunen und ist eine wahre Baumeisterin. Für ein Nest werden etwa 750–1400 Erdklümpchen benötigt. Die zu ihrer Beschaffung zurückgelegte Wegstrecke wurde auf rund 220 Kilometer berechnet.', 'Europa, Westasien und Nordafrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3610_0.jpg', 11, 20, 'Hirundo rustica', 19, 'Insekten, Spinnen'),
(19, 'Wiedehopf', 'Mit dem prächtigen Kopfschmuck, dem orangebräunlichen Gefieder und den breiten, schwarzen und weissen Bändern auf Schwingen und Schwanz wirkt der Wiedehopf wie ein exotischer Vogel. Er stellt hohe Ansprüche an seinen Lebensraum: Besonders ein üppiges Angebot an Grossinsekten und geeignete Bruthöhlen müssen vorhanden sein. In der Schweiz findet er nur noch in wenigen Gebieten ein Auskommen. Hier sind im Frühling die dreisilbigen «hup hup hup»-Balzrufe zu hören, wovon sich auch der wissenschaftliche Name ableitet.', 'Kanarische Inseln, Mittel- und Südeuropa südlich bis Ishttps://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3360_0.jpgrael und östlich bis Südostsibirien und Nordkorea, südlich bis Nordwestindien, Tibet und China', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3360_0.jpg', 8, 68, 'Upupa epops', 27, 'Insekten'),
(20, 'Mehlschwalbe', 'Als Gebäudebrüterin hat die Mehlschwalbe zunehmend Probleme, geeignete Nistplätze zu finden – trotz der steten Zunahme des Siedlungsraums. Leider werden Nester oft mutwillig zerstört, da der Kot dieser Insektenvertilger Hausfassade und Boden verschmutzen kann. Mit etwas gutem Willen lassen sich akzeptable Lösungen finden, so indem Kunstnester nur an problemlosen Stellen angebracht werden.', 'Europa bis Zentral-Asien, West- und Süd-Afrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3640_0.jpg', 14, 18, 'Delichon urbicum', 12, 'Insekten'),
(21, 'Kuckuck', 'Als einziger unserer Brutvögel ist der Kuckuck ein Brutschmarotzer und überlässt die Jungenaufzucht kleineren Singvögeln. Damit sie seine Eier und Jungen akzeptieren, haben sich zahlreiche raffinierte Anpassungen entwickelt. Nach der Brutperiode ziehen die Jungkuckucke allein und ohne jegliche Hilfe in das Winterquartier – ein bemerkenswertes Beispiel für den angeborenen Orientierungssinn der Vögel.', 'Europa, Sibirien bis Kamtschatka und Japan; überwintert in Südafrika', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3040_0.jpg', 12, 120, 'Cuculus canorus', 33, 'Insekten, Spinnen'),
(22, 'Nachtigall', 'Der kunst- und klangvolle Gesang der Nachtigall kommt am besten zur Geltung, wenn die Männchen in der nächtlichen Stille um die Wette singen. Sie locken damit Weibchen an, die mehrere Tage nach den Männchen aus den afrikanischen Winterquartieren zurückkehren. Nach der Verpaarung singen die Männchen nur noch tagsüber, vor allem um ihr Revier zu verteidigen. Die Nachtigall lebt heimlich und ist trotz des auffälligen Gesangs nicht einfach zu entdecken. Menschen waren wohl schon immer von ihrem Gesang fasziniert. Doch mancherorts sind die Nächte gezählt, in denen der Nachtigallengesang einem den Schlaf raubt.', 'Westeuropa, Nordafrika, Kleinasien', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4020_0.jpg', 8, 22, 'Luscinia megarhynchos', 16, 'Insekten, Spinnen'),
(23, 'Trauerschnäpper', 'Bis zu Beginn des 20. Jahrhunderts galt der Trauerschnäpper in der Schweiz als recht seltener Brutvogel. Danach setzte eine starke Zunahme ein, die unter anderem durch das Aufhängen von Nistkästen begünstigt wurde. Die älteren Männchen kommen meist vor den jüngeren und den Weibchen an und besetzen anfänglich oft mehrere Nistplätze. Das Weibchen wählt ein Männchen mit einer Nisthöhle aus, wobei die Qualität des Brutplatzes entscheidend ist. Viele Männchen versuchen in einem zweiten Revier, ein weiteres Weibchen anzulocken.', 'Britische Inseln und Nordeuropa bis West-Sibirien', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4860_0.jpg', 9, 12, 'Ficedula hypoleuca', 12, 'Insekten, Spinnen'),
(24, 'Gartenrotschwanz', 'Der Gartenrotschwanz ist einer unserer prächtigsten Singvögel und meist leicht zu beobachten. Seit den Sechzigerjahren hat er besonders in den Niederungen viel Terrain eingebüsst. Vielerorts sind in den verbliebenen Obstbaugebieten nur noch einzelne Männchen mit ihrem wehmütig tönenden Gesang anzutreffen. Der Gartenrotschwanz ist ein Langstreckenzieher und verbringt die Hälfte des Jahres in Nachbarschaft exotischer Vogelarten in der Sahelzone.', 'Europa und Nordafrika bis Zentralasien', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4070_0.jpg', 8, 16, 'Phoenicurus phoenicurus', 14, 'Insekten, Spinnen'),
(25, 'Mauersegler', 'Kaum ein Vogel ist besser an das Leben in der Luft angepasst als der Mauersegler. Der ausgezeichnete Flugjäger sieht einer Schwalbe ähnlich, fliegt aber rasanter. Im Flug schläft er und paart sich auch. Bei den abends aufsteigenden Mauerseglern dachte man früher, dass sie in der Dunkelheit zurückkehrten oder die Nacht auf dem Mond verbrächten. Der Baselbieter Ornithologe Emil Weitnauer studierte das Nachtleben der «Spyren» bis in alle Einzelheiten, zuerst per Ballon und Flugzeug und mit starken Scheinwerfern, später mit Radartechnik.', 'Westpaläarktis östlich bis zum Baikalsee und Iran', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3270_0.jpg', 21, 42, 'Apus apus', 16, 'Insekten, Spinnen'),
(26, 'Teichrohrsänger', 'Kaum ein Schilfgebiet ist zu klein für den Teichrohrsänger. Er ist bestens an das Leben in diesem gleichförmigen Lebensraum angepasst und klettert mit seinem schlanken Körper geschickt durchs Pflanzengewirr. Der Teichrohrsänger hat die Angewohnheit, auf einem Schilfhalm hinauf und herunter zu rutschen und von Stängel zu Stängel zu hüpfen. In dicht besiedelten Röhrichtflächen kann es in der Morgen- und Abenddämmerung zu einem regelrechten Chorgesang kommen.', 'Europa (ausser Iberische Halbinsel)', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4460_0.jpg', 10, 12, 'Acrocephalus scirpaceus', 13, 'Insekten'),
(27, 'Baumfalke', 'Mit seinem eleganten Körper und seinen sichelförmigen Flügeln erinnert der Baumfalke oft an einen übergrossen Mauersegler, dessen Flugkünsten er in nichts nachsteht. Er ist ein sehr gewandter Luftjäger: Im rasanten Sturzflug stösst er auf fliegende Vögel, überrascht die Beute im niedrigen Jagdflug oder erbeutet spielend Grossinsekten, die er gleich im Flug «zubereitet» und verzehrt.', 'Paläarktis', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/1430_0.jpg', 9, 230, 'Falco subbuteo', 33, 'Insekten, Vögel'),
(28, 'Braunkehlchen', 'Als typischer Wiesenvogel bewohnt das Braunkehlchen blumenreiche, vielfältige und extensiv genutzte Wiesen. Für das Brutgeschäft benötigt es etwas mehr als einen Monat. Doch soviel Zeit bleibt ihm in intensiv genutzten Wiesen nicht, die Bodennester werden regelmässig vermäht. Im Mittelland ist der «Wiesenschmätzer» daher heute praktisch verschwunden. Auch in den Bergen kommt er in Bedrängnis.', 'Westlichepaläarktis', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4090_0.jpg', 6, 20, 'Saxicola rubetra', 13, 'Insekten, Spinnen'),
(29, 'Grauschnäpper', 'Der Grauschnäpper hat eine unscheinbare Färbung und Stimme, weshalb er im Garten oft nicht bemerkt wird. Er sitzt gerne auf einer exponierten Warte und stürzt sich plötzlich in die Luft, um die erspähten Fliegen und anderen Fluginsekten zu erhaschen. Oft muss sich der Grauschnäpper im Flug geschickt drehen und wenden, dann schnappt sein Schnabel hörbar zu. Nur zwischen Mai und September ist dieses Schauspiel bei uns zu sehen, dann verschwinden die Vögel wieder Richtung Afrika.', 'Europa bis Nordafrika, Sibirien und Kleinasien', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/4840_0.jpg', 10, 15, 'Muscicapa striata', 14, 'Insekten, Spinnen'),
(30, 'Pirol', 'Die nächsten Verwandten des exotisch aussehenden Pirols leben in den Tropen in Afrika und Asien. Trotz seines auffälligen gelbschwarzen Gefieders ist er in den lichtdurchfluteten Baumkronen wegen seiner versteckten Lebensweise nicht leicht zu entdecken. Am einfachsten ist er anhand des wohlklingenden Gesangs nachzuweisen. Den Flötenrufen verdankt der Pirol neben dem deutschen Artnamen und der wissenschaftlichen Bezeichnung Oriolus auch den französischen Namen «Loriot». Oft wird der Gesang allerdings vom Star treffend ähnlich nachgeahmt. Der Pirol hält sich im eigentlichen Brutgebiet nur drei Monate auf, bevor er wieder in die Winterquartiere aufbricht.', 'Westpaläarktis bis Ostsibirien', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3660_0.jpg', 7, 66, 'Oriolus oriolus', 23, 'Früchte, Insekten, Spinnen'),
(31, 'Turteltaube', 'Das ausdauernde Gurren der Turteltaube, das in der Schweiz besonders in den klimatisch milderen Gebieten zu hören ist, hat die Menschen schon in der Antike beeindruckt, wie verschiedene Aufzeichnungen belegen. Lautmalerisch ist neben dem deutschen auch der wissenschaftliche Artname. Als einzige unserer Taubenarten überwintert die Turteltaube südlich der Sahara. In mediterranen Ländern ist sie ein beliebtes Jagdwild, und Hunderttausende fallen alljährlich der Jagd zum Opfer.', 'Azoren, Kanarische Inseln und Europa bis West-Sibirien und Kasachstan', 'https://www.vogelwarte.ch/wp-content/assets/images/bird/artbilder/700px/3000_0.jpg', 21, 140, 'Streptopelia turtur', 27, 'Samen');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `vogel`
--
ALTER TABLE `vogel`
  ADD PRIMARY KEY (`vgl_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `vogel`
--
ALTER TABLE `vogel`
  MODIFY `vgl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<TITLE>Clément & Mike - Recheche d'Apparts (P16)</TITLE>
<style>
body {
	text-align: center;
	font-family: Arial;
}

h1 {
	margin-bottom: 30px;
}

table {
	width: 90%;
	margin: auto;
}

table td:first-child {
	width: 25%;
	text-align: left;
	text-decoration: underline;
}

table td:nth-child(2) {
	padding-left: 15px;
	text-align: justify;
}
</style>
</head>

<body>
	<h1>Recherche de Colocs sur Antibes (P2016)</h1>
	<h2>Logements sur Antibes</h2>
	<?php
	$links = array(
		array(
			"link" => "http://www.appartager.com/colocation-cannes/deux-chambres-a-louer-600-euros-par-chambre/h141110101723825",
			"title" => "deux chambres à louer 600 euros par chambre",
			"contact" => "contacté par Mike",
			"ownerDetails" => "colpin (04.93.67.26.26 (agence Immo 2000) ou 06.77.04.92.91 (téléphone personnel) pour convenir d'une date pour la visite avec M. James CAROUE)",
			"surfaceArea" => "Non renseigné (chelou ...)",
			"descr" => "Appartement entiètement refait en 2013.<br/>
			2 chambres \"double\", meublé, TV, Wifi, 1 salle de bain, terrasse, balcon et cuisine équipée.<br/>
			\"Possibilité de 9 couchages\"",
			"billPerMonth" => "600€ par chambre",
			"startDate" => "09 décembre 2015 (date de l'annonce)",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "TV, Wifi, cuisine équipée",
			"numberOfParkings" => "Une seule place de parking attribuée, \"mais d'autres places sans emplacement\"",
			"comments" => "<b>Mike</b> - \"Le fait que la superficie ne soit pas indiquée rend l'annonce super louche ...<br/>
			Il n'y a pas non plus d'informations en ce qui concerne les commerces proches, ni les transports.<br/>
			MAIS, il y a de la WiFI et une TV ! =D\"<br/>
			<b>Clement</b> - \"Il faut vérifier le nombre de places de parking et que tout est bien inclus pour 600 euros car c'est déjà cher"
		), array(
			"link" => "http://www.appartager.com/colocation-cannes/tres-beau-3-pieces-plein-centre-de-juan/h151207113158560",
			"title" => "Très beau 3 pièces plein centre de Juan - Juan-les-Pins",
			"contact" => "contacté par Mike (appelé le 29/12/2015)",
			"ownerDetails" => "Maxime (06.19.30.67.12)", // (ou 07.68.30.78.70)
			"surfaceArea" => "51-52m²",
			"descr" => "Appartement situé en plein coeur de Juan les Pins.<br/>
			Appartement \"entièrement meublé\" au 3ème étage, à 150m de la plage et à proximité des commerces et des bus pour Sophia-Antipolis/Cannes/Nice.<br/>
			L'immeuble (bourgeois) est doté d'un ascenseur.<br/>
			Pour compenser l'absence de machine à laver, une laverie est accessible à moins de 50m de l'immeuble.",
			"billPerMonth" => "500€ (550€ charges comprises)",
			"startDate" => "1er janvier 2016",
			"endDate" => "fin juin 2016",
			"numberOfRooms" => 3,
			"furniture" => "Oui : TV, wifi, sèche-linge mécanique",
			"numberOfParkings" => "Non renseigné",
			"comments" => "<b>Mike</b> - \"Il a l'air vraiment pas mal.<br/>
			Seul petit hic : la fin en juin 2016, mais je pense que je vais quand même le contacter :-)\"<br/>
			\"Le proprio est en vacs aux Philippines actuellement, du coup, c'est sa mère (en Bretagne) qui s'occupe de l'affaire jusqu'à son retour (le 15 janvier 2016).<br/>
			Elle est OK pour faire en sorte que la visite ait lieu en début janvier 2016.<br/>
			En ce qui concerne les chambres, une est plus grande que l'autre (lit de 160 pour la 1ère, lit de 140 pour l'autre).<br/>
			Il ne devrait pas y avoir de souci pour prolonger le contrat jusqu'à mi-juillet, à confirmer pour le prolongement jusqu'à fin juillet.\""
		), array(
			"link" => "http://www.leboncoin.fr/locations/900429640.htm?ca=21_s",
			"title" => "3P Bas de villa avec jardin centre Antibes",
			"contact" => "contacté par Clément (réponse obtenue)",
			"ownerDetails" => "Elisa BOCCALINI <elisetta81@hotmail.com> (06.15.38.30.58)",
			"surfaceArea" => "65 ou 68m²",
			"descr" => "Appartement au RDC d'une villa avec un grand jardin privatif en plein centre-ville
			d'Antibes.<br/>
			Situé à proximité des plages d'Antibes et de Juan les Pins.",
			"billPerMonth" => "1090€",
			"startDate" => "Janvier 2016",
			"endDate" => "Fin juin 2016 (pas de disponibilité pour l'été)",
			"numberOfRooms" => 3,
			"furniture" => "Pas vraiment renseigné (penderie, douche, WC)",
			"numberOfParkings" => "2 places pour des voitures (cf email)",
			"comments" => "<b>Mike</b> - \"Pas vraiment d'informations en ce qui concerne les transports à proximité.<br/>
			Manque de photos, notamment pour les chambres et l'intérieur.<br/>
			Pas de détails explicites sur les charges (WiFi ?)\"<br/>
			\"Suite à ton email, elle a répondu qu'elle était en vacs jusqu'au 4 janvier, date à partir de laquelle elle pourra nous envoyer des photos.\""
		), array(
			"link" => "http://www.leboncoin.fr/colocations/898730529.htm?ca=21_s",
			"title" => "Appartement pour etudiant ou 2 colocations",
			"contact" => "contacté par Clément (réponse eue)",
			"ownerDetails" => "Francis BOURE (armor22) (06.14.79.33.37)",
			"surfaceArea" => "44m²",
			"descr" => "Appartement au 2è étage, sans ascenseur.<br/>
			2 chambres de 12m² chacune, une ayant pour lit un canapé BZ.",
			"billPerMonth" => "650€",
			"startDate" => "Non renseignée",
			"endDate" => "",
			"numberOfRooms" => "\"3\"",
			"furniture" => "Oui : plaques électriques, four, armoire, congélo, micro-ondes, machine à laver",
			"numberOfParkings" => "Non renseigné",
			"comments" => "<b>Clément</b> - \"2 vraies chambres, pas très cher ! photos en pièce jointe<br/>
			Electricité non incluse dans le loyer indiqué<br/>
			Gare, commerces et activités à proximité\"<br/>
			<b>Mike</b> - \"Pas de contrat internet inclu.\""
		), array(
			"link" => "http://www.leboncoin.fr/locations/891018764.htm?ca=21_s",
			"title" => "Location 3 pièces meublé Antibes centre",
			"contact" => "contacté par Mike",
			"ownerDetails" => "Honda caf 125",
			"surfaceArea" => "65m²",
			"descr" => "Situé à 100m de la mer, \"proche de toutes commodités\".<br/>
			1 chambre avec un lit double, l'autre avec 2 lits simples.",
			"billPerMonth" => "1050€ (1150€ charges comprises)",
			"startDate" => "fin décembre 2015",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "Oui, mais aucune information",
			"numberOfParkings" => "Non renseigné",
			"comments" => "<b>Mike</b> - \"Pas chaud à cause du cas 2 lits simples pour l'une des chambres : du coup, je pense
			que le loyer n'est pas approprié.\""
		), array(
			"link" => "http://www.leboncoin.fr/locations/890503299.htm?ca=21_s",
			"title" => "Location 3 pieces meublé vieille ville",
			"contact" => "contacté par Clément",
			"ownerDetails" => "clotildeBerten",
			"surfaceArea" => "59m²",
			"descr" => "Appartement situé au dernier étage (3ème) d'un immeuble sans ascenseur.<br/>
			Logement siué à 10mn du port, des bus, de la gare SNCF et de la plage.<br/>
			Commerces et restos au pied de l'immeuble.<br/>
			Internet avec connexion haut débit.",
			"billPerMonth" => "950€ (1050€ toutes charges comprises)",
			"startDate" => "Non renseignée",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "Oui : TV écran plat, four, micro-ondes, lave-vaisselle",
			"numberOfParkings" => "\"Pas de garage ... parking dans la rue si véhicule, difficile le jeudi et vendredi soir, pas la semaine, possibilité d'aller se garer chez le propriétaire.\"",
			"comments" => "<b>Mike</b> - \"Celui-ci me convient aussi, mais je veux voir la gueule de l'autre chambre O:-)
			<br/>Le plus important ... IL Y A UNE TV SI ON VEUT SE FAIRE UNE COLOC' SUPER COOL AVEC DES
			SOIREES CALL OF ! =D\"<br/>
			<b>Clément</b> - \"les deux chambres font 9m2 avec 1 lit 140x190 et un armoire penderie.\""
		), array(
			"link" => "http://www.leboncoin.fr/colocations/896761417.htm?ca=21_s",
			"title" => "Vue imprenable sur les îles de Lérins",
			"contact" => "contacté par Clement, appelé le 26/12/2015 par Clément, mail pour photos envoyé le 05/01",
			"ownerDetails" => "auré",
			"surfaceArea" => "65m²",
			"descr" => "Appartement lumineux situé au 3ème et dernier étage d'un immeuble d'une résidence
			sécurisée, pas d'ascenseur. Une chambre déjà prise, mais un autre logement à 5 minutes avec là aussi une place, où la propriétaire vit. Elle est jeune et sympa on dirait.<br/>
			Deux chambres avec lit double, l'une donnant sur la Loggia, l'autre sur le balcon.<br/>
			Terrasse avec vue sur mer exposée plein sud.",
			"billPerMonth" => "475€, hors charge apparemment, à voir la valeur des charges (eau + elec)",
			"startDate" => "janvier ou février 2016",
			"endDate" => "mi-juillet puis mis en agance mais tjs disponible, pas de location d'été spécifique",
			"numberOfRooms" => 3,
			"furniture" => "Oui : TV et internet",
			"numberOfParkings" => "Place de parking dans un parc arboré et sécurisé",
			"comments" => "<b>Mike</b> - \"Ca a l'air pas mal du tout, reste à voir la gueule des chambres :-P\"<br/>
			<b>Clément</b> - \"la recontacter le 2 janvier pour les photos des chambres et donner des nouvelles<br/>
			Stora Bour, une seule chambre et une autre à 5 minute chez elle, très bien sinon !\""
		), array(
			"link" => "http://www.pap.fr/annonce/location-appartement-loft-atelier-maison-residence-avec-service-antibes-06-g8853-a-partir-du-2-pieces-r403901233",
			"title" => "Location meublée appartement 3 pièces 73 m² Antibes (06)",
			"contact" => "contacté par Mike",
			"ownerDetails" => "06 37 31 59 16",
			"surfaceArea" => "73m²",
			"descr" => "Appartement avec belle vue sur mer et montagne.<br/>
			Le logement est composé d'une entrée, d'un séjour avec loggia, 2 chambres avec balcon et armoires ainsi
			que d'une pièce avec fenêtre servant de buanderie.<br/>
			Appartement dans une résidence sécurisée.",
			"billPerMonth" => "1175€",
			"startDate" => "Non renseignée",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "micro-ondes, frigo-congélo, cuisinière mixte (3 plaques gaz et 1 électrique), lave-linge",
			"numberOfParkings" => "\"Parking privé\"",
			"comments" => "<b>Mike</b> - \"Aucune info sur la connexion internet et sur les transports à proximité.\"<br\>
			<b>Clement</b> - \"lumineux, cuisine et sbd vieille, un peu cher\""
		), array(
			"link" => "http://www.appartager.com/colocation-cannes/colocation-loft-vieil-antibes/h141211134443509",
			"title" => "Colocation Loft Vieil Antibes",
			"contact" => "contacté par Mike",
			"ownerDetails" => "Audrey & Julien GALLINA <loft16vauban@gmail.com> (réponse eue le 18 décembre, répondu le 26 décembre en lui donnant comme date de départ du logement \"fin juillet 2016\")",
			"surfaceArea" => "70m²",
			"descr" => "Appartement contemporain climatisé dans un vieil immeuble d'Antibes, situé \"16 rue Vauban\".<br/>
			Les deux chambres ont un lit double.<br/>
			Il y a un salon avec 2 canapés et un bureau.<br/>
			L'appart' est situé à 1mn à pied de la gare routière, à 3mn de la gare SNCF et moyens de transport accessibles pour aller à Sophia, Nice et Cannes.<br/>
			La caution de 500€ est encaissable et l'allocation logement peut être fournie sur demande.",
			"billPerMonth" => "550€ (650€ charges comprises)",
			"startDate" => "1er janvier 2016",
			"endDate" => "Mai 2016",
			"numberOfRooms" => 3,
			"furniture" => "TV par câble, linge pour les chambres (couette, draps, coussins, protection matelas), cuisine équipée,
			lave-vaisselle, four, micro-ondes, lave-linge, aspirateur, fer à repasser",
			"numberOfParkings" => "\"Parking privé\"",
			"comments" => "<b>Mike</b> - \"Franchement, il a l'air top ! Espérons qu'il soit encore dispo ^^\"<br/>
			<b>Clément</b> - \"Cher ^^ La taxe d'habitation doit normalement être payée au pire des cas.<br/>
			Sinon, très bien :-)\""
		), array(
			"link" => "https://fr-fr.roomlala.com/colocation/FR-France/antibes/antibes-cente-ville-ideal-etudiants-116964-fr",
			"title" => "Antibes cente ville idéal étudiants",
			"contact" => "contacté par Mike",
			"ownerDetails" => "Unknown (en attente de réponse)",
			"surfaceArea" => "\"+ de 20m²\"",
			"descr" => "Appartement avec 3 chambres, chacune avec fenêtre et armoire, situé en centre-ville.<br/>
			Il y a 2 lits simples et 3 lits doubles, et la capacité est bien de 3 personnes.<br/>
			Les transports en commun sont situés à moins de 200m.",
			"billPerMonth" => "1450€",
			"startDate" => "1er janvier 2016",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 4,
			"furniture" => "Lave-vaisselle, machine à laver, internet, sèche-linge",
			"numberOfParkings" => "Garage",
			"comments" => "<b>Mike</b> - \"Il faudrait une photo des chambres.<br/>
			Malheureusement, celui-ci n'a pas de télé, mais niveau meublement, il y a ce qu'il faut ;-)<br/>
			PS : la photo de la salle de bain donne pas trop envie en revanche ... #glauque\"<br/>
			<b>Clement</b> - \"Ca va la salle de bain franchement\""
		), array(
			"link" => "http://www.pap.fr/annonce/location-appartement-loft-atelier-maison-residence-avec-service-antibes-06-g8853-a-partir-du-2-pieces-r409300373",
			"title" => "Location meublée appartement 3 pièces 59 m² Antibes (06)",
			"contact" => "appelé le 05/01 par Clément, signature demain avec quelqu'un, me rappelle si tjs dispo",
			"ownerDetails" => "06 74 78 59 93",
			"surfaceArea" => "59m²",
			"descr" => "Appartement rez de jardin à loué meublé. Situé à 10 min de Cannes et de Nice. <br/>
			5 min de Sophia Antipolis et du centre ville. Proche tous commerces. Résidence calme et fermée.<br/>
			Exposition plein sud et jardin sans vis-à-vis. <br/>
			Grande pièce à vivre avec cuisine équipée et salon lumineux. Composée de 2 chambres et d'une grande salle de bains. <br/>
			Terrasse et jardin de 100m2. Chauffage individuel électrique.",
			"billPerMonth" => "500€, charges comprises",
			"startDate" => "1er janvier 2016",
			"endDate" => "fin août 2016",
			"numberOfRooms" => 3,
			"furniture" => "Wifi, TV ?",
			"numberOfParkings" => "une place dans la résidence",
			"comments" => "<b>Clement</b> - \"\""
		), array(
			"link" => "http://www.leboncoin.fr/colocations/898184439.htm",
			"title" => "Je cherche 2 collocataires",
			"contact" => "contact mail le 05/01 avec réponse, photos dans le mail, skype : marco.manghisi",
			"ownerDetails" => "",
			"surfaceArea" => "75m², avec un 3ème colocataire, une chambre 15m², l'autre 10m²",
			"descr" => "appartement dans le centre de Juan les Pins.",							
			"billPerMonth" => "550 et 650, charges comprises",
			"startDate" => "",
			"endDate" => "",
			"numberOfRooms" => 4,
			"furniture" => "Wifi, TV",
			"numberOfParkings" => "place extérieures, dispo en principe",
			"comments" => "<b>Clement</b> - \"un peu cher, à voir les photos, mais tout neuf et clean\""
		), array(
			"link" => "https://fr-fr.roomlala.com/location-vacance/FR-France/antibes/3p-en-rez-de-jardin-entierement-refait-a-louer-96016-fr?popup_dmer&group_track=register_tenant_ok",
			"title" => "3P en rez-de-jardin entièrement refait à louer",
			"contact" => "Clément mail par roomlala le 06/01",
			"ownerDetails" => "",
			"surfaceArea" => "60m²",
			"descr" => "3 pièces tout confort à l'arrière d'une maison en centre-ville. Calme, idéal pour famille avec bébés. Tout l'équipement est disponible. Linge gratuit à la demande.",							
			"billPerMonth" => "749",
			"startDate" => "",
			"endDate" => "",
			"numberOfRooms" => 3,
			"furniture" => "",
			"numberOfParkings" => "",
			"comments" => "<b>Clement</b> - \"Ecrit max 3 mois, à vérifier avec le proprio\""
		), array(
			"link" => "http://www.leboncoin.fr/colocations/903594451.htm?ca=21_s",
			"title" => "Magnifique appartement de 4 pièces de 120m²",
			"contact" => "Clément téléphone le 06/01, message laissé",
			"ownerDetails" => "06.09.83.01.21.",
			"surfaceArea" => "120m²",
			"descr" => "Nous vous proposons un magnifique appartement de 4 pièces de 120m² situé au deuxième et dernier étage, entièrement refait à neuf. Tout équipé.<br\>
			Idéalement situé au 1 avenue de l'Estérel, en plein centre ville à 1 mn de la gare et 3 mn de la plage.",							
			"billPerMonth" => "600/pers pour 3, 900 chacun à 2",
			"startDate" => "janvier",
			"endDate" => "fin juin, déjà loué en juillet",
			"numberOfRooms" => 4,
			"furniture" => "Wifi, TV",
			"numberOfParkings" => "Places de parking publiques gratuit disponibles proches de l'appartement.",
			"comments" => "<b>Clement</b> - \"\""
		), array(
			"link" => "http://www.leboncoin.fr/colocations/899633412.htm?ca=21_s",
			"title" => "Bel appt JUAN LESPINS 51M2(2étudiants)500E P/PERS",
			"contact" => "Clément mail le 06/01",
			"ownerDetails" => "",
			"surfaceArea" => "51m²",
			"descr" => "",							
			"billPerMonth" => "500",
			"startDate" => "",
			"endDate" => "fin juin",
			"numberOfRooms" => 3,
			"furniture" => "",
			"numberOfParkings" => "",
			"comments" => "<b>Clement</b> - \"Met fin juin, je vais voir si on peut prolonger un peu\""
		)/*, array( // déjà loué
		 	"link" => "http://www.leboncoin.fr/locations/897192339.htm?ca=21_s",
			"title" => "3 pièces rénové au dernier étage avec vue sur mer",
			"surfaceArea" => "63m²",
			"descr" => "Résidence calme, à 10mn à pied de la plage de Juan les Pins et de la gare",
			"billPerMonth" => "1100€ en tout",
			"startDate" => "1er février 2016",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "Oui, reste à savoir quoi",
			"numberOfParkings" => 2,
			"comments" => "Aucune info sur les meubles<br/>
			Déterminer s'il y a un ascenseur"
		), array( // déjà loué
			"link" => "http://www.leboncoin.fr/colocations/881273416.htm?ca=21_s",
			"title" => "Cherche 2 colocs dans grand appartement à Antibes",
			"contact" => "contacté par Clement",
			"ownerDetails" => "Rémi BOYER (06.40.12.46.51)",
			"surfaceArea" => "85m²",
			"descr" => "Appartement avec 3 chambres.<br/>
			Inclus lave-linge et aspirateur, colocataire déjà présent qui est musicien et apparemment bon cuistot.<br/>
			Plage et gare à 5mn de marche<br/>
			Supermarché et bus pour Sophia-Antipolis à 3mn à pied",
			"billPerMonth" => "1 grande chambre pour 460€, une chambre de taille moyenne pour 425€",
			"startDate" => "Non renseignée (annonnce publiée le 16 décembre)",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 5,
			"furniture" => "Oui : micro-ondes, plaques chauffantes, congélateur, réfrigérateur",
			"numberOfParkings" => "Non renseigné",
			"comments" => "<b>Mike</b> - \"Pas de télé en vue d'après la description, mais WiFi déjà inclu<br/>
			Reste également à déterminer s'il y a un ascenseur\"<br/>
			\"Une chambre avec lit double (460e), et l'autre, \"lit\", à enquêter ...\""
		), array( // désactivé, donc surement déjà loué
			"link" => "http://www.leboncoin.fr/locations/896613354.htm?ca=21_s",
			"title" => "Appartement 3 pièces meublé",
			"contact" => "",
			"surfaceArea" => "59m²",
			"descr" => "Appartement dans une résidence fermée, jardin et terrasse occupant 100m²<br/>
			Charges comprises (dont électricité et internet)",
			"billPerMonth" => "1000€",
			"startDate" => "1er février 2016",
			"endDate" => "31 août 2016",
			"numberOfRooms" => 3,
			"furniture" => "Oui : d'après les photos, frigo, cuisine bien équipée",
			"numberOfParkings" => 1,
			"comments" => "Le lit de la chambre en photo n'a pas l'air ouf ^^<br/>
			Il faudrait demander ce qui est accessible à pied, parce que perso, je comprends qu'il faut
			nécessairement une voiture :/"
		), array( // Coloc' déjà prise
			"link" => "http://www.leboncoin.fr/colocations/888213197.htm?ca=21_s",
			"title" => "Appartement 3 pièces",
			"surfaceArea" => "40m²",
			"descr" => "Petit 3 pièces avec jardin dans une résidence sécurisée.<br/>
			2 chambres séparées avec un salon et une cuisine indépendante.<br/>
			Terrasse couverte de 12m².<br/>
			Arrêt de bus devant la résidence et commerces proches.<br/>
			À 10mn de Sophia-Antipolis",
			"billPerMonth" => "850€",
			"startDate" => "Mi-décembre 2015",
			"endDate" => "Non renseigné",
			"numberOfRooms" => "\"3\"",
			"furniture" => "Non renseigné",
			"numberOfParkings" => "Non renseigné",
			"comments" => "La superficie me fane un peu ...<br/>
			\"À 10mn de Sophia-Antipolis\" : euuhh, en caisse ou à pied ? x)"
		), array( // Bernard JULIAN
			"link" => "http://www.leboncoin.fr/colocations/895807611.htm?ca=21_s",
			"title" => "Colocation dans appartement sous toit",
			"surfaceArea" => "110m²",
			"descr" => "Grande terrasse de 50m², balcon de 20m², 1 chambre de 12m² avec 2 armoires et 1
			chambre de 20m² avec armoire et 2 placards dans le mur.<br/>",
			"billPerMonth" => "400€ pour la 12m², 500€ pour la 20m²",
			"startDate" => "Non renseigné (annonce publiée le 11 décembre 2015)",
			"endDate" => "Non renseigné",
			"numberOfRooms" => "4",
			"furniture" => "Oui : Télé et climatisation",
			"numberOfParkings" => "Non renseigné",
			"comments" => "Photos des chambres à avoir.<br/>
			\"coin nuit pour court séjour avec lit électrique et matelas neuf\" ? euuuhhh ..."
		), array( // annonce désactivée
			"link" => "http://www.leboncoin.fr/locations/895383584.htm?ca=21_s",
			"title" => "Appartement 3 pièces - Antibes",
			"contact" => "contacté par Clément",
			"surfaceArea" => "65m²",
			"descr" => "Appartement 3 pièces meublé à louer route de Grasse.",
			"billPerMonth" => "900€",
			"startDate" => "10 décembre 2015 (date de publication de l'annonce)",
			"endDate" => "Non renseignée",
			"numberOfRooms" => "3",
			"furniture" => "D'après les 3 photos, oui",
			"numberOfParkings" => "Non renseigné",
			"comments" => "Pas de photos des chambres.<br/>
			2 mois de caution exigés : euuuhh, ça refroidit un peu qd mm ... ^^<br/>
			Aucune info sur les transports à proximité, ni les commerces alentours ..."
		), array( //déjà loué
			"link" => "http://www.leboncoin.fr/locations/891777501.htm?ca=21_s",
			"title" => "Appartement 4 pièces",
			"contact" => "contacté par Clement",
			"surfaceArea" => "70m²",
			"descr" => "Appartement en centre ville avec jardin",
			"billPerMonth" => "900€",
			"startDate" => "19 décembre 2015",
			"endDate" => "30 juin 2016",
			"numberOfRooms" => 4,
			"furniture" => "Oui : cuisine équipée",
			"numberOfParkings" => "Non renseigné",
			"comments" => "Aucune photo ...<br/>
			Aucune information sur le WiFi, ni sur les transports ..."
		), array( // proprio trop chiante, 3 ans, sur le long terme, pas pour nous 
			// en gros c'est une vieille d'où l'apprt vieux
			// elle cherche au moins 3 ans
			// elle demande genre 12 mois d'avance ^^
			//une casse couille, le gars était blazé :p
			"link" => "http://www.leboncoin.fr/locations/889138357.htm?ca=21_s",
			"title" => "3P centre ville",
			"contact" => "contacté par Clément, appelé le 05/01, impossible, en revanche il me rappelle s'il a qqch",
			"ownerDetails" => "RIVIERA FONCIER (agence immo) (04.93.67.36.31)",
			"surfaceArea" => "70m²",
			"descr" => "Offre publiée par l'agence immo' Riviera Foncier, appartement à proximité des plages
			de Juan les Pins et du centre ville d'Antibes.",
			"billPerMonth" => "900€",
			"startDate" => "Non renseignée",
			"endDate" => "Non renseignée",
			"numberOfRooms" => "3",
			"furniture" => "Oui (\"cuisine entièrement équipée\")",
			"numberOfParkings" => "\"Garage fermé en sous sol\"",
			"comments" => "<b>Mike</b> - \"Pas d'info sur les transports vers Sophia.<br/>
			Aucune info sur le WiFi et le meublement (TV ?).<br/>
			Le fait que le salon soit fat permettra de bien recevoir des invités lorsqu'on fera des
			soirées ;-)<br/>
			On ne sait pas non plus s'il y a un ascenseur (le 4è étage, frère ...)\""
		), array( // loué
			"link" => "http://www.leboncoin.fr/locations/887527063.htm?ca=21_s",
			"title" => "Proximité entrée autoroute et Sophia- Antipolis",
			"contact" => "contacté par Clement",
			"surfaceArea" => "64m²",
			"descr" => "Appartement \"totalement rénové\" au RDC d'une villa",
			"billPerMonth" => "950€",
			"startDate" => "Non renseignée",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "Oui : four, lave-linge, réfrigérateur, plaque, hotte",
			"numberOfParkings" => "Non renseigné",
			"comments" => "Il y a une chambre avec deux lits séparés par une table de chevet qui donne pas
			trop envie ^^ ...<br/>
			Pas d'information sur le Wifi.<br/>
			Vu qu'il n'y a que l'autoroute de mentionée pour les transports, je suppose qu'il faut
			nécessairement une tuture pour aller à Sophia ...<br/>
			Le chauffage n'est pas inclus, mais en été, on ne devrait pas avoir de souci ;-)"
		), array( // désactivé
			"link" => "http://www.leboncoin.fr/locations/881049533.htm?ca=21_s",
			"title" => "Location meublée vue mer etudiants Antibes -T3",
			"contact" => "contacté par Clement",
			"ownerDetails" => "Vincent",
			"surfaceArea" => "65m²",
			"descr" => "Appartement pas loin du port, du centre et des plages.<br/>
			Sophia Antipolis et Skema sont accessibles en bus (navettes Envibus) et en voiture.<br/>
			Internet illimité sous leur abonnement.",
			"billPerMonth" => "475€ par étudiant",
			"startDate" => "Non renseignée",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "Oui : TNT, machine à café, barbecue",
			"numberOfParkings" => "Stationnements libres",
			"comments" => "<b>Mike</b> - \"Pas mal ;-)<br/>
			Reste à voir les chambres et s'il y a une TV de disponible :-)\""
		), array( // annonce désactivée
			"link" => "http://www.leboncoin.fr/locations/880511940.htm?ca=21_s",
			"title" => "Appartement 3 pièces de 61m²",
			"contact" => "contacté par Clement",
			"surfaceArea" => "61m²",
			"descr" => "Appartement dans les hauteurs d'Antibes, dans une impasse.<br/>
			Inclus une salle de bain, un WC indépendant et un séjour de 20m² donnant sur une terrasse de
			12m² avec une vue dégagée sur la mer.",
			"billPerMonth" => "950€",
			"startDate" => "Non renseignée",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "Oui : chambres avec placard, cuisine indépendante équipée",
			"numberOfParkings" => "Parking privé",
			"comments" => "Honoraires de 793€ et 50€ de charges comprises : à voir comment sont gérées les
			choses ... ^^<br/>
			Il faut voir l'état des chambres ...<br/>
			Vu la localisation en hauteur, je me doute que ce n'est pas l'idéal pour les transports, et
			aucune info sur d'éventuels commerces aux alentours ..."
		), array( // une seule chambre restante
			"link" => "http://www.leboncoin.fr/colocations/894464292.htm?ca=21_s",
			"title" => "Colocation pour 2 personnes à Juan-les-Pins",
			"contact" => "contacté par Clément",
			"surfaceArea" => "52m²",
			"descr" => "Appartement bien meublé et équipé situé au 1er étage dans un immeuble avec
			ascenseur.<br/>
			APL possibles, le loyer incluant toutes les charges.<br/>
			L'appartement est situé dans un quartier animé, à proximité de la mer, des arrêts de bus et
			de la gare SNCF.
			<br/>N°6  rue Sainte Marguerite à Juan les Pins, parking public en face gratuit en hiver",
			"billPerMonth" => "450€ par personne",
			"startDate" => "1er janvier 2016",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "Oui : reste à savoir quoi",
			"numberOfParkings" => "Non renseigné",
			"comments" => "Il a l'air top =D <br/>
			Je pense qu'il faut demander pour la connexion Internet, sinon je suis plutôt chaud pour
			cet appartement ;-) il  ya une vieille télé, photos dans un mail"
		), array( // déjà loué
			"link" => "http://www.leboncoin.fr/locations/879006562.htm?ca=21_s",
			"title" => "Appartement 3P meublé, 75 M2, à louer jusqu'à Juin",
			"contact" => "contacté par Mike, appelé le 30/12/2015 mais répondeur, Clément le 05/01, répondeur, réponse par sms que déjà loué",
			"ownerDetails" => "Pierre-Yves (06.26.79.66.34)",
			"surfaceArea" => "75m²",
			"descr" => "Appartement meublé avec 2 grandes terrasses, piscine et tennis.<br/>
			Proche du centre-ville, le logement dispose également d'un box.",
			"billPerMonth" => "1090€",
			"startDate" => "Non renseignée",
			"endDate" => "\"juin 2016\"",
			"numberOfRooms" => 3,
			"furniture" => "Oui : lave-linge, lave-vaisselle, piscine, frigo, congélo, plaque de cuisson",
			"numberOfParkings" => "Non renseigné (\"box\")",
			"comments" => "<b>Mike</b> - \"La photo de la terrasse n'est pas ouf, mais le salon, avec sa luminosité, donne
			plutôt envie.<br/>
			Il faudrait voir les photos des chambres (pr changer x) ).<br/>
			Aucune information sur la connexion internet, ni sur les transports à proximité.\""
		), array( // déjà loué
			"link" => "http://www.leboncoin.fr/locations/897062992.htm?ca=21_s",
			"title" => "F3 meublé 70 m² à 5 mn des plages et du centre",
			"contact" => "contacté par Mike",
			"surfaceArea" => "70m²",
			"descr" => "Appartement situé au 4è étage (avec ascenseur) et noté \"3 étoiles\".<br/>
			L'appartement est comoposé de 2 chambres, un balcon donnant sur l'ouest, un grand salon, une
			buanderie, une salle de bain et un WC indépendant.<br/>
			Il est situé à 5mn à pied de la vieille ville et des plages.",
			"billPerMonth" => "1200€",
			"startDate" => "Non renseignée",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "\"Cuisine entièrement équipée",
			"numberOfParkings" => "\"Parking privé\"",
			"comments" => "Pas d'info sur le WiFi, ni sur les transports.<br/>
			Niveau meublement de l'appart', des infos supplémentaires seraient fort bienvenues ^^"
		), array( // Il ne reste plus qu'une seule chambre, donc bon ... ^^
			"link" => "http://www.leboncoin.fr/colocations/883844325.htm?ca=21_s",
			"title" => "Colocation rez villa Antibes - 3 étudiants - 500 €",
			"contact" => "contacté par Mike",
			"surfaceArea" => "90m²",
			"descr" => "Appartement doté de 3 chambres avec bureau.<br/>
			Villa avec vue sur mer, jardin et grande terrasse.",
			"billPerMonth" => "500€ (non-inclu : eau + EDF sur compteur individuel)",
			"startDate" => "4 janvier 2016",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 4,
			"furniture" => "Connexion internet, lave-linge, sèche-linge, congélo, frigo, plaque 4 feux,
			micro-ondes, lave-vaisselle et four + vaisselle et ustensiles",
			"numberOfParkings" => 3,
			"comments" => "Aucune info sur les transports à proximité ^^"
		), array( // n'existe plus, semble loué
			"link" => "http://www.pap.fr/annonce/location-appartement-loft-atelier-maison-residence-avec-service-antibes-06-g8853-a-partir-du-2-pieces-r409101312",
			"title" => "Location appartement 3 pièces 65 m² Antibes (06)",
			"contact" => "contacté par Mike",
			"ownerDetails" => "Unknown (en attente de réponse)",
			"surfaceArea" => "65m²",
			"descr" => "Appartement avec belle vue sur mer et montagne.<br/>
			Situé en centre-ville, le logement est proche de la gare SNCF, des bus et à 500m de la plage.<br/>
			L'appartement est au 4è étage, sans ascenseur.",
			"billPerMonth" => "930€",
			"startDate" => "Janvier 2016",
			"endDate" => "Juin 2016",
			"numberOfRooms" => 3,
			"furniture" => "Climatisation, TV",
			"numberOfParkings" => "Non renseigné",
			"comments" => "<b>Mike</b> - \"Aucune info sur la connexion internet.<br/>
			Il faut surtout savoir si l'offre est valide pour 2 étudiants ^^\""
		), array(// déjà loué
			"link" => "http://www.appartager.com/colocation-cannes/appartement-3p-meuble-vue-mer-antibes-juan-les-pins/h090510132330138",
			"title" => "appartement 3p meublé vue mer antibes juan les pins",
			"contact" => "contacté par Mike",
			"ownerDetails" => "Christophe (06.50.64.49.10)",
			"surfaceArea" => "Non renseignée",
			"descr" => "Appartement 3 pièces avec 2 chambres (1 avec lit double, l'autre 2 lits simples d'après les photos).<br/>
			Il y a une \"salle de bain privée\" et une terrasse/balcon.<br/>
			Le logement est situé en centre-ville, donc pas loin des commerces, et il y a une ligne de bus devant l'immeuble pour aller à Sophia.<br/>
			La plage de Juan les Pins est également à proximité.",
			"billPerMonth" => "500€ (550€ charges comprises)",
			"startDate" => "14 décembre 2015 (date de publication de l'annonce)",
			"endDate" => "Non renseignée",
			"numberOfRooms" => 3,
			"furniture" => "TV, cuisine équipée",
			"numberOfParkings" => "Non renseigné",
			"comments" => "<b>Mike</b> - \"La qualité des photos n'est pas ouf, mais la description est pas mal je trouve.<br/>
			Il y a une télé, mais pas d'info à propos d'une connexion internet ...<br/>
			L'annonce dit qu'il y a actuellement un colocataire, donc à confirmer pour la disponibilité des deux chambres :)\""
		), array( // déjà loué jusqu'à fin mai, j'ai eu la fille au téléphone
			"link" => "http://www.leboncoin.fr/colocations/891658319.htm?ca=21_s",
			"title" => "Appartement dans Villa",
			"contact" => "Clément téléphone le 06/01",
			"ownerDetails" => "",
			"surfaceArea" => "",
			"descr" => "",							
			"billPerMonth" => "500",
			"startDate" => "",
			"endDate" => "",
			"numberOfRooms" => 4,
			"furniture" => "",
			"numberOfParkings" => "",
			"comments" => ""
		)*/
	);

	foreach($links as $l) {
		echo '<h3><a href = "'.$l["link"].'" target = "_blank">'.$l["title"].'</a></h3>'; // title
		echo '<table border="0" style="margin: auto; text-align: justify;">
		<tr><td>Contact : </td><td>'.$l["contact"].'</td></tr>
		<tr><td>Contact du propriétaire : </td><td>'.$l["ownerDetails"].'</td></tr>
		<tr><td>Superficie : </td><td>'.$l["surfaceArea"].'</td></tr>
		<tr><td>Prix : </td><td>'.$l["billPerMonth"].'</td></tr>
		<tr><td>Nb Pièces : </td><td>'.$l["numberOfRooms"].'</td></tr>
		<tr><td>Description : </td><td>'.$l["descr"].'</td></tr>
		<tr><td>1ère date d\'emménagement possible : </td><td>'.$l["startDate"].'</td></tr>
		<tr><td>Date de départ obligatoire : </td><td>'.$l["endDate"].'</td></tr>
		<tr><td>Meublé : </td><td>'.$l["furniture"].'</td></tr>
		<tr><td>Parkings : </td><td>'.$l["numberOfParkings"].'</td></tr>
		<tr><td>Commentaires : </td><td>'.$l["comments"].'</td></tr>
		</table>';
	}
	?>
</body>
</html>

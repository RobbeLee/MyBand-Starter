-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2019 at 06:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myBand`
--

-- --------------------------------------------------------

--
-- Table structure for table `Calendar`
--

CREATE TABLE `Calendar` (
  `id` int(11) NOT NULL,
  `CalendarTitle` text NOT NULL,
  `CalenderText` text NOT NULL,
  `timesTitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Calendar`
--

INSERT INTO `Calendar` (`id`, `CalendarTitle`, `CalenderText`, `timesTitle`) VALUES
(1, 'Calendar', 'Hello there and welcome to the calender. Here you can find the streaming schedule and any upcoming live events. Enjoy!', 'Streaming Times');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `Slim` varchar(11) CHARACTER SET utf8 NOT NULL,
  `Boots` varchar(11) CHARACTER SET utf8 NOT NULL,
  `King` varchar(11) CHARACTER SET utf8 NOT NULL,
  `Judge` varchar(11) CHARACTER SET utf8 NOT NULL,
  `CopperBigcat` varchar(11) CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`Slim`, `Boots`, `King`, `Judge`, `CopperBigcat`, `id`) VALUES
('Slim', 'Boots', 'King', 'Judge', 'Copper and ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `Title` text CHARACTER SET utf8 NOT NULL,
  `Short` text CHARACTER SET utf8 NOT NULL,
  `LongD` text CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`Title`, `Short`, `LongD`, `id`) VALUES
('King', 'King;Lars;Cleric of the zeal domain;Human;Noble\r\n', 'King is the commander of the Chain. He hasn\'t been commander for long and before this he used to be the lieutenant for the former commander, but as they fell he became the commander. ', 1),
('Boots', 'Boots;Tom;Duellist Rogue;Human;unknown\r\n', 'Boots Is one of the senior officers of the Chain. <br> He has three retainers: Ox a dragonborn knight-sorcerer, Roach a half elf Exorcist and Worm a troubadour warrior. ', 2),
('Slim', 'D\'jeck the Impious or \"Slim\";Phil; Fighter;Githyanki;Soldier\r\n', 'Until recently Slim was a captive slave of the illithd mindflayers on the somnium tenebris. Then the Chain came along and they took over the ship and freed Slim. Slim, having nowhere to go, decided to join their ranks and soon became a senior officer. <br>\r\nSlim has one retainer and that is Angel, a Drow executioner.\r\n', 3),
('Judge', 'Judge;Anna;Illrigger;Tiefling;Noble\r\n', 'Judge is a tiefling illrigger, which is to say a former lord of the underworld. She is basically a paladin with Asmodeus as god. This is a rather rare occurance.<br>\r\nJudge has 5 retainers: Two Shoes who is an Justicar of unspecified race,  Flea a skinwalker, Buts a half elf conjurer, Cook a halfling Cutpruse and Toad an elvish beastloard.\r\n', 4),
('Copper', 'Copper;Tom;Beast Master;Goblin;Folk hero', 'Copper himself is not too imposing but on the back of bigcat, his enormous cat-like displacer beast, he is rather intimidating. <br> Because of the fact that he has bigcat, Copper has no retainers.', 5),
('Slim', 'D’jeck the Impious or “Slim”;Phil;Fighter;Githyanki;Soldier\r\n', 'Until recently Slim was a captive slave of the illithd mindflayers on the somnium tenebris. Then the Chain came along and they took over the ship and freed Slim. Slim, having nowhere to go, decided to join their ranks and soon became a senior officer. <br>\r\nSlim has one retainer and that is Angel, a Drow executioner.\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactTitle` text NOT NULL,
  `contactText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactTitle`, `contactText`) VALUES
('Contact', 'Want to talk to us about a problem, question or anything else? Feel free to fill in the form underneath and we will get back to you as soon as we can. Thanks!');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyTitle` text NOT NULL,
  `historyText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyTitle`, `historyText`) VALUES
('History', 'Hello there. Welcome to the story page, here you can find all the character details and an archive of the chronicle. You can find the chronicle here and the characters below. Enjoy!');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `WelcomeText` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`WelcomeText`) VALUES
('Welcome dear viewer! On this website you can find everything about the chain that’d you’d want to fi');

-- --------------------------------------------------------

--
-- Table structure for table `Story`
--

CREATE TABLE `Story` (
  `Title` text NOT NULL,
  `Post` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Story`
--

INSERT INTO `Story` (`Title`, `Post`, `id`) VALUES
('Red sky at morning', 'I\'m supposed to write about the fall of the Chain. About the rout. But all I see when I close my eyes is my friend dying. Probably have nightmares about it the rest of my life. I guess that\'s the good news. Life is short in the Chain.\r\nRed was the Commander to me long before he ever earned the rank. We were going to go to Rask, see the place he called home someday. The place he left behind. We both knew it was bullshit but...\r\nI watched Red, I was right there next to him, when Commander Trip died at Morning. After Xorn gutted him. Red picked up the Commander\'s sword and that was it. He had the standard in one hand and the dead Commander\'s sword in the other and now he was the Commander and everyone knew it. Red was a natural. \r\nRed was the one sponsored me into the Chain. He asked a lot of questions, questions I didn\'t want to answer. I thought the Chain was about leaving your past behind, I said so. He sort of... he laid it out. No past meant no loose ends. \"We got enough to worry about,\" he said, \"without assuming your debts.\" I got it. \r\nSo I told him everything and when I was done talking, I was in the Chain. I\'ve learned a lot since then, seen folks join up and you learn sooner or later, you gotta tell someone, at least one person, everything. Red was that person to me. \r\nYou want to give some kind of meaning to events. That\'s my job, I\'m the Chronicler. I write it here, and then it\'s true. But I don\'t know what the meaning of this was. We were set up. There was some kind of rivalry between the elf vampire and Ajax and we got caught in the middle. It was almost the end for us. \r\nI asked Red. What\'s this about? Since when are we in the fight against Ajax? He said, I mean he was right, he said the fight was gonna happen sooner or later. It wasn\'t a question of \"if,\" only \"when, and which side?\" \r\nHe was Vaslorian, watched everything go down from the front row. \"You don\'t know what it\'s like,\" he said, \"to see an entire way of life destroyed.\" He\'s right. Higara is.\r\n', 1),
('The night before', 'In those days, the Chain was in service to Lady Sariel. They met in a graveyard. \"I have given you arrows of liannar,\" the woman said. \"The bloodmetal. Made by father. Forged in the same fire and of the same steel as the Teeth of the Dragon. Use them.\" \"You\'ll have to get close,\" the nobleman next to her said. \"The range on those things is short.\" \r\nThe Commander shook his head, openly skeptical. \"We need...you said you\'d give us the tools we need and we get this? Aren\'t you some kind of...? Mortum\'s got so many wards, his wards have wards.\" \"Look to your chronicle,\" the ethereal woman said. \"The bloodmetal pierces all such defenses.\"\r\n\"Commander?\" the Lieutenant asked.\r\n\"Yeah?\"\r\n\"Mandrake\'s sword is made of bloodmetal.\"\r\n\"Is that right? Ok, well... If one sword could kill Vitae, maybe five arrows will do the trick.\"\r\n\"Baz-kor. Korz rogesh. Bezdin tok,\" the half-orc baron barked.\r\n\"What did your half-orc say?\"\r\nThe noble shifted in his armor. \"He said five arrows is a waste of four arrows.\r\n\"Because you\'ll only get one shot.\"', 2),
('The contract', 'IN ORDER to affect the DEATH of the Archwizard MORTUM, I, Kenway Dalrath bearer of the SHIELD OF AENDRIM and rightful Duke of Aendrim, in alliance with SARIEL, Princess of the Orchid Court, Oracle, hereby swear to pay the OFFICERS OF THE CHAIN OF ACHERON 100,000 golden crowns upon completion of this task.\r\nI, DUKE KENWAY, AGREE to provide the CHAIN any support necessary to complete their contract insofar as the assassination of the wizard MORTUM may require special tools unavailable to the CHAIN.\r\nMORTUM\'S BODY must be deceased, delivered, and identified by myself or a duly appointed representative. \r\nIN THE EVENT OF MY DEATH, verification and payment will be handled by Lady Sariel, Nekodemus Baron of Rend, or my lieutenant, Lady Avelina Knight of the Coals.\r\nTHIS CONTRACT does not forbid the CHAIN from assuming other duties, undertaking other contracts, or obligate them to field their soldiers in battle except insofar as doing so may be a necessary component of affecting the death of the Archmage MORTUM.\r\nSHOULD THE UNDERSIGNED PERISH due to any cause, including treachery, combat, natural causes, chance, luck, suicide or the direct or indirect intervention of a GOD, SAINT or agent of the timescape, the next ranking officers of the CHAIN assume the responsibilities of the undersigned, and agree to complete the terms of the contract, even should it cost their lives. \r\nBY THE ORDER OF\r\nKenway Dalrath\r\nWITNESSED BY\r\nSariel, Princess of the Orchid Court, Oracle\r\nSIGNED and SEALED\r\nTHE CHAIN\r\nof Acheron', 3),
('Sailors on the sea of stars', 'Something loomed out of the mist. I asked Godesto what it was. He shrugged. \"The flotsam and jetsam of the timescape,\" he said. Riojans have a way with words. \r\nSomewhere out in the mist some lost souls are watching the silhouette of a galleon - sails furled, three masts sticking up, unadorned, like the bones of a dead sea creature - sail by in the mist and they\'re asking \"what is that?\" And someone\'s shrugging and saying \"the flotsam and jetsam of the timescape.\" \r\nThis is the Sea of Stars. Presumably the Captain and Seer know how to get out of here. We\'ve been here before, but it was always the Lady of Brass\'s job to get us between worlds. There\'s some relation to mundane time and space here, but I have no idea what it is. \r\nIt\'s an eerie, unsettling experience. Fog everywhere. A flat light above us. The ocean looks to be about 4 feet deep. And stars under the water. Sound gets whisked away. It feels like being on a ship in a bottle, packed with cotton. \r\nBusiness as usual for the Chain. We\'ve been here before. Some of the rank and file freaked out, but they looked to the officers and seeing as how we were mostly bored, sleeping, or eating, they relaxed. It\'s easy to relax here. There\'s a sound, like a choir, out in the mist that will lull you to sleep. \r\n\"Giant\'s out in the fog,\" Copper said.\r\n\"Huh?\" I asked. Articulate.\r\nThe goblin hopped off the big cat and grabbed some raw fish. Took a bite and gave the rest to the cat. This is normal to me now.\r\n\"Big fuck-off giant walking around in the fog out there,\" he said, grabbing another fish from a barrel.\r\nI didn\'t know what to say about this. \"We in any danger?\"\r\nCopper wolfed down a fish head with one gulp. \"\'Course we fucking are,\" he said, licking his fingers. \"Chain of Acheron. We\'re not in danger, we\'re not in business.\"\r\nCopper is, of course, a prophet.\r\nLess than an hour later... or maybe an hour or maybe two, time gets away from you here, the Captain called out, \"Somnium Tenebris! Aft\" And every Riojan in ear shot soiled their pants. That was something to see. These guys don\'t seem afraid of anything; not us, not Ajax, not giants in the mist, but three words from the Captain and they were all looking for passage off this boat.\r\nWe assembled on the quarterdeck and any questions we had were quickly replaced by reality. Something was coming after us. Something big. At first, I thought it was a sea creature. \r\n\"It\'s a Mind Flayer dreadnaught,\" Judge said. The thing was maybe twice as big as the Rosso Cielo and closing. \r\n\"It\'s fast,\" I said. It would catch up in only a few moments. It was... it looked alive. Like someone built a ship on a giant space squid. And the squid was hungry. I was reminded of Copper eating fish heads. \r\n\"Can we outrun it?\" Sweet asked Lady Massingham. \r\n\"Not unless you\'re a lot smarter than you look,\" she said. She was making some internal calculation, and coming up short. \r\n\"Look!\" Copper said. His eyes are the keenest in the Chain. \r\nThe ship unfurled sails designed to catch a psychic wind. Black, tattered. Someone had painted a crude device on them. One we recognized. \r\n\r\n\"Ajax,\" Sweet guessed, before the sails were even finished unfurling. \r\n\r\n\"This is impossible,\" The Captain spat as her hands gripped the wheel. \"How did they know where we are? How did they find us??\" \r\n\r\nShe turned and grabbed Sweet by the shirt and shouted. \"Who ARE you people?!\" \r\n\r\nI\'ve seen a lot of remarkable things in the Astral Sea, but watching Captain Massingham grab Sweet and shout in his face was maybe the most astonishing. This is someone I\'ve personally watched punch his hand clear through a half-orc\'s head... and he wasn\'t even particularly angry in that moment, he was just working. \r\n\r\nSweet calmly pried the Captain\'s hand off his shirt and wisely let the lady live. Sweet might make a good Commander. \r\n\r\n\"You want to live through this,\" Sweet said. \"Tell us what that thing can do.\" \r\n\r\n\"They\'ll board us.\" \r\n\r\nJudge put a hand on the pommel of his big two-hander. \"Let\'s just...,\" he waved vaguely with his other hand, thick black fingernails on display. \"What happens after that?\" \r\n\r\n\"If we survive the boarding party... the ship\'s tentacles will rip the ship apart.\" \r\n\r\nI figured there was maybe something I could do about that, and called on Takeshima. Lightning rained down into the reaching, grasping tentacles but they proved thicker than my lightning. Well, we are far from home. \r\n\r\n\"It won\'t work,\" the Captain said. She was despairing. \"I watched those tentacles rip our sister ship apart. They had a wizard, too.\" \r\n\r\n\"Yeah,\" Sweet cracked his knuckles. \"But they didn\'t have us.\" This was by way of being an order. \r\n\r\nWe got ready for work. Weapons drawn, wards cast. Nails fired his namesake. \r\n\r\n\"You ok?\" I asked. \r\n\r\nNails took a drag. \"There a reason you\'re asking?\" \r\n\r\n\"Mostly because your eyes are silver.\" \r\n\r\nNails exhaled a long billow of smoke. \"Says who?\" he asked. Fair enough. \r\n\r\nThe boarding action was typical Duergar tactics. We heard them, knew they were there. They boarded the ship invisibly then dropped their psychic blinding field and shifted into their larger form to attack. Bigcat took some licks, but she\'s probably about as tough as this entire boat. She\'s built to take licks. \r\n\r\nIt was pretty clear whatever these guys were used to, it wasn\'t us. The crew joined in and between their piracy and our brand of underhanded villainy, the boarding action turned into a tactical retrograde. \r\n\r\nIt took a moment after the dark dwarves retreated for us to get our bearings. Everyone was waiting for the command, including Sweet. Then he remembered his new pay grade. \r\n\r\n\"BOARD THE SHIP!\" he hollered. In classic helltrooper style, we prepared to assault the ambush. \r\n\r\nI don\'t know what\'s on that ship. I don\'t know what we\'ll find or what they expected. But they\'re about to find out what happens when you cross swords with the Chain of Acheron. ', 4),
('A dark dream', '\"What did you say to Nails?\" Judge asked. \r\nSweet evaded. \"I did what I had to,\" he said. \"It worked.\" \r\nI watched Nails, normal Nails, trying to talk to the Navigator. Frustrated. Unsure what was happening, but made aware by Sweet that we needed him to do... something. He didn\'t know what. I didn\'t know what. It was a chance for the rest of us to have an impromptu staff meeting. \r\n\"For now,\" Judge said. \r\n\"Now\'s enough!\" Sweet snarled. \r\n\"You don\'t know that,\" Judge said. \"And you\'d be a fool to believe it.\" \r\nSweet didn\'t reply. Judge wasn\'t wrong. He took a step toward Sweet, lowered his voice. \r\n\"He\'s your friend,\" Judge said. \"You\'re trying to protect him. I\'m trying to protect the Chain. I need to know what you did in case the Other Nails comes back.\" \r\n\"If that happens, I\'ll take care of it,\" Sweet said. \r\n\"And what if you can\'t? What if the next person he turns into a red slick is you?\" \r\nJudge was out of line, I thought. I remembered who the Lieutenant was. \"Judge,\" I said. \"Stand down.\" \r\nHe wheeled on me. \"You\'re not senior officer here, Chronicler.\" He turned back to Sweet. \"What about it, Commander?\" \r\nI wanted to do something, voice some witty retort, but he was right. Sweet\'s in charge. \r\n\"You saw what happened to Buts,\" Judge said. \"What happens when he thinks we\'re \'insubordinate?\'\" Sweet said nothing, just bunched his fists. \r\n\"Sweet,\" Judge said. \"He\'s my friend too.\" That seemed to do the trick. \"What did you say to him?\" Sweet shook his head, like he disapproved of what he was saying. \"I named his True Name,\" he said. Judge nodded to himself. He\'d suspected. I\'d never considered it. Based on Copper\'s wide-eyed reponse, neither had he. BigCat seemed indifferent. \r\n\"Figured Nails killed everyone left who knew his Name,\" Copper said. \r\n\"I\'ve known it for years,\" Sweet said. \r\nJudge took a deep breath. \"Well now you can tell me.\" \r\n\"No,\" Sweet said, no hesitation. Uh oh. Sweet was already dug in on this one. So was Judge. \r\n\"Commander, you have to. His Name may be the only thing between us and obliteration, it can\'t just live in your head.\" \r\n\"Well it\'s going to have to,\" Sweet said. \"I solved the problem, he\'s fine. Move on.\" \r\nJudge wasn\'t in the mood to listen. \"You still haven\'t answered my question; what if Other Nails comes back?\" \r\nSweet scowled but said nothing. Just watched Nails trying to talk to the Navigator on the other side of the room. \r\n\"I\'ll kill him,\" a voice from behind me said. I turned. \r\nCopper. \r\nEveryone turned to the goblin atop BigCat. He had his bow, arrow nocked, resting on his leg.\r\n\"How?\" I asked. \"No spells work on him, no weapons hurt....\"\r\nCopper fingered the arrow in his bow. My jaw dropped. \r\n\"The red arrows,\" Sweet muttered. And Judge had the fourth. \r\n\"Things get out of hand,\" Copper said with a shrug, \"I\'ll shoot him. No problem.\" I couldn\'t tell if he meant, then there would be no more problem, or it would not be a problem for him to shoot another officer.\r\n\"You\'re talking about killing a senior officer,\" Sweet said, but his eyes were unfocused, he was looking at nothing. He was trying to figure out what this meant. \r\n\r\nIt was time for me to speak up. \"I can bring him back,\" I said. \r\n\r\n\"What?\" Sweet demanded, irritated. We were all irritating the Commander today. I have never known that to end well. \r\n\r\n\"As long as he hasn\'t been dead too long, I can bring him back,\" I said. Sweet stared at me. A plan was organizing itself. Nails was his friend, but Sweet had been Lieutenant for three years. He was a sucker for a plan. \r\n\r\n\"Other Nails comes back,\" Judge said, \"we say his name. He\'s mortal again. Copper shoots him with a red arrow, kills him. Releases... whatever\'s inside him. Then King brings him back. Brings back the man we knew.\" \r\n\r\n\"If Other Nails comes back.\" \r\n\r\n\"Come on, boss, you\'ve seen our luck these past two days,\" Copper said. \"What do you think happens next?\" \r\n\r\n\"I can\'t kill my friend,\" Sweet said. \r\n\r\n\"Tell me his Name,\" Judge said. He was fingering the fletchings of the red arrow stuck into his belt. \"I\'ll do the rest.\" \r\n\r\n\"I swore...,\" Sweet said, looking at Nails again. This was not what he signed up for when he took command. \r\n\r\n\"You made a promise to Nails. You swore an oath to the Chain. Which is more important to you?\" \r\n\r\nSuddenly a voice echoed in our heads. \"FORWARD.\" The boat lurched. We were underway. \"THAT\'S BETTER.\" \r\n\r\nNails turned around. But it had been his voice in our heads. We knew what we were going to see. \r\n\r\nHis eyes were solid silver again. And it wasn\'t just his eyes, his whole demeanor changed. His body language changed, he didn\'t move like a man who\'d been everywhere and seen it all. He moved  like... like this was his ship. Like he didn\'t need eyes to see anymore. Like he knew everything that was happening everywhere. Did he know what we were thinking? No. No probably not. If he did, he\'d stop us. \r\n\r\n\"SHALL WE?\" Other Nails said, walking past us to the moving room. \"THERE ARE THREE MORE LEVELS ABOVE THIS ONE. YOU SAID YOU WANTED TO FIND THE PILOT. THIS WAY.\" \r\n\r\nHe walked into the moving room. Its door opened for him automatically. \r\n\r\nWe followed. Sweet was the last. As Judge walked past him, he said, under his voice, \"You\'ve got a decision to make, Commander.\"', 5),
('The changeling', 'As you know, we\'ve taken a lot of losses in the recent days. We were almost 400 when we arrived in Blackbottom. Now we are less than 30. Commander Red is dead, his successor Commander Sweet is dead, Sr. Officer Nails is dead. They live forever in the Chronicle.\r\nThree days ago I was a junior officer. Some of you knew me. Now that I\'m Commander everyone\'s asking who I am. Where was I born? What did I do before? Here\'s the only answer you need: I was born here. In the Chain. Before this, I was the Chronicler.\r\nThe Chronicle tells of many times when the Chain was even smaller than it is now. But we survived. While we remain, the Chain is unbroken. While the Chronicle endures, the Chain is unbroken.\r\nWe\'ve made an enemy of Ajax. It seems he\'s made our deaths personal. But for us, death is business.\r\nOur outstanding contract is to kill one of Ajax\'s closest advisors. He has sent his agents across worlds to find us and hunt us. He means to kill us. I intend to fulfill the contract. The one place we know Ajax does not want to be is where we are headed: Capital. We will find allies there. I think it is likely many of our comrades from Blackbottom survived. They will know to find their way to Capital.\r\nThe Somnium Tenebris is ours. It will be our base of operations until further notice. Those of you served on a ship before, report to Boots, he is in charge of forming the crew that will maintain the ship. Our new friend, Slim, is piloting it.\r\nA new Lieutenant will be appointed once we have established in Capital. For now, report to your sergeants, to the junior officers, Sr. officer Judge, or myself.\r\nIn Capital, we will need to rebuild our ranks. Capital is a city of intrigue and marvels. I am sure you will find plenty of opportunity to keep your \"talents\" sharp.\r\nYou may think \"Ajax can\'t be beaten\". Three days ago, I might have agreed with you. But there is only one explanation for why he\'s chased us across the timescape. He fears us. He fears us because he thinks we can win. And now, so do I.', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Calendar`
--
ALTER TABLE `Calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Story`
--
ALTER TABLE `Story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Calendar`
--
ALTER TABLE `Calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Story`
--
ALTER TABLE `Story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# Protongame

## Etablir une stratégie de communication, de nos jours est primordial pour la survie de l'entreprise. De nouvelles idées permettent de développer des relations avec ses clients, ou avec des prospects: Protongame.

L'expérience utilisateur (UX) permet d'envisager une dimension plus grande dans la recherche de prospects, avec l'utilisation d'une application qui fait interagir le visiteur. Protongame est un jeu de hasard très simple, l'utilisateur en cas de victoire gagne une importante remise sur nos produits. Cette application est suivie par une analytique précise, une intégration segment avec une connexion pipedream pour collecter des informations relatives à cette expérience utilisateur. Ces informations peuvent être stockées dans une base de données tel que mongodb.

Une application "Call-to-action". Un call-to-action (CTA) se traduit en français par Bouton d'incitation à l'action. Il est essentiel dans la transformation de votre audience en lead, ou autrement dit, d'un visiteur inconnu à un prospect qualifié. Il détient une place centrale dans une stratégie d'Inbound Marketing. Bien sûr il faudra un peu d’imagination, pour mettre en place cette stratégie, moi j’ai pensé à un simple jeu de hasard, qui va permettre au candidat de gagner quelque chose en rapport avec ce que l’on vend d’habitude, dans mon cas le produit le plus courant est une site internet avec une remise importante.

Une remise, mais pas un site entièrement gratuit, cela permet un certain engagement avec un réel besoin. Les règles du jeu sont simples : Le candidat approuve les conditions d’utilisation ou peut revenir en arrière, dans ce cas il ne jouera pas. S’il choisit de continuer, celui-ci click sur un bouton pour générer un nombre aléatoire compris en 1 et 999, si au cours d’un click le nombre correspond à un des 6 chiffres eux aussi aléatoires, un formulaire apparaît afin de renseigner son adresse email, pour être contacté.

Le jeu permet deux parties seulement, l’accès à la deuxième partie se fait par une connexion sans mot passe, eh oui, il faut quand même renseigner son adresse email pour rejouer.

L’intérêt est que, dans tous les cas, les données de contact sont récupérées dans des bases de données : Clients/prospects. Ce procédé présente toutefois un inconvénient, une partie du processus d’authentification a des messages en Anglais, ce qui peut déstabiliser le client. En effet l’entreprise qui a crée cette technologie est récente, mais il suffit d’être un peu intuitif et logique pour mener les choses à bien.

- Gagnez 60% de remise sur votre site internet WordPress.

Je vous invite à vous connecter sur :

[Protongame](https://fredericbrodar.com/protongame/)

<img src="https://dev.fredericbrodar.com/img/protongame.PNG" />

## Utilisation de pipedream avec Segment:

Pipedream est une plate-forme d’intégration pour les développeurs de créer et d’exécuter des workflows qui intègrent des applications et des données.

 - Développez n’importe quel flux de travail, basé sur n’importe quel déclencheur.
 - Les workflows sont du code, que vous pouvez exécuter gratuitement.
 - Les flux de travail s’exécutent sans serveur : vous ne gérez aucune infrastructure propre.

## Obtenir des données avec segment:

La spécification de segment fournit des conseils sur les données significatives à capturer, et le meilleur format pour celles-ci, dans toutes les bibliothèques et API. Lorsque vous utilisez ces formats, il est simple d’envoyer des données aux outils en aval.

<img src="https://dev.fredericbrodar.com/img/segment.PNG" />

 - Ainsi, pour les besoins du site, les données de connexion sont à destination du Webhook qui est paramétré dans Pipedream.

<img src="https://dev.fredericbrodar.com/img/pipedream.jpg" />

 - Les données récupérées sont transitoires, et peuvent être stockées dans une base de donnée comme Mongodb. 

<img src="https://www.protonwebmaster.com/static/media/pipedream-mongodb-min.cb57216b.jpg" />
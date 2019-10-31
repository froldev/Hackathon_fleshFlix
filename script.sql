DROP DATABASE IF EXISTS hackathon;

CREATE DATABASE hackathon;

USE hackathon;

CREATE TABLE questions(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE response (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    image TEXT NOT NULL,
    description VARCHAR(255) NULL,
    category VARCHAR(50),
    questions_id INT NULL,
     FOREIGN KEY(questions_id)
        REFERENCES questions(id)
);

INSERT INTO questions (`name`) VALUES
        ('Quelle personne ne veux-tu absolument pas croiser dans un couloir ?'),
        ('Quel objet choisirais-tu pour te défendre ?'),
        ('Qu’aimes-tu faire après une bonne journée de travail ?'),
        ('Quel est le premier endroit auquel tu penses pour te cacher ?'),
        ('Quel type de personne es-tu ?'),
        ('Sais-tu courir vite, mais genre.. très très vite ?'),
        ('As-tu des lunettes ?'),
        ('Parles-tu latin ?'),
        ('Es-tu ?'),
        ('Sais-tu te battre ?'
        );

        INSERT INTO response(`image`, `description`, category) VALUES
            (
                'https://vignette.wikia.nocookie.net/villains/images/5/5d/Samara_Morgan.v1.jpg/revision/latest/scale-to-width-down/2000?cb=20180419112621',
                'Samara',
                'Ghost'
            ),
            (
                'https://i.pinimg.com/originals/83/9c/1f/839c1fd237ccbe001119d1fb06864fc7.jpg',
                'Michael Myers',
                'Slasher'
            ),
            (
                'https://i.ytimg.com/vi/x7SnXScLAg8/maxresdefault.jpg',
                'Mickael Jackson',
                'Zombie'
            ),
            (
                'http://golem13.fr/wp-content/uploads/2018/12/BAMBI-braconnier-peine-prison.jpg',
                'Bambi',
                'Secret'
            ),
            (
                'https://www.eurolam-thiers.com/1113-tm_large_default/couteau-eminceur-20-cm-zen-fischer-bargoin-couteau-chef.jpg',
                'Couteau',
                'Slasher'
            ),
            (
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypE5CZXjQkrhRDNb3-ECwflshEKrzpPeeqiIdti11oTk7gwCkMw&s',
                'Batte de baseball',
                'Zombie'
            ),
            (
                'https://www.cravate-avenue.com/11215-home_default/lacets-plats-coton-couleur-vert-armee.jpg',
                'Bible',
                'Ghost'
            ),
            (
                'https://www.cadeau-maestro.com/56213-thickbox_default/canard-vibrant-i-rub-my-duckie.jpg',
                'Canard vibrant',
                'Secret'
            ),
            (
                'https://images2.persgroep.net/rcs/9EUHTrnmESnqAbC3CX5ilvJvlt8/diocontent/147400992/_crop/0/120/899/508/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.9',
                'Regarder un film',
                'Ghost'
            ),
            (
                'https://i.ytimg.com/vi/QIzDAGDzUVg/hqdefault.jpg',
                'Se balader tout(e) seul(e) dans un bois sombre',
                'Slasher'
            ),
            (
                'https://www.terreur-nocturne.fr/wp-content/uploads/2019/08/la-nuit-des-morts-vivants-george-romero-1968.jpg',
                'Aller fleurir la tombe de son ami mystérieusement emporté par une épidémie fulgurante',
                'Zombie'
            ),
            (
                'https://i.ytimg.com/vi/K4jPqm1oclw/maxresdefault.jpg',
                'Faire des cupcakes',
                'Secret'
            ),
            (
                'https://img.ohmymag.com/article/insolite/une-femme-ecrit-une-lettre-de-rupture-et-va-se-cacher-sous-son-lit-pour-voir-la-reaction-de-son-copain_89e48fa3c9ae8a884b5a6adfcaf17b8c781550e9.jpg',
                'Sous le lit de ma soeur de 6 ans',
                'Slasher'
            ),
            (
                'https://www.le-lorrain.fr/files/uploads/2019/04/cathedrale-notre-dame-en-feu-770x400.jpg',
                'Dans une église',
                'Ghost'
            ),
            (
                'https://previews.123rf.com/images/rcphoto/rcphoto1310/rcphoto131000240/22941680-mausol%C3%A9e-dans-un-cimeti%C3%A8re-des-pionniers-de-vieux-brumeux-couvert.jpg',
                'Dans un mausolée',
                'Zombie'
            ),
            (
                'https://www.les-supers-parents.com/wp-content/uploads/2015/07/enfantquimord.jpg',
                'Derrière maman ou papa, ou papa et papa, ou maman et maman, bref, vous avez compris',
                'Secret'
            ),
            (
                'https://assets.change.org/photos/3/wn/ua/SnwNuAfdCHjPqqi-800x450-noPad.jpg?1554888818',
                'Ceux qui poussent à la salle',
                'Ghost'
            ),
            (
                'https://pbs.twimg.com/media/DvphtuKWsAAu1lW.jpg',
                'Ceux qui disent chocolatine',
                'Secret'
            ),
            (
                'https://images.wizbii.com/file/v1/8qakkdbfa1ea8e5m1f1m1z3ql0yo3nge.jpeg',
                'Ceux qui ont fait L',
                'Zombie'
            ),
            (
                'https://www.arinella.fr/templates/yootheme/cache/vacances-entre-amis-cd5009e6.jpeg',
                "Ceux  qui partent en weekend sur une île déserte, entre potes, en buvant beaucoup trop et sans écouter les avertissements du vieux monsieur qui les a pourtant bien prévenus qu'il y avaitdéjà eu un massacre 2 jours plus tôt",
                'Slasher'
            ),
            (
                'https://pich24.files.wordpress.com/2016/04/bip-bip-11.jpg?w=287&h=215',
                'Oui',
                'Slasher'
            ),
            (
                'https://ukrarenda.net/wp-content/uploads/2019/03/zootopie-le-paresseux-best-of-i-got-flash-find-your-inner-zootopia-character-of-zootopie-le-paresseux.jpg',
                'Non',
                ''
            ),
            (
                'https://www.ambiance-unic.fr/1710-tm_large_default/lunettes-rondes-geek-double-foyers.jpg',
                'Oui',
                'Secret'
            ),
            (
                'http://2.bp.blogspot.com/-CW0-0tQ80HU/UiELbE8GPRI/AAAAAAAADgk/t_-hqrTKsx0/s1600/Sillons.jpg',
                'Non',
                ''
            ),
            (
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrYIXOOE650G3tGekLHziG7sQTJFstXHeR-FIeDRQZwjGXHVfDw&s',
                'Oui',
                'Slasher'
            ),
            (
                'https://cpb-us-w2.wpmucdn.com/blogs.memphis.edu/dist/8/2284/files/2018/06/study1-1pbpo5c.jpg',
                'Non',
                ''
            ),
            (
                'https://www.brunet.ca/globalassets/sante/conseils-sante/une-bonne-sante-mentale/une-bonne-sante-mentale-big.jpg',
                'Oui',
                'Zombie'
            ),
            (
                'https://s.aolcdn.com/hss/storage/midas/dcd50c0247a2eb97d3cca038fb7ce5f1/202131371/NormaBates_Dummy.jpg',
                'Non',
                ''
            ),
            (
                 'https://i.pinimg.com/originals/f9/2f/ae/f92faef70df491c43f9dbed1aa244c70.jpg',
                'Oui',
                'Ghost'
            ),
            (
                'https://www.nzherald.co.nz/resizer/ieqYNn5vlvgg6hsAHVVR11ZmNxo=/360x384/filters:quality(70)/arc-anglerfish-syd-prod-nzme.s3.amazonaws.com/public/C6SAVDP4CBGFLIP6A752AJJ54A.jpg',
                'Non',
                ''
            );

drop DATABASE Exploria;
CREATE DATABASE Exploria;
USE Exploria;

CREATE TABLE lieux (
    idLieux INT AUTO_INCREMENT PRIMARY KEY,
    nomDestination VARCHAR(50) NOT NULL,
    prix FLOAT NOT NULL,
    description VARCHAR(255)
);

CREATE TABLE utilisateur (
    idUtilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    mail VARCHAR(255) NOT NULL UNIQUE,
    MDP VARCHAR(255) NOT NULL
);

Create TABLE offres (
    idOffre INT AUTO_INCREMENT PRIMARY KEY,
    nomOffres VARCHAR(50) NOT NULL,
    prix FLOAT NOT NULL,
    description VARCHAR(255),
    personnesmax INT NOT NULL,
    besoin VARCHAR(255)
);

INSERT INTO lieux (nomDestination, prix, description) VALUES
('Paris', 999.99, 'Hôtel 4 étoiles au cœur de Paris'),
('Rome', 85, 'Hôtel confortable proche du centre historique'),
('Tokyo', 90, 'Hotel moderne, équipé avec un service de qualité'),
('Seoul', 74.59, 'Un hôtel de caractère dédié au confort et à la détente'),
('Bucarest', 90, 'Un cadre élégant pour un séjour agréable et reposant.'),
('New York', 80.99, 'Un hôtel moderne pensé pour le bien-être et le repos'),
('Berlin', 69.99, 'Un hôtel convivial offrant une expérience confortable'),
('Madrid', 99, 'Un hôtel raffiné offrant calme, confort et service attentionné.');

INSERT INTO offres (nomOffres, prix, description, personnesmax, besoin) VALUES
('seul', 20, 'pour se découvrir soi-même', 1, ""),
('couple', 29, 'pour partir avec votre moitier', 2, "présenter un certificat de mariage"),
('ami', 40, 'passer du temps avec un(e) ami(e)', 2, ""),
('famille', 50, 'etre en famille', 4, ""),
('groupe', 70, 'plus on est de fous plus on rit', 10, "");

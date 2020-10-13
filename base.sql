create table categorie
(
    Id      int auto_increment
        primary key,
    Icon    varchar(50) null,
    Libelle varchar(50) null
);

create table articles
(
    Id               bigint auto_increment
        primary key,
    Titre            varchar(50)  null,
    Description      text         null,
    DateAjout        date         null,
    Auteur           varchar(50)  null,
    ImageRepository  varchar(50)  null,
    ImageFileName    varchar(255) null,
    CategorieArticle int          null,
    constraint articles_categorie_Id_fk
        foreign key (CategorieArticle) references categorie (Id)
);


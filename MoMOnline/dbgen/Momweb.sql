/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  20/11/2014 23:37:04                      */
/*==============================================================*/


drop table if exists DROIT;

drop table if exists UTILISATEUR;

/*==============================================================*/
/* Table : DROIT                                                */
/*==============================================================*/
create table DROIT
(
   ID_DROIT             int not null auto_increment,
   NOM                  text,
   DESCRIPTION          text,
   primary key (ID_DROIT)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   PSEUDO               text,
   PASSWORD             text,
   ID_UTILISATEUR       int not null auto_increment,
   ID_DROIT             int,
   primary key (ID_UTILISATEUR)
);

alter table UTILISATEUR add constraint FK_RELATION_1 foreign key (ID_DROIT)
      references DROIT (ID_DROIT) on delete restrict on update restrict;


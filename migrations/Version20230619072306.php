<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230619072306 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entrevista (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, testigo VARCHAR(255) NOT NULL, t_crimen VARCHAR(255) NOT NULL, transcripcion VARCHAR(1000) NOT NULL)');
        $this->addSql('CREATE TABLE escena (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, fecha DATE NOT NULL, ciudad VARCHAR(255) NOT NULL, t_crimen VARCHAR(255) NOT NULL, descripcion CLOB NOT NULL, testigo1 VARCHAR(255) NOT NULL, testigo2 VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE library (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, tarjeta_id INTEGER NOT NULL, nombre VARCHAR(255) NOT NULL, seudonimo VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE personas (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, c_ojos VARCHAR(255) NOT NULL, c_cabello VARCHAR(255) NOT NULL, t_zapato VARCHAR(255) NOT NULL, genero VARCHAR(255) NOT NULL, tatuaje VARCHAR(255) NOT NULL, t_tatuaje VARCHAR(255) NOT NULL)');
        $this->addSql('DROP TABLE pizza');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pizza (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, precio VARCHAR(255) NOT NULL COLLATE "BINARY", sabor VARCHAR(255) NOT NULL COLLATE "BINARY", peso VARCHAR(255) NOT NULL COLLATE "BINARY")');
        $this->addSql('DROP TABLE entrevista');
        $this->addSql('DROP TABLE escena');
        $this->addSql('DROP TABLE library');
        $this->addSql('DROP TABLE personas');
    }
}

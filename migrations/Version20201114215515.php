<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201114215515 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE naked (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, descripcion VARCHAR(255) DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, tipo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE custom ADD id INT AUTO_INCREMENT NOT NULL, ADD name VARCHAR(255) DEFAULT NULL, ADD price VARCHAR(255) DEFAULT NULL, ADD tipo VARCHAR(255) DEFAULT NULL, DROP nombre, DROP precio, CHANGE descripcion descripcion VARCHAR(255) DEFAULT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE deportiva ADD categoria_id INT DEFAULT NULL, ADD tipo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE deportiva ADD CONSTRAINT FK_9DEFC083397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id)');
        $this->addSql('CREATE INDEX IDX_9DEFC083397707A ON deportiva (categoria_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE naked');
        $this->addSql('ALTER TABLE custom MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE custom DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE custom ADD nombre INT NOT NULL, ADD precio INT NOT NULL, DROP id, DROP name, DROP price, DROP tipo, CHANGE descripcion descripcion INT NOT NULL');
        $this->addSql('ALTER TABLE deportiva DROP FOREIGN KEY FK_9DEFC083397707A');
        $this->addSql('DROP INDEX IDX_9DEFC083397707A ON deportiva');
        $this->addSql('ALTER TABLE deportiva DROP categoria_id, DROP tipo');
    }
}
